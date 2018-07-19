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
        <div class="case-sort2">
            <div class="Container">
                <ul>
                    <li class="cat-item"><a href="/a/dongtai/pinpai/">企业品牌</a> </li>
                    <li class="cat-item"><a href="/a/dongtai/zixun/">新闻资讯</a> </li>
                    <li class="cat-item"><a href="/a/dongtai/jiameng/">加盟我们</a> </li>
                    <li class="cat-item"><a href="/a/dongtai/peixun/">培训管理</a> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main1">
        <div class="mainn">
            <div class="mleft">
                @foreach($pagelists as $pagelist)
                <div class="artlist">
                    <div class="times" onmouseover="this.className='ontimes'" onmouseout="this.className='times'">{{$pagelist->created_at}}<br/></div>
                    <div class="listt">
                        <div class="listtbt"><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html"><b>{{$pagelist->title}}</b></a></div>
                        <div class="listtnr">{{$pagelist->description}}<a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html">[详情]</a></div>
                    </div>
                </div>
                @endforeach

                <div class="tg_pages">
                        {!! $pagelink !!}
                </div>
            </div>
            <div class="mright">
                <div class="part2"><span><a href="/a/fengmao/dianmian/">最新风貌</a></span><a href="/a/fengmao/dianmian/"><img src="/templets/kangjie/static/images/more.jpg"/></a></div>
                <div class="part3">
                    @foreach($fengmaolists as $fengmaolist)
                    <div class="zxal"> <a href="/{{$fengmaolist->arctype->real_path}}/{{$fengmaolist->id}}.html"><img src="{{$fengmaolist->litpic}}"   width="120" height="70"></a>
                        <p><a href="/{{$fengmaolist->arctype->real_path}}/{{$fengmaolist->id}}.html">{{$fengmaolist->title}}</a></p>
                    </div>
                    @endforeach
                </div>
                <div class="part2"><span><a href="/a/dongtai/">推荐阅读</a></span><a href="/a/dongtai/"><img src="/templets/kangjie/static/images/more.jpg"/></a></div>
                <div class="part4">
                    <ul>
                        @foreach($latestlists as $latestlist)
                        <li><span><a href="/{{$latestlist->arctype->real_path}}/{{$latestlist->id}}.html"> > <strong>{{str_limit($latestlist->title,42,'')}}</strong></a></span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
@stop