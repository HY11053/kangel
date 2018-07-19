<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="applicable-device" content="mobile">
    @yield('headlibs')
    <link href="/templets/mlaundry/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/templets/mlaundry/css/bootstrap-theme.min.css">
    <link href="/templets/mlaundry/css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default" style="margin:0px; padding:0px; position:relative;" >
    <div style="line-height:0;"><img src="/templets/mlaundry/images/logo.jpg" width="100%"/></div>
    <div class="navbar-header" >
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" style="position:absolute; right:0; top:14px;" >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="/">首页</a></li>
            <li><a href="/a/zoujinkangjie/">走进康洁</a></li>
            <li><a href="/html/brand/">VI识别</a></li>
            <li><a href="/a/contact/">联系我们</a></li>
            <li><a href="/a/fuwu/">客户服务</a></li>
            <li><a href="/a/fengmao/">公司风貌</a></li>
            <li><a href="/a/zhaoshang/">招商加盟</a></li>
            <li><a href="/a/dongtai/">新闻中心</a></li>
            <li><a href="/ganxidianchengben/">干洗店成本</a></li>
            <li><a href="/ganxidianlirun/">干洗店利润</a></li>
            <li><a href="/ganxidiantouzi/">干洗店投资</a></li>

        </ul>
    </div>
</nav>
<!--幻灯-->
<p class="bg-primary">  <em class="col-xs-10"><span class="glyphicon glyphicon-phone-alt "> 康洁洗衣店加盟</span> </em><a href="javascript:void(0);" onclick="openZoosUrl();return false;" class="col-xs-1"><span class="glyphicon glyphicon-comment "></span></a></p>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <a href="javascript:void(0)" onclick="online();return false;"><img class="center-block" src="/templets/mlaundry/images/1.jpg" alt="康洁干洗店面展示"></a>
        </div>
        <div class="item">
            <a href="javascript:void(0)" onclick="online();return false;"><img class="center-block" src="/templets/mlaundry/images/2.jpg" alt="康洁干洗店面展示"></a>
        </div>
        <div class="item">
            <a href="javascript:void(0)" onclick="online();return false;"><img class="center-block" src="/templets/mlaundry/images/3.jpg" alt="康洁干洗店面展示"></a>

        </div>
</div>
@yield('main_content')
<div class="liuyan">
    <p>成功致富，从一个电话开始</p>
    <p>现在留言，免费获取详细加盟资料以及多重好礼</p>
    <form onsubmit="return false;">
        <ul class="lyBox">
            <div class="col-md-12 col-xs-12">
                <li> <span>姓名：</span>
                    <input type="text"  class="form-control" id="exampleInputAmount" placeholder="您的称呼">
                </li>
                <li> <span>电话：</span>
                    <input type="text" name="bd_bp_messPhone" class="form-control" id="exampleInputAmount2" name="visitorPhone"  placeholder="您的电话">
                </li>
                <li> <span>留言：</span>
                    <textarea class="form-control" rows="3" id="notes" name="content" placeholder="备注信息" ></textarea>
                </li>
                <li><button type="submit" id="tj_btn" class="btn btn-warning search-submit">提交</button></li>
            </div>
        </ul>
    </form>
</div>
<footer>
    <div class="bottomFooter">
        <div class="address_info relative">
            <div class="address_pic1 absolute"></div>
            <!--<div class="address_pic2 absolute"></div>-->
            <address class="col-xs-offset-5">
                <span class="glyphicon glyphicon-earphone"></span> 400-8856-638-456 <br>
                <span class="glyphicon glyphicon-ok-circle"></span> 沪ICP备14001404号-22<br>
                <span class="glyphicon glyphicon-map-marker"></span> 上海市沪路4361号（呼叫中心产业基地）
                Copyright@2007-2018 康洁洗衣集团干洗店加盟 <br>
                <span class="glyphicon glyphicon-ok-circle"></span>  上海优喜洗烫设备有限公司 <br>
            </address>

        </div>
    </div>
</footer>
<script src="/templets/mlaundry/js/jquery.min.js"></script>
<script src="/templets/mlaundry/js/bootstrap.min.js"></script>
<script>
    $(function(){
        $(".zonghe-nav li").click(function(){
            $(this).children(".zonghe-con").css("display","block");
            $(this).siblings().children(".zonghe-con").css("display","none");
            $(this).children("h3").attr("class","zonghe-nav-moren");
            $(this).siblings().children("h3").removeAttr("class","zonghe-nav-moren");
        })
    })

    $(function(){
        $("#content img").addClass("img-responsive center-block").css('height','auto').css('border-radius','5px');
    })
</script>
</body>
</html>
