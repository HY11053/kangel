<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Archive;
use App\AdminModel\Ask;
use App\AdminModel\Brandarticle;
use App\AdminModel\Comment;
use App\AdminModel\Comtmessage;
use App\AdminModel\IndustryNew;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CheckToolsController extends Controller
{
    public function cheakDescription()
    {
        $articles=Archive::where('description','')->orWhere('description',null)->get();
        foreach ($articles as $article)
        {
            $description=str_limit(str_replace(['&nbsp;',' ','　',PHP_EOL,'\t'],'',strip_tags(htmlspecialchars_decode($article->article->body))), $limit = 240, $end = '');
            Archive::find($article->id)->update(['description'=>$description]);
        }
        echo 'success';
    }

    /**
     * 普通文档时间更新
     */
    public function upadateTime()
    {
        $articles=Archive::where('created_at','<',Carbon::create('2018','1','1','12'))->orderBy('id','desc')->get();
        //dd($articles);
        foreach ($articles as $article) {
            if (Carbon::now()->month>$article->created_at->month)
            {
                //dd($article->id,$article->title,Carbon::create(Carbon::now()->year,$article->created_at->month,$article->created_at->day,$article->created_at->hour,$article->created_at->minute,$article->created_at->second));
                Archive::where('id',$article->id)->update(['created_at'=>Carbon::create(Carbon::now()->year,$article->created_at->month,$article->created_at->day,$article->created_at->hour,$article->created_at->minute,$article->created_at->second)]);
            }else{
                Archive::where('id',$article->id)->update(['created_at'=>Carbon::create('2017',$article->created_at->month,$article->created_at->day,$article->created_at->hour,$article->created_at->minute,$article->created_at->second)]);
            }
        }

    }

    /**
     * 品牌文档时间更新
     */
    public function updateBrandtime()
    {
        $brandarticles=Brandarticle::where('created_at','<',Carbon::create('2018','1','1','12'))->orderBy('id','desc')->get();
        foreach ($brandarticles as $article) {
            if (Carbon::now()->month>$article->created_at->month)
            {
                //dd($article->id,$article->title,Carbon::create(Carbon::now()->year,$article->created_at->month,$article->created_at->day,$article->created_at->hour,$article->created_at->minute,$article->created_at->second));
                Brandarticle::where('id',$article->id)->update(['created_at'=>Carbon::create(Carbon::now()->year,$article->created_at->month,$article->created_at->day,$article->created_at->hour,$article->created_at->minute,$article->created_at->second)]);
            }else{
                Brandarticle::where('id',$article->id)->update(['created_at'=>Carbon::create('2017',$article->created_at->month,$article->created_at->day,$article->created_at->hour,$article->created_at->minute,$article->created_at->second)]);
                Brandarticle::where('id',$article->id)->update(['created_at'=>$article->created_at->addMonth(6)]);
            }
        }
    }

    /**
     * 行业新闻时间更新
     */
    public function updateHynewstime()
    {
        $hynews=IndustryNew::where('created_at','<',Carbon::create('2018','1','1','12'))->orderBy('id','desc')->get();
        foreach ($hynews as $article) {
            if (Carbon::now()->month>$article->created_at->month)
            {
                //dd($article->id,$article->title,Carbon::create(Carbon::now()->year,$article->created_at->month,$article->created_at->day,$article->created_at->hour,$article->created_at->minute,$article->created_at->second));
                IndustryNew::where('id',$article->id)->update(['created_at'=>Carbon::create(Carbon::now()->year,$article->created_at->month,$article->created_at->day,$article->created_at->hour,$article->created_at->minute,$article->created_at->second)]);
            }else{
                IndustryNew::where('id',$article->id)->update(['created_at'=>Carbon::create('2017',$article->created_at->month,$article->created_at->day,$article->created_at->hour,$article->created_at->minute,$article->created_at->second)]);
                IndustryNew::where('id',$article->id)->update(['created_at'=>$article->created_at->addMonth(6)]);
            }
        }
    }

    /**
     * 问答时间更新
     */
    public function updateAskstime()
    {
        $hynews=Ask::where('created_at','<',Carbon::create('2018','1','1','12'))->orderBy('id','desc')->get();
        foreach ($hynews as $article) {
            if (Carbon::now()->month>$article->created_at->month)
            {
                //dd($article->id,$article->title,Carbon::create(Carbon::now()->year,$article->created_at->month,$article->created_at->day,$article->created_at->hour,$article->created_at->minute,$article->created_at->second));
                Ask::where('id',$article->id)->update(['created_at'=>Carbon::create(Carbon::now()->year,$article->created_at->month,$article->created_at->day,$article->created_at->hour,$article->created_at->minute,$article->created_at->second)]);
            }else{
                Ask::where('id',$article->id)->update(['created_at'=>Carbon::create('2017',$article->created_at->month,$article->created_at->day,$article->created_at->hour,$article->created_at->minute,$article->created_at->second)]);
                Ask::where('id',$article->id)->update(['created_at'=>$article->created_at->addMonth(6)]);
            }
        }
    }

    /**
     * 评论时间更新
     */
    public function updateCommentstime()
    {
        $comments=Comtmessage::where('created_at','<',Carbon::create('2018','1','1','12'))->orderBy('id','desc')->get();
        foreach ($comments as $article) {
            if (Carbon::now()->month>$article->created_at->month)
            {
                //dd($article->id,$article->title,Carbon::create(Carbon::now()->year,$article->created_at->month,$article->created_at->day,$article->created_at->hour,$article->created_at->minute,$article->created_at->second));
                Comtmessage::where('id',$article->id)->update(['created_at'=>Carbon::create(Carbon::now()->year,$article->created_at->month,$article->created_at->day,$article->created_at->hour,$article->created_at->minute,$article->created_at->second)]);
            }else{
                Comtmessage::where('id',$article->id)->update(['created_at'=>Carbon::create('2017',$article->created_at->month,$article->created_at->day,$article->created_at->hour,$article->created_at->minute,$article->created_at->second)]);
                Comtmessage::where('id',$article->id)->update(['created_at'=>$article->created_at->addMonth(6)]);
            }
        }
    }

    public function cheakUrls()
    {
     $archives=Archive::where('ismake',1)->where('id','>',19000)->get();
     foreach ($archives as $archive)
     {
         echo str_replace('www.','mip.',config('app.url')).'/'.$archive->arctype->real_path.'/'.$archive->id.'/'.'<br/>';
     }

    }

    public function checkhynewurls()
    {
        $industrys=IndustryNew::where('ismake',1)->where('typeid',6)->get();
        foreach ($industrys as $archive)
        {
            echo str_replace('www.','mip.',config('app.url')).'/'.$archive->arctype->real_path.'/'.$archive->id.'/'.'<br/>';
        }
    }

    public function checkbrandsurls()
    {
        $brandurls=Brandarticle::where('ismake',1)->get();
        foreach ($brandurls as $archive)
        {
            echo str_replace('www.','mip.',config('app.url')).'/ganxi_pinpai_'.$archive->pinyin.'/'.'<br/>';
        }
    }

    public function checkaskurls()
    {
        $asks=Ask::where('is_hidden',1)->get();
        foreach ($asks as $archive)
        {
            echo str_replace('www.','mip.',config('app.url')).'/wenda/'.$archive->id.'/'.'<br/>';
        }
    }


}
