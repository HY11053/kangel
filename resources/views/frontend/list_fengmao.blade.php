@extends('frontend.frontend')
@section('headlibs')
    <title>{{$thistypeinfo->title}}-康洁洗衣</title>
    <meta name="keywords" content="{{$thistypeinfo->keywords}}" />
    <meta name="description" content="{{$thistypeinfo->description}}" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('www.','m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('www.','m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('www.','m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)"     href="{{str_replace('www.','m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="stylesheet" type="text/css" href="/templets/kangjie/static/css/style4.css"/>
@stop
@section('main_content')
    <div class="case-warp csort">
        <div class="case-sort">
            <div class="Container">
                <ul>
                    <li class="cat-item cat-item-2"><a href="/a/fengmao/">所有</a> </li>
                    <li class="cat-item"><a href="/a/fengmao/gongchang/">洗衣工厂</a> </li>
                    <li class="current-cat"><a href="/a/fengmao/dianmian/" class="thisclass">店面风采</a></li>
                    <li class="cat-item"><a href="/a/fengmao/tuandui/">团队人物</a> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bg-gray padding60">
        <div class="Container">
            <!--case list-->
            <div class="case-list" id="content">
                @foreach($pagelists as $pagelist)
                <article>
                    <div class="citem"> <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html" title=""> <img src="{{$pagelist->litpic}}" style="width: 280px;height: 180px;" class="attachment-post-thumbnail wp-post-image" alt="{{$pagelist->title}}"/> <span></span> </a>
                        <div class="citemtxt"> <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html" title="{{$pagelist->title}}">
                                <h4></h4>
                            </a>
                            <p><span><a href=/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html">{{$pagelist->title}}</a></span><em> <label>{{$pagelist->click}}</label> 浏览</em> </p>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
            <!--//case list-->
        </div>
    </div>
    <div class="clearfix"></div>
@stop