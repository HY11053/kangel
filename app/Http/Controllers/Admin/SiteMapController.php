<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SiteMapController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    /**
     * PC端地图、、生成
     * @param
     *
     * @return
     */
    function Index()
    {
        $typedirs=Arctype::pluck('real_path');
        $allarticles=Archive::where('ismake',1)->get();
        $xmlcontent='<?xml version="1.0" encoding="utf-8"?>
<urlset>
<url>
    <loc>'.config('app.url').'</loc>
    <lastmod>'.date('Y-m-d',strtotime(time())).'</lastmod>
    <changefreq>daily</changefreq>
    <priority>1.0</priority>
</url>
    ';
        foreach ($typedirs as $typedir)
        {
            $xmlcontent.='<url>
<loc>'.config('app.url').'/'.$typedir.'/'.'</loc>
<changefreq>daily</changefreq>
<priority>0.8</priority>
</url>
';
        }
        foreach ($allarticles as $allarticle)
        {
            $xmlcontent.='<url>
<loc>'.config('app.url').'/'.$allarticle->arctype->real_path.'/'.$allarticle->id.'.html'.'</loc>
<lastmod>'.date('Y-m-d',strtotime($allarticle->created_at)).'</lastmod>
<changefreq>daily</changefreq>
</url>
';
        }
        $xmlcontent.='</urlset>';
        if(Storage::disk('public')->put('sitemap.xml', $xmlcontent)){
            $msg= 'XML文件生成成功';
        }else{
            $msg= '文件生成失败@';
        }
        return view('admin.sitemapcreate',compact('msg'));
    }

    /**
     * 移动端地图生成
     * @param
     *
     * @return
     */

    function MobileSitemap()
    {
        $typedirs=Arctype::pluck('real_path');
        $weburl=str_replace('www.','m.',config('app.url'));
        $allarticles=Archive::where('ismake',1)->get();
        $xmlcontent='<?xml version="1.0" encoding="utf-8"?>
<urlset>
<url>
    <loc>'.$weburl.'</loc>
    <lastmod>'.date('Y-m-d',strtotime(time())).'</lastmod>
    <changefreq>daily</changefreq>
    <priority>1.0</priority>
</url>
    ';
        foreach ($typedirs as $typedir)
        {
            $xmlcontent.='<url>
<loc>'.$weburl.'/'.$typedir.'/'.'</loc>
<changefreq>daily</changefreq>
<priority>0.8</priority>
</url>
';
        }
        foreach ($allarticles as $allarticle)
        {
            $xmlcontent.='<url>
<loc>'.$weburl.'/'.$allarticle->arctype->real_path.'/'.$allarticle->id.'.html'.'</loc>
<lastmod>'.date('Y-m-d',strtotime($allarticle->created_at)).'</lastmod>
<changefreq>daily</changefreq>
</url>
';
        }
        $xmlcontent.='</urlset>';
        if(Storage::disk('public')->put('msitemap.xml', $xmlcontent)){
            $msg= 'XML文件生成成功';
        }else{
            $msg= '文件生成失败@';
        }
        return view('admin.sitemapcreate',compact('msg'));
    }
}
