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
            <div class="case-list" id="content" style="font-size:14px;">
                &nbsp;

            </div>
            <!--//case list-->
        </div>
        <div class="clearfix"></div>
        <div class="zs-cont">
            <span>康洁分类洗衣</span>
            <p>如您所见，我们追求的不仅是吸引您的眼球，而是创造服务与客户之间的共鸣</p>
            <a href="http://v.youku.com/v_show/id_XMTI2MzE1ODc3Mg==.html?beta&from=s1.8-1-1.2&spm=0.0.0.0.4GrqRz" class="video" rel="nofollow" target="_blank"><img src="/templets/kangjie/static/images/gc-img5.jpg"></a>
        </div>
    </div>



@stop