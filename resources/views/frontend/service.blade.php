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
    <div class="service-warp padding60 service-bg">
        <div class="Container">
            <div class="Title-group">
                <h2 class="title-sub">
                    我们的服务<span>Our Service</span></h2>
                <p class="sub-tit">
                    &quot; 我们所做的一切都是为了您的体验 &quot;</p>
            </div>
            <div class="service-item">
                <div class="sitem">
                    <h4>
                        服务项目<span>Service Items</span></h4>
                    <p>
                        <span>去渍</span>/<span>干洗</span>/<span>水洗</span>/<span>熨烫</span>/<span>包装</span>/<span>专业皮具护理</span>/<span>毛皮清洗护理</span>/<span>织物修整和织补</span>/<span>专业奢侈品维护</span>/<span>地毯和座垫的清洗护理</span></p>
                </div>
                <div class="sitem">
                    <h4>
                        洗衣流程<span>Laundry Process</span></h4>
                    <p>
                        <span>收衣</span>/<span>检查</span>/<span>分类</span>/<span>消毒</span>/<span>预处理</span>/<span>洗涤</span>/<span>质检</span>/<span>互检</span>/<span>再处理</span>/<span>熨烫</span>/<span>质检</span>/<span>复检</span>/<span>消毒</span>/<span>包装</span>/<span>上架</span>/<span>发衣</span></p>
                </div>
                <div class="sitem">
                    <h4>
                        优惠活动<span>Promotions</span></h4>
                    <p>
                        &nbsp;</p>
                </div>
            </div>
        </div>
    </div>
@stop