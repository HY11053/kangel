@extends('mobile.mobile')
@section('headlibs')
<title>{{config('app.webname')}}</title>
<meta name="description" content="{{config('app.description')}}">
<meta name="keywords" content="{{config('app.description')}}">
<meta name="author" content="UCC洗衣">
<link rel="canonical" href="{{config('app.url')}}" >
<meta name="baidu-site-verification" content="hHwAKFLfhj" />
<meta name="sogou_site_verification" content="hbZyekUb3t"/>
@stop
@section('main_content')
    <p class="bg-primary">  <em class="col-xs-10"><span class="glyphicon glyphicon-comment"></span><a  href="javascript:void(0);" onclick="online();return false;">点击快速留言</a></em></p>
    <div class="container">
        <div class="row">
            <ul class="clearfix-m col-xs-12">
                <div class="index_headBtn clear">
                    <div><a href="/a/zoujinkangjie/"><img src="/templets/mlaundry/images/indexIcos/icon8.png"><span>走近康洁 </span></a></div>
                    <div><a href="/a/dongtai/"><img src="/templets/mlaundry/images/indexIcos/icon1.png"><span>新闻中心 </span></a></div>
                    <div><a href="/a/zhaoshang/"><img src="/templets/mlaundry/images/indexIcos/icon2.png"><span>招商加盟 </span></a></div>
                    <div><a href="/a/fengmao/"><img src="/templets/mlaundry/images/indexIcos/icon3.png"><span>公司风貌 </span></a></div>
                    <div><a href="/ganxidianlirun/"><img src="/templets/mlaundry/images/indexIcos/icon4.png"><span>干洗店利润</span></a></div>
                    <div><a href="/a/dongtai/pinpai/"><img src="/templets/mlaundry/images/indexIcos/icon6.png"><span> 企业品牌</span></a></div>
                    <div><a href="/ganxidiantouzi/"><img src="/templets/mlaundry/images/indexIcos/icon7.png"><span>干洗店投资</span></a></div>
                    <div><a href="/html/brand/"><img src="/templets/mlaundry/images/indexIcos/icon8.png"><span>联系我们 </span></a></div>
                </div>
            </ul>
        </div>
    </div>
    <a  href="javascript:void(0);" onclick="online();return false;" class="ad01"><img src="/templets/mlaundry/images/ad01.jpg"></a>
    <!--about-->
    <div class="about">
        <div>
            <img src="/templets/mlaundry/images/watchvideo.jpg" alt="康洁洗衣宣传视频" width="100%"></div>
    </div>
    <!--店面-->
    <div class="ys">
        <div class="title"><h3>康洁干洗店投资规模</h3></div>
        <ul>
            <li> <img src="/templets/mlaundry/images/ys01.jpg"><h5>三星干洗店</h5><p>三星店方案A型</p>  </li>
            <li> <img src="/templets/mlaundry/images/ys01.jpg"><h5>四星干洗店</h5><p>四星店方案B型</p>  </li>
            <li> <img src="/templets/mlaundry/images/ys01.jpg"><h5>旗舰店加盟</h5><p>旗舰店方案</p>  </li>
        </ul>
    </div>
    <!--店面-->
    <!--shebei show-->

    <div class="cp-show">
        <div class="cp-show-header"><span>康洁洗衣工厂</span></div>
        <ul class="cp-show-list clearfix">
            @foreach($gangchanglists as $gongchanglist)
            <li>
                <a href="/{{$gongchanglist->arctype->real_path}}/{{$gongchanglist->id}}.html"><img src="{{$gongchanglist->litpic}}"></a>
                <span class="cp-font">
            <a href="/{{$gongchanglist->arctype->real_path}}/{{$gongchanglist->id}}.html">{{$gongchanglist->title}}</a>
          </span>
            </li>
            @endforeach
        </ul>
    </div>
    <!--shebei show-->

    <div class="zonghe">
        <ul class="zonghe-nav clearfix">
            <li>
                <h3>干洗店成本</h3>
                <div class="zonghe-con">
                    @foreach($chengbenlists as $chengbenlist)
                    <div class="zonghe-con-list clearfix">
                        <a href="/{{$chengbenlist->arctype->real_path}}/{{$chengbenlist->id}}.html"><img src="{{$chengbenlist->litpic}}"></a>
                        <div class="zonghe-right">
                            <a href="/{{$chengbenlist->arctype->real_path}}/{{$chengbenlist->id}}.html">{{$chengbenlist->title}}</a>
                            <span class="zonghe-con-font">{{$chengbenlist->description}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </li>

            <li>
                <h3>干洗店利润</h3>
                <div class="zonghe-con">
                    @foreach($lirunlists as $lirunlist)
                    <div class="zonghe-con-list clearfix">
                        <a href="/{{$lirunlist->arctype->real_path}}/{{$lirunlist->id}}.html"><img src="{{$lirunlist->litpic}}"></a>
                        <div class="zonghe-right">
                            <a href="/{{$lirunlist->arctype->real_path}}/{{$lirunlist->id}}.html">{{$lirunlist->title}}</a>
                            <span class="zonghe-con-font">{{$lirunlist->description}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </li>
            <li>
                <h3 class="zonghe-nav-moren">干洗店加盟投资</h3>
                <div class="zonghe-con" style="display: block;">
                    @foreach($touzilists as $touzilist)
                        <div class="zonghe-con-list clearfix">
                            <a href="/{{$touzilist->arctype->real_path}}/{{$touzilist->id}}.html"><img src="{{$touzilist->litpic}}"></a>
                            <div class="zonghe-right">
                                <a href="/{{$touzilist->arctype->real_path}}/{{$touzilist->id}}.html">{{$touzilist->title}}</a>
                                <span class="zonghe-con-font">{{$touzilist->description}}</span>
                            </div>
                        </div>
                    @endforeach

                </div>
            </li>
        </ul>

    </div>

    <div class="koubei">
        <h3>康洁洗衣干洗店加盟热点资讯</h3>
        <div class="boxkb" id="boxkb">
            <div class="bd">
                <ul>
                    @foreach($lastenews as $lastenew)
                    <li><span class="date">{{date('Y-m-d',strtotime($lastenew->created_at))}}</span><a class="txt" href="/{{$lastenew->arctype->real_path}}/{{$lastenew->id}}.html">{{$lastenew->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!--留言-->
@stop