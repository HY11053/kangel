<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\flink;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ArticleTraslateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    /**
     * 栏目导入
     */
    public function getTypes()
    {
        $types=DB::connection('kangjie')->select('SELECT * FROM kangjie_arctype  WHERE id> ?',[0]);
        //dd($types);
        foreach ($types as $type)
        {
            $inserttypes=[];
            $inserttypes['id']=$type->id;
            $inserttypes['is_write']=1;
            $inserttypes['keywords']=$type->keywords;
            $inserttypes['reid']=$type->reid;
            $inserttypes['topid']=$type->topid;
            $inserttypes['sortrank']=$type->sortrank;
            $inserttypes['typename']=$type->typename;
            $inserttypes['typedir']=str_replace('{cmspath}','',$type->typedir);
            $inserttypes['description']=$type->description;
            $inserttypes['namerule']=$type->namerule;
            $inserttypes['namerule2']=$type->namerule2;
            if (isset($type->descriptions2))
            {
                $inserttypes['descriptions2']=str_limit($type->descriptions2,180,'');
            }
            $inserttypes['real_path']=trim($inserttypes['typedir'],'/');
            $inserttypes['title']=str_replace('{cmspath}','',$type->seotitle);
            Arctype::create($inserttypes);
            echo $inserttypes['id'].'***********'.$inserttypes['namerule'].'<br/>';
        }
        echo '栏目导入成功';
    }
    /**普通文档导入
     *
     */
    public function getArticles()
    {
        //$articles=DB::connection('51xxsp')->select('SELECT * FROM is_news  WHERE nid>? ',[0]);
        $articles=DB::connection('kangjie')->select('SELECT * FROM kangjie_archives  WHERE id> ?',[0]);
        //dd($articles[0]);
        foreach ($articles as $article)
        {
            $inserarticle=[];
            $inserarticle['id']=$article->id;
            $inserarticle['typeid']=$article->typeid;
            $inserarticle['flags']=$article->flag;
            $inserarticle['ismake']=$article->ismake;
            $inserarticle['click']=$article->click;
            $inserarticle['title']=str_limit($article->title,120,'');
            $inserarticle['write']=$article->writer;
            $inserarticle['litpic']=$article->litpic;
            $inserarticle['keywords']=$article->keywords;
            $inserarticle['dutyadmin']=1;
            if (!empty($article->senddate))
            {
                $inserarticle['created_at']=Carbon::createFromTimestamp($article->senddate,'PRC');
                $inserarticle['updated_at']=Carbon::createFromTimestamp($article->pubdate,'PRC');
            }else{
                $inserarticle['created_at']=Carbon::now();
                $inserarticle['updated_at']=Carbon::now();
            }
            $inserarticle['published_at']=$inserarticle['created_at'];
            $inserarticle['description']=str_limit($article->description,280,'');
            //dd(DB::connection('kangjie')->select('SELECT `*` FROM kangjie_addonarticle  WHERE aid=?',[$article->id]));
            $inserarticle['body']=DB::connection('kangjie')->select('SELECT `body` FROM kangjie_addonarticle  WHERE aid=?',[$article->id])[0]->body;
            Archive::create($inserarticle);

        }
        echo '导入成功！！！';
    }


    //友情链接数据导入
    public function getFlinks()
    {
        $answers=DB::connection('kangjie')->select('SELECT * FROM kangjie_flink  WHERE id>?',[0]);
        //dd($answers);
        foreach ($answers as $article)
        {
                $inserarticle=[];
                $inserarticle['weburl']=$article->url;
                $inserarticle['webname']=$article->webname;
                $inserarticle['note']=$article->msg;
                $inserarticle['created_at']=Carbon::createFromTimestamp(strtotime($article->dtime),'PRC');
                $inserarticle['updated_at']=$inserarticle['created_at'];
                //dd($inserarticle);
                flink::create($inserarticle);

        }
        echo '导入成功';
    }

}
