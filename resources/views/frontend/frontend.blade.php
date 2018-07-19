<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('headlibs')
    <script type="text/javascript" src="/templets/kangjie/static/js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="/templets/kangjie/static/js/jquery-migrate-1.2.1.min.js"></script>
    <link rel="stylesheet" href="/templets/kangjie/static/css/venobox.css" type="text/css" media="screen"/>
    <script type="text/javascript" src="/templets/kangjie/static/js/venobox.min.js"></script>
    <script type="text/javascript" src="/templets/kangjie/static/js/jquery.superslide.2.1.1.js"></script>
</head>
<body>
<div class="header-warp">
    <div class="header">
        <div class="Container clearfix">
            <h1><a href="/" title="康洁分类洗衣" class="logo">康洁分类洗衣</a></h1>
            <ul class="contact-group">
                <li class="animate-btn onburfm"><a href="javascript:;" target="_self" class="qq" rel="nofollow"></a></li>
                <li class="animate-btn onburfm"><a href="javascript:;" target="_self" class="mail" title="给我们发邮件" rel="nofollow">MAIL</a></li>
            </ul>
            <div class="navlist">
                <ul class="nav-menu">
                    <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home"><a href="http://www.kangel.net.cn/">康洁洗衣</a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href='/a/zoujinkangjie/'>走进康洁</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href='/html/brand/'>VI识别</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href='/a/contact/'>联系我们</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href='/a/fuwu/'>客户服务</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href='/a/fengmao/'>公司风貌</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@yield('main_content')
<script src="/templets/kangjie/static/js/jquery.kinmaxshow-1.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/templets/kangjie/static/js/jquery.superslide.2.1.1.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function(){
        $("#banner").kinMaxShow({
            height:600,
            button:{
                showIndex:false,
                normal:{background:'url(/skin/images/button.png) no-repeat -14px 0',marginRight:'8px',border:'0',right:'47.2%',bottom:'20px'},
                focus:{background:'url(/skin/images/button.png) no-repeat 0 0',border:'0'}
            },
            callback:function(index,action){
                switch(index){
                    case 0 :
                        if(action=='fadeIn'){
                            $(this).find('.sub_1_1').animate({top:'85px'},600)
                            $(this).find('.sub_1_2').animate({bottom:'190px'},600)
                        }else{
                            $(this).find('.sub_1_1').animate({top:'-224px'},600)
                            $(this).find('.sub_1_2').animate({bottom:'-300px'},600)
                        };
                        break;
                    case 1 :
                        if(action=='fadeIn'){
                            $(this).find('.sub_2_1').animate({left:'50%'},600)
                            $(this).find('.sub_2_2').animate({bottom:'260px'},600)
                        }else{
                            $(this).find('.sub_2_1').animate({left:'-50%'},600)
                            $(this).find('.sub_2_2').animate({bottom:'-100px'},600)
                        };
                        break;
                    case 2 :
                        if(action=='fadeIn'){
                            $(this).find('.sub_3_1').animate({left:'50%'},600)
                            $(this).find('.sub_3_2').animate({right:'50%'},600)
                        }else{
                            $(this).find('.sub_3_1').animate({left:'-50%'},600)
                            $(this).find('.sub_3_2').animate({right:'-50%'},600)
                        };
                        break;
                    case 3 :
                        if(action=='fadeIn'){
                            $(this).find('.sub_2_1').animate({left:'50%'},600)
                            $(this).find('.sub_2_2').animate({bottom:'40px'},600)
                        }else{
                            $(this).find('.sub_2_1').animate({left:'-50%'},600)
                            $(this).find('.sub_2_2').animate({bottom:'-100px'},600)
                        };
                        break;
                    case 4 :
                        if(action=='fadeIn'){
                            $(this).find('.sub_3_1').animate({left:'50%'},600)
                            $(this).find('.sub_3_2').animate({right:'50%'},600)
                        }else{
                            $(this).find('.sub_3_1').animate({left:'-50%'},600)
                            $(this).find('.sub_3_2').animate({right:'-50%'},600)
                        };
                        break;
                }
            }
        });
    });
</script>

<script>
    $(".client-comments").hover(function(){
        $(this).find(".prev,.next").fadeTo("show",0.1);
    },function(){
        $(this).find(".prev,.next").hide();
    })

    $(".prev,.next").hover(function(){
        $(this).fadeTo("show",0.87);
    },function(){
        $(this).fadeTo("show",0.1);
    })
    $(".client-comments").slide({ titCell:".num ul" , mainCell:".cc-list" , effect:"left", autoPlay:true, delayTime:700 , autoPage:"<li><a></a></li>" });
</script>
<div class="clearfix"></div>
<div class="footer-warp">
    <div class="footfixed">
        <div class="Container clearfix">
            <div class="c-txt"> <span>郑州市康洁洗涤有限公司 版权所有</span>
                <p>京ICP备11025879号</p>
            </div>
        </div>
    </div>
</div>
<script src="/templets/kangjie/static/js/talk.js"></script>
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?f5c24536b7c0cb0442b9b4b64376c7bb";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
    $("body").attr({"oncontextmenu":"self.event.returnValue=false","onselectstart":"return false"});
</script>