@extends('frontend.frontend')
@section('headlibs')
<title>{{$thisarticleinfos->title}}-康洁洗衣</title>
<meta name="keywords" content="{{$thisarticleinfos->keywords}}" />
<meta name="description" content="{{$thisarticleinfos->description}}" />
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
            <div class="weizhi">
                <div class="xwdt">
                    <h2>{{$thistypeinfo->typename}}</h2>
                </div>
                <div class="dqwz1">当前位置:<a href=/'>康洁洗衣</a> > <a href='/{{$thistypeinfo->real_path}}/'>{{$thistypeinfo->typename}}</a>>  </div>
            </div>
        </div>
    </div>
    <div class="main1">
        <div class="mainn">
            <div class="mleft">
                <div class="leftnr">
                    <div class="yuedu">
                        {{$thisarticleinfos->click}}人<br>
                        已阅读</div>
                    <div class="leftbt">
                        <h1>{{$thisarticleinfos->title}}</h1>
                        <div class="zuozhe">来源：康洁&nbsp;&nbsp; &nbsp;  &nbsp;  时间:{{$thisarticleinfos->created_at}} &nbsp; &nbsp; &nbsp; &nbsp;    责任编辑: 康洁洗衣店</div>
                    </div>
                </div>
                <div class="left_xx"></div>
                <div class="left_content">
                    <div>
                        {!! $thisarticleinfos->body !!}
                    </div>
                    <br>
                </div>
                <div class="left_xx"></div>
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