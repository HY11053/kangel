<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Archive;
use App\AdminModel\Brandarticle;
use App\AdminModel\IndustryNew;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use QL\QueryList;
use Illuminate\Support\Facades\DB;

class SeoInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    //
    function Index()
    {
      abort(403);

    }
    /**
     * 相关搜索内容提取
     * return
     */
    function SearchKey(Request $request)
    {
        if (!trim($request['search']))
        {
            $baiduinfos=[];
            $sogouinfos=[];
            $haosoinfos=[];
            $mbdinfos=[];
        }else{
            $baiduurl='http://www.baidu.com/s?ie=utf-8&wd='.$request['search'];
            $sogouurl='http://www.sogou.com/web?query='.$request['search'].'&ie=utf8';
            $haosourl='https://www.so.com/s?ie=utf-8&fr=none&src=360sou_newhome&q='.$request['search'];
            $mbaiduurl='https://m.baidu.com/ssid=37eed2bbb8f6bfd3b6f8d2d13c2f/from=844b/s?word='.$request['search'];
            //百度pc
            $html = file_get_contents($baiduurl);
            $data = QueryList::html($html)->rules([   'titles' => ['#rs','text']])->query()->getData()->all();
            if ($data[0]['titles'])
            {
                $baiduinfos=array_filter(explode('#',preg_replace('#[\n\r]+#','#',$data[0]['titles'])));
                array_shift($baiduinfos);
            }else{
                $baiduinfos=[];
            }
            $sougouhtml= file_get_contents($sogouurl);
            $sougoudata = QueryList::html($sougouhtml)->rules(['titles' => ['#hint_container','text']])->query()->getData()->all();
            //搜狗
            if (isset($sougoudata[0]['titles']))
            {
                $sogouinfo=explode('#',preg_replace('#[\n]+#','#',$sougoudata[0]['titles']));
                array_shift($sogouinfo);
                $sogouinfos='';
                foreach ($sogouinfo as $sougou)
                {
                    $sogouinfos.=$sougou;
                }
                $sogouinfos=array_filter(explode(' ',$sogouinfos));
            }else{
                $sogouinfos=[];
            }
            //好搜
            $haosouhtml= file_get_contents($haosourl);
            $haosoudata = QueryList::html($haosouhtml)->rules(['titles' => ['#rs','text']])->query()->getData()->all();
            if ($haosoudata[0]['titles'])
            {
                $haosoinfos=array_filter(explode('#',preg_replace('#[\n\r ]+#','#',$haosoudata[0]['titles'])));
                array_shift($haosoinfos);
            }else{
                $haosoinfos=[];
            }
            //百度移动
            $mbaiduhtml= file_get_contents($mbaiduurl);
            $mbdinfos=[];
            $mbaidudata = QueryList::html($mbaiduhtml)->rules(['titles' => ['.rw-list a','text']])->query()->getData()->all();
            if (is_array($mbaidudata))
            {
                foreach ($mbaidudata as $key=>$mbaidu)
                {
                    if (isset($mbaidu['titles']))
                    {
                        $mbdinfos[]=$mbaidu['titles'];
                    }
                }
            }
            array_unique($mbdinfos);
        }
        $keywords=$request->input('search');
        return view('admin.keyword_search',compact('baiduinfos','sogouinfos','haosoinfos','mbdinfos','keywords'));

    }


    public function BrandsView()
    {
        $brands= Archive::where('mid','=',1)->get();
        return view('frontend.brandview',compact('brands'));
    }

    public function WorkLinks()
    {

        //$links=Archive::where('created_at','<',Carbon::now())->get();
        $brands=explode(PHP_EOL,Storage::get('brand.txt'));
        foreach ($brands as $brand)
        {
            $newbrands[]=explode('###',$brand);

        }
        foreach ($newbrands as $newbrand)
        {
            $brandname=trim(Brandarticle::where('id',$newbrand[0])->value('brandname'));
            echo($brandname).'<br/>';
            Archive::where('title','like','%'.trim($newbrand[1]).'%')->update(['brandid'=>($newbrand[0]),'bdname'=>$brandname]);
            IndustryNew::where('title','like','%'.trim($newbrand[1]).'%')->update(['brandid'=>($newbrand[0]),'bdname'=>$brandname]);
        }
        echo '更新成功1';



        //$links=Brandarticle::where('ismake',1)->pluck('brandname','id');
        //return view('admin.worklinks',compact('links'));
    }
    /*
     * 监测空短标题
     */
    public function WorkCheck()
    {
        $urls=Archive::where('shorttitle','')->get();
        foreach ($urls as $url)
        {
            echo $url->id.'-------'.$url->title.'----------------'.$url->write.'----------'.'发布时间:'.$url->published_at.'<br/>';
        }
    }
}
