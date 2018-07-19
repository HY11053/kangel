@extends('frontend.frontend')
@section('headlibs')
    <title>{{config('app.webname')}}</title>
    <meta name="description" content="{{config('app.description')}}" />
    <meta name="keywords" content="{{config('app.keywords')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('www.','m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('www.','m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('www.','m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)"     href="{{str_replace('www.','m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="stylesheet" type="text/css" href="/templets/kangjie/static/css/style4.css"/>
@stop
@section('main_content')
    <div class="banner-warp">
        <div id="banner">
            <div> <a href="javascript:;" target="_self" rel="nofollow"><img src="/templets/kangjie/static/images/banner1.jpg" alt="康洁分类洗衣"/></a></div>
            <div><a href="javascript:;" target="_self" rel="nofollow"><img src="/templets/kangjie/static/images/banner2.jpg" alt="康洁分类洗衣"/></a></div>
        </div>
    </div>
    <div class="cont-tab-box">
        <div class="cont-tab">
            <a href="/a/fengmao/gongchang/" class="gongc"></a>
            <a href="/a/fuwu/" class="fuwux"></a>
            <a href="/a/zhaoshang/" class="zhaosahng"></a>
            <a href="/a/fuwu/" class="xiyi"></a>
            <a href="/a/fengmao/dianmian/" class="dianmiand"></a>
            <a href="/a/fuwu/" class="youhuih"></a>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--LAY2-->
    <div class="articlenews">
    </div>

    <div class="case-warp bg-gray padding60">

        <div class="Container">

            <div class="Title-group">

                <div class="animate-btn"><a target="_blank" href="/a/fengmao/" class="all" title="查看全部">查看全部</a></div>

                <h2 class="title-index"><span class="c-red">Kangel's Style</span> • <span class="c-black">康洁风貌</span></h2>

                <p>如您所见，我们追求的不仅是吸引您的眼球，而是创造服务与客户之间的共鸣</p>

            </div>

            <!--video show-->

            <div class="Title-video">

                <a width="100%" height="100%" data-gall="gall2" data-type="iframe" class="venoboxframe" href="http://player.youku.com/player.php/sid/XMTQ1OTA5NDcyOA==/v.swf" rel="nofollow">
                    <div style="width:100%; height:100%;"></div>
                </a>

            </div>

            <div class="Title-group">

                <div class="animate-btn"><a target="_blank" href="/a/fengmao/gongchang/" class="all" title="查看全部">查看全部</a></div>

                <h2 class="title-index"><span class="c-red">Kangel's Factory</span> • <span class="c-black">工厂展示</span></h2>

                <p>我们是国内最先进的自动化无尘洗衣工厂</p>

            </div>

            <ul class="case-list">
                @foreach($gangchanglists as $gangchanglist)
                <li>
                    <div class="citem">
                        <a target="_blank" href="/{{$gangchanglist->arctype->real_path}}/{{$gangchanglist->id}}.html" title="{{$gangchanglist->title}}">
                            <img width="280" height="170" src="{{$gangchanglist->litpic}}" class="attachment-post-thumbnail wp-post-image" alt="{{$gangchanglist->title}}">
                            <span>{{$gangchanglist->title}}</span>
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>

        </div>

    </div>

    <div class="contact-warp padding60 contact-indexbg">

        <div class="Container clearfix">

            <div class="contact-txt">

                <h3>让我们从沟通开始这次愉快的合作！</h3>

                <a target="_blank" href="/a/contact/" class="contact-btn1">联系我们 ></a> </div>

            <div class="good-item">

                <div class="gbox"> <span>27</span> <em>年经验</em> </div>

            </div>

        </div>

    </div>

    <div class="comment-warp bg-gray padding60">

        <div class="Container">

            <div class="Title-group">

                <div class="animate-btn"><a target="_blank" href="/a/dongtai/jiameng/" class="all" title="查看全部">查看全部</a></div>

                <h2 class="title-index"><span class="c-red">Join Us</span> • <span class="c-black">加盟康洁</span></h2>

                <p>品牌保证、质量保障、收益保障，你开店，我洗衣！</p>

            </div>

            <!--轮播评论-->

            <div class="client-comments">

                <ul class="cc-list">

                    <li>

                        <p class="comm-img">

                            <img width="960" height="420" src="/templets/kangjie/static/images/flash1.jpg" class="attachment-post-thumbnail wp-post-image" alt="kh1"/></p>

                    </li>

                    <li>

                        <p class="comm-img">

                            <img width="960" height="420" src="/templets/kangjie/static/images/flash2.jpg" class="attachment-post-thumbnail wp-post-image" alt="yr"/>

                        </p>

                    </li>

                </ul>

                <a class="prev" href="javascript:void(0)"></a> <a class="next" href="javascript:void(0)"></a>

                <div class="num">

                    <ul>

                    </ul>

                </div>

            </div>

            <!--//轮播评论-->

        </div>

    </div>


    <div class="client-warp" style="padding-top:60px;">

        <div class="Container">

            <ul class="clients-listone clearfix">

                <li><img width="210" height="135" src="/templets/kangjie/static/images/1-150429110A3.jpg" class="attachment-post-thumbnail wp-post-image" alt="c_logo15"></li>
                <li><img width="210" height="135" src="/templets/kangjie/static/images/1-150429110A7.jpg" class="attachment-post-thumbnail wp-post-image" alt="c_logo15"></li>
                <li><img width="210" height="135" src="/templets/kangjie/static/images/kangjies.jpg" class="attachment-post-thumbnail wp-post-image" alt="c_logo15"></li>
                <li><img width="210" height="135" src="/templets/kangjie/static/images/20160729150931_7812.jpg" class="attachment-post-thumbnail wp-post-image" alt="c_logo15"></li>
                <li><img width="210" height="135" src="/templets/kangjie/static/images/U10221P1196DT20161017100222.jpg" class="attachment-post-thumbnail wp-post-image" alt="c_logo15"></li>
            </ul>

        </div>

    </div>

    <div class="case-warp bg-gray padding60">

        <div class="Container">

            <div class="Title-group">

                <div class="animate-btn"><a target="_blank" href="/a/fengmao/dianmian/" class="all" title="查看全部">查看全部</a></div>

                <h2 class="title-index"><span class="c-red">Kangel's Stores</span> • <span class="c-black">店面风采</span></h2>

                <p>洗涤的一切出发点都在于更健康、更洁净、更安全、更便捷</p>

            </div>

            <ul class="clients-listext clearfix">
                @foreach($dianmianlists as $dianmianlist)
                <li><a target="_blank" href="/{{$dianmianlist->arctype->real_path}}/{{$dianmianlist->id}}.html" title="{{$dianmianlist->title}}"><img width="140" height="90" src="{{$dianmianlist->litpic}}" class="attachment-post-thumbnail wp-post-image" alt="c_logo15"></a></li>
                @endforeach
            </ul>

        </div>

    </div>
    <div class="Title-group">
        <div class="animate-btn"><a target="_blank" href="/a/dongtai/" class="all" title="查看全部">查看全部</a></div>
        <h2 class="title-index"><span class="c-red">Kangel's News</span> • <span class="c-black">新闻中心</span></h2>
        <p>如您所见，我们追求的不仅是吸引您的眼球，而是创造服务与客户之间的共鸣</p>
    </div>
    <div class="box clearfix m25">
        <!--利润分析-->
        <div class="in_news1 in_news left">
            <h2 class="title"><strong><a href="/ganxidianchengben/" target="_blank">干洗店成本</a></strong></h2>
            <dl>
                <dt><a href="/{{$chengbenfirst->arctype->real_path}}/{{$chengbenfirst->id}}.html"><img src="{{$chengbenfirst->litpic}}" alt="{{$chengbenfirst->title}}" title="{{$chengbenfirst->title}}" width="70px" height="70px"></a></dt>
                <dd> <strong><a href="/{{$chengbenfirst->arctype->real_path}}/{{$chengbenfirst->id}}.html" title="{{$chengbenfirst->title}}" target="_blank">{{$chengbenfirst->title}}</a></strong>
                    <p>{{str_limit($chengbenfirst->description,32,'...')}}<a href="/{{$chengbenfirst->arctype->real_path}}/{{$chengbenfirst->id}}.html" title="{{$chengbenfirst->title}}" target="_blank">详情»</a></p>
                </dd>

            </dl>
            <ul>
                @foreach($chengbenlists as $chengbenlist)
                    <li><em>{{date('Y-m-d',strtotime($chengbenlist->created_at))}}</em><a href="/{{$chengbenlist->arctype->real_path}}/{{$chengbenlist->id}}.html" title="{{$chengbenlist->title}}" target="_blank">{{$chengbenlist->title}}</a></li>
                @endforeach
             </ul>
        </div>

        <!--成本费用-->
        <div class="in_news1 in_news left">
            <h2 class="title"><strong><a href="/ganxidianlirun/" target="_blank">干洗店利润</a></strong></h2>
            <dl>
                <dt><a href="/{{$lirunfirst->arctype->real_path}}/{{$lirunfirst->id}}.html"><img src="{{$lirunfirst->litpic}}" alt="{{$lirunfirst->title}}" title="{{$lirunfirst->title}}" width="70px" height="70px"></a></dt>
                <dd> <strong><a href="/{{$lirunfirst->arctype->real_path}}/{{$lirunfirst->id}}.html" title="{{$lirunfirst->title}}" target="_blank">{{$lirunfirst->title}}</a></strong>
                    <p>{{str_limit($lirunfirst->description,32,'...')}}<a href="/{{$lirunfirst->arctype->real_path}}/{{$lirunfirst->id}}.html" title="{{$lirunfirst->title}}" target="_blank">详情»</a></p>
                </dd>

            </dl>
            <ul>
                @foreach($lirunlists as $lirunlist)
                    <li><em>{{date('Y-m-d',strtotime($lirunlist->created_at))}}</em><a href="/{{$lirunlist->arctype->real_path}}/{{$lirunlist->id}}.html" title="{{$lirunlist->title}}" target="_blank">{{$lirunlist->title}}</a></li>
                @endforeach
            </ul>
        </div>

        <!--开店问答-->
        <div class="in_news1 in_news left">
            <h2 class="title"><strong><a href="/ganxidiantouzi/" target="_blank">干洗店投资</a></strong></h2>
            <dl>
                <dt><a href="/{{$touzifirst->arctype->real_path}}/{{$touzifirst->id}}.html"><img src="{{$touzifirst->litpic}}" alt="{{$touzifirst->title}}" title="{{$touzifirst->title}}" width="70px" height="70px"></a></dt>
                <dd> <strong><a href="/{{$touzifirst->arctype->real_path}}/{{$touzifirst->id}}.html" title="{{$touzifirst->title}}" target="_blank">{{$touzifirst->title}}</a></strong>
                    <p>{{str_limit($touzifirst->description,32,'...')}}<a href="/{{$touzifirst->arctype->real_path}}/{{$touzifirst->id}}.html" title="{{$touzifirst->title}}" target="_blank">详情»</a></p>
                </dd>

            </dl>
            <ul>
                @foreach($touzilists as $touzilist)
                    <li><em>{{date('Y-m-d',strtotime($touzilist->created_at))}}</em><a href="/{{$touzilist->arctype->real_path}}/{{$touzilist->id}}.html" title="{{$touzilist->title}}" target="_blank">{{$touzilist->title}}</a></li>
                @endforeach
            </ul>
        </div>
        <!--开店问答-->
        <div class="in_news1 in_news right" style="margin-right:0;">
            <h2 class="title"><strong><a href="/ganxidianjiamengzhinan/" target="_blank">干洗店加盟指南</a></strong></h2>
            <dl>
                <dt><a href="/{{$zhinanfirst->arctype->real_path}}/{{$zhinanfirst->id}}.html"><img src="{{$zhinanfirst->litpic}}" alt="{{$zhinanfirst->title}}" title="{{$zhinanfirst->title}}" width="70px" height="70px"></a></dt>
                <dd> <strong><a href="/{{$zhinanfirst->arctype->real_path}}/{{$zhinanfirst->id}}.html" title="{{$zhinanfirst->title}}" target="_blank">{{$zhinanfirst->title}}</a></strong>
                    <p>{{str_limit($zhinanfirst->description,32,'...')}}<a href="/{{$zhinanfirst->arctype->real_path}}/{{$zhinanfirst->id}}.html" title="{{$zhinanfirst->title}}" target="_blank">详情»</a></p>
                </dd>

            </dl>
            <ul>
                @foreach($zhinanlists as $zhinanlist)
                    <li><em>{{date('Y-m-d',strtotime($zhinanlist->created_at))}}</em><a href="/{{$zhinanlist->arctype->real_path}}/{{$zhinanlist->id}}.html" title="{{$zhinanlist->title}}" target="_blank">{{$zhinanlist->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="client-warp padding60">
        <div class="Container">
            <div class="Title-group">
                <h2 class="title-index"><span class="c-red">LINKS</span> • <span class="c-black">合作伙伴</span></h2>
            </div>
            <ul class="clients-list clearfix">
                @foreach($flinks as $flink)
                <li><a href="{{$flink->weburl}}" target="_blank">{{$flink->webname}}</a> </li>
                @endforeach
            </ul>
        </div>
    </div>
@stop