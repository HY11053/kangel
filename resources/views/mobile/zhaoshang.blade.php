@extends('mobile.mobile')
@section('headlibs')
    <title>{{$thistypeinfo->title}}-康洁洗衣</title>
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}" >
    <meta name="keywords" content="{{$thistypeinfo->keywords}}" />
    <meta name="description" content="{{$thistypeinfo->description}}" />
@stop
@section('main_content')
    <p class="bg-primary"> 　<a href='/'>康洁洗衣</a> > <a href='/{{$thistypeinfo->real_path}}/'>{{$thistypeinfo->typename}}</a> ></p>
    <div class="container-fluid list_clear">
        <div clas="row">
            <div class="col-xs-12">
                <div id="content">
                    <div class="zs-box">
                        <div class="zs-auto">
                            <div class="clearfix">
                                &nbsp;</div>
                            <div class="zs-cont">
                                <h4><span>新模式介绍</span></h4>
                                <p>
                                    "你开店，我洗衣，零风险，高收益"，这是新模式的核心阐述。让加盟商赚钱才是真正的成功，正是康洁的这种始终不渝的坚持，才铸造了康洁辉煌的今天。如今的康洁，随地可见的是统一风格的标准门店，反馈给客户的则是贴心的服务，甜美的微笑和值得称赞的质量。</p>
                            </div>
                        </div>
                        <div class="clearfix">
                            &nbsp;</div>
                        <div class="tab-box">
                            <div class="tab-title">

                                <h4 class="tright"><span>康洁3M<sup>2</sup>电子柜</span></h4>
                            </div>
                            <ul class="tab-cont" style="padding: 0px">
                                <li>
                                    <div class="tab-lei">
                                        <img class="center-block img-responsive" src="/uploads/180309/1-1P309235259231.jpg" style="height: auto; border-radius: 5px;">
                                        <span class="lei-title">丰产东路店</span> <span class="lei-futi">(18年老店)</span>
                                        <p>
                                            丰产路与经一路交叉口西北角<br>
                                            年进店人数：13441人次</p>
                                    </div>
                                    <div class="tab-lei">
                                        <img src="/uploads/180309/1-1P309235313533.jpg" class="img-responsive center-block" style="height: auto; border-radius: 5px;"> <span class="lei-title">红专路店</span> <span class="lei-futi">(16年老店)</span>
                                        <p>
                                            红专路与经三路交叉口向西100米<br>
                                            年进店人数：12296人次</p>
                                    </div>
                                    <div class="tab-lei">
                                        <img src="/uploads/180309/1-1P30923532G41.jpg" class="img-responsive center-block" style="height: auto; border-radius: 5px;"> <span class="lei-title">纬二路店</span> <span class="lei-futi">(17年老店)</span>
                                        <p>
                                            纬二路与经二路交汇处西北角<br>
                                            年进店人数：13603人次</p>
                                    </div>
                                    <div class="clearfix">
                                        &nbsp;</div>
                                </li>
                                <li style="display: none;">
                                    <div class="tab-lei">
                                        <img src="/uploads/180309/1-1P309235943405.jpg" class="img-responsive center-block" style="height: auto; border-radius: 5px;"> <span class="lei-title">3M2领地的绝对优势</span>
                                        <p>
                                            1、满足店面收发衣物、售卡等所有功能</p>
                                        <p>
                                            2、7*24小时全天候提供服务</p>
                                        <p>
                                            3、铺设渠道广，解决顾客服务最后一公里</p>
                                        <p>
                                            4、支持多种便捷支付方式</p>
                                    </div>
                                    <div class="tab-lei">
                                        <img src="/uploads/180309/1-1P30923595I55.jpg" class="img-responsive center-block" style="height: auto; border-radius: 5px;"> <span class="lei-title">后顾无忧、净享收益</span>
                                        <p>
                                            品牌保证---康洁分类洗衣，新工艺不混洗</p>
                                        <p>
                                            质量保证---接近工业4.0的中央洗衣工厂</p>
                                        <p>
                                            收益保证---康洁提供统一的洗涤、物流</p>
                                        <p>
                                            后续无忧---售后及维保服务由公司负责</p>
                                    </div>
                                    <div class="tab-lei">
                                        <img src="/uploads/180310/1-1P310000012321.jpg" class="img-responsive center-block" style="height: auto; border-radius: 5px;"> <span class="lei-title">超高合作分成</span>
                                        <p>
                                            无需店铺、无需人工</p>
                                        <p>
                                            零基础、零风险</p>
                                        <p>
                                            只需投资<span>3万</span>，</p>
                                        <p>
                                            就可享受<span>40%</span>营业额分成</p>
                                    </div>
                                    <div class="clearfix">
                                        &nbsp;</div>
                                    <p class="tab-cont-bottom">
                                        康洁电子自助收发衣柜的投放将开启健康、环保、高效、智能、自助洗衣服务新模式，彻底解决离顾客最后一公里的问题，最大程度的满足快节奏生活方式的顾客需求，给顾客带来更好的洗衣体验和意想不到的方便。<span>康洁电子自助收发衣柜即将上线，敬请期待!</span></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <script src="https://hm.baidu.com/hm.js?1abc64d2dbc605e3610c467c4d265104"></script><script>
                        $(document).ready(function() {
                            jQuery.jqtab = function(tabtit,tab_conbox,shijian) {
                                $(tab_conbox).find("li").hide();
                                $(tabtit).find("p:first").addClass("tabbg").show();
                                $(tab_conbox).find("li:first").show();

                                $(tabtit).find("p").bind(shijian,function(){
                                    $(this).addClass("tabbg").siblings().removeClass("tabbg");
                                    var activeindex = $(tabtit).find("p").index(this);
                                    $(tab_conbox).children().eq(activeindex).show().siblings().hide();
                                    return false;
                                });

                            };
                            /*调用方法如下：*/
                            $.jqtab(".tab-title",".tab-cont","mousemove");

                        });
                    </script>
                    <div class="jiameng-bg">
                        <div class="jiameng-box">
                            <span class="jiameng-title">加盟无忧</span>
                            <dl class="jiameng-cont-top">
                                <dt>
                                    <img src="/uploads/180309/1-1P309235523V5.jpg" style="width: 675px; height: auto; border-radius: 5px;" class="img-responsive center-block"></dt>
                                <dd>
                                    <ul style="padding: 0px;">
                                        <li>
                                            <span>成本低：</span>
                                            <p>
                                                设备投入降低、房租和人.不再长期依赖技术工；</p>
                                        </li>
                                        <li>
                                            <span>效率高：</span>
                                            <p>
                                                自动化设备、信息化管理，生产效率大幅度提高；</p>
                                        </li>
                                        <li>
                                            <span>标准更统一：</span>
                                            <p>
                                                工厂自动化程度高，收衣店小，更易实现标准化；</p>
                                        </li>
                                        <li>
                                            <span>环保更节能：</span>
                                            <p>
                                                集中洗涤排污，降低能耗；水热能循环利用，更环保；</p>
                                        </li>
                                        <li>
                                            <span>品质更优良：</span>
                                            <p>
                                                生产集中、设备先进、管理科学，洗涤质量更有保障；</p>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                            <div class="clearfix">
                                &nbsp;</div>
                            <p class="jiameng-cont-bottom">
                                有意愿没店面，康洁助你来寻店，市场考察要详细，调研工作要缜密，不懂装修怎么办，公司为你出方案，不会营业没关系，公司免费来教你，总之一句话，从咨询到开店，康洁全程来作伴，专业人员辅助，老司机带你轻松上路！</p>
                            <div class="clearfix">
                                &nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-pills nav-stacked nav-pills-stacked-example" style="clear: both;">
            <p class="bg-primary">　<span class="glyphicon glyphicon-flag" style="font-size: 12pt;"></span>相关阅读</p>
        </ul>
        <ul class="list-group tjw_z">
            @foreach($lastenews as $lastenew)
                <li class="list-group-item"><a class="txt" href="/{{$lastenew->arctype->real_path}}/{{$lastenew->id}}.html">{{$lastenew->title}}</li>
            @endforeach
        </ul>

    </div>

@stop