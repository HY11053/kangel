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
                <div>
                    　　主色调：</div>
                <div>
                    　　蓝：明亮、清澈</div>
                <div>
                    　　白：洁净、健康</div>
                <div>
                    　　红：热情、爱心</div>
                <div>
                    　　吉祥物：</div>
                <div>
                    　　&ldquo;康康&rdquo;，康洁企业形象的卡通代言人，以憨态可掬的小水滴造型呈现，充分体现了康洁&ldquo;洁净、健康&rdquo;的经营理念；她面带笑容，双手呈拥抱的姿态，寓意康洁人永远用最真的微笑拥抱每一位顾客，展现了康洁&ldquo;人性化、亲和性&rdquo;的服务理念；她迈步向前，诠释了康洁孜孜以求、永不止步的精神。</div>
                <div>
                    　　标志：</div>
                <div>
                    　　kangel，是康洁拼音kangjie和&ldquo;天使&rdquo;的英文angel的巧妙结合，设计采用了流畅的曲线、倾斜的字体，具有明显的识别性和现代感。</div>
                <div>
                    　　&ldquo;做消费者的&lsquo;健康天使&rsquo;&rdquo;是康洁（kangel）这个美丽名字的含义，是康洁在事业征程中永无止境的追求，更是康洁对顾客不变的承诺和关爱。</div>


            </div>
            <!--//case list-->
        </div>

        <div class="zs-cont">
            <span>康洁分类洗衣</span>
            <p>如您所见，我们追求的不仅是吸引您的眼球，而是创造服务与客户之间的共鸣</p>
            <a href="http://v.youku.com/v_show/id_XMTI2MzE1ODc3Mg==.html?beta&from=s1.8-1-1.2&spm=0.0.0.0.4GrqRz" class="video" rel="nofollow" target="_blank"><img src="/templets/kangjie/static/images/gc-img5.jpg"></a>
        </div>
    </div>
    <div class="clearfix"></div>


@stop