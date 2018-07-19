<?php

namespace App\Http\Controllers\Mobile;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
use App\AdminModel\Ask;
use App\AdminModel\Brandarticle;
use App\AdminModel\Comtmessage;
use App\AdminModel\IndustryNew;
use App\AdminModel\Shopinfomation;
use App\Overwrite\Paginator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ListArticleController extends Controller
{
    /**走进康洁
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Zoujinkangjie(Request $request)
    {
        $thistypeinfo=Arctype::findOrFail(Arctype::where('real_path',$request->path())->value('id'));
        $lastenews=Archive::latest()->orderBy('id','desc')->take(10)->get();
        return view('mobile.zoujinkangjie',compact('thistypeinfo','lastenews'));
    }

    /**VI识别
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Vibrand(Request $request)
    {
        $thistypeinfo=Arctype::findOrFail(Arctype::where('real_path',$request->path())->value('id'));
        $lastenews=Archive::latest()->orderBy('id','desc')->take(10)->get();
        return view('mobile.vibrand',compact('thistypeinfo','lastenews'));
    }

    /**联系我们
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Contact(Request $request)
    {
        $thistypeinfo=Arctype::findOrFail(Arctype::where('real_path',$request->path())->value('id'));
        $lastenews=Archive::latest()->orderBy('id','desc')->take(10)->get();
        return view('mobile.contact',compact('thistypeinfo','lastenews'));
    }

    /**客户服务
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Service(Request $request)
    {
        $thistypeinfo=Arctype::findOrFail(Arctype::where('real_path',$request->path())->value('id'));
        $lastenews=Archive::latest()->orderBy('id','desc')->take(10)->get();
        return view('mobile.service',compact('thistypeinfo','lastenews'));
    }

    /**公司风貌列表
     * @param Request $request
     * @param $path
     * @param int $tid
     * @param int $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function FengmaoLists(Request $request,$path,$tid=0,$page=0)
    {
        $thistypeinfo=Arctype::findOrFail(Arctype::where('real_path',trim(preg_replace('#list_[0-9]+_[0-9]+\.html#','',$request->path()),'/'))->value('id'));
        $lastenews=Archive::latest()->orderBy('id','desc')->take(10)->get();
        $pagelists=Archive::whereIn('typeid',Arctype::where('reid',$thistypeinfo->id)->pluck('id'))->orWhere('typeid',$thistypeinfo->id)->orderBy('id','desc')->get();
        return view('mobile.list_fengmao',compact('thistypeinfo','pagelists','lastenews'));
    }

    public function Zhaoshang(Request $request)
    {
        $thistypeinfo=Arctype::findOrFail(Arctype::where('real_path',$request->path())->value('id'));
        $lastenews=Archive::latest()->orderBy('id','desc')->take(10)->get();
        return view('mobile.zhaoshang',compact('thistypeinfo','lastenews'));
    }
    /**普通文档列表
     * @param Request $request
     * @param int $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function NewsList(Request $request,$path,$tid=0,$page=0)
    {
        $thistypeinfo=Arctype::findOrFail(Arctype::where('real_path',trim(preg_replace('#list_[0-9]+_[0-9]+\.html#','',$request->path()),'/'))->value('id'));
        $latestlists=Archive::take(10)->latest()->get();
        $pagelists=Archive::where('typeid',$thistypeinfo->id)->orderBy('id','desc')->paginate($perPage = 10, $columns = ['*'], $pageName = 'list_', $page);
        $cid=$path;
        $pagelists= Paginator::transfer(
            $cid,//传入分类id,
            $tid,
            $pagelists//传入原始分页器
        );
        if (str_contains($pagelists->links(),'page='))
        {
            $pagelink=str_replace(['page=','tid=0&','amp;'],'',str_replace('?','/list_',$pagelists->links()));
            $pagelink=preg_replace('/list_([0-9]+)/','list_'.$thistypeinfo->id.'_${1}'.'.html',$pagelink);
        }else{
            $pagelink=$pagelists->links();
        }

        return view('mobile.list_articles',compact('thistypeinfo','pagelists','pagelink','latestlists'));
    }
}

