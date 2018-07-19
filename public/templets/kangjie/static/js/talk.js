document.writeln("<link rel=\'stylesheet\' href=\'/templets/kangjie/static/css/ce-kf.css\'/>");
document.writeln("<div class=\'floating_ck\'>");
document.writeln("    <dl>");
document.writeln("        <dt></dt>");
document.writeln("        <dd class=\'consult onburfm\'> <span>开店设备免费送</span> </dd>");
document.writeln("");
document.writeln("        <dd class=\'quote onburfm\'> <span>咨询开店利润</span></dd>");
document.writeln("");
document.writeln("        <dd class=\'jiameng onburfm\'> <span>咨询加盟费用</span> </dd>");
document.writeln("");
document.writeln("        <dd class=\'jiesong onburfm\'> <span>咨询开店帮扶</span> </dd>");
document.writeln("");
document.writeln("        <dd class=\'tel onburfm\'> <span>投资规模分析</span> </dd>");
document.writeln("    </dl>");
document.writeln("</div>");
document.writeln("<div class=\'massage_box\' style=\'display: none;\'>");
document.writeln("    <div class=\'liuyan2\'>");
document.writeln("        <span class=\'gb\'><img alt=\'\' src=\'http://www.360ganxi.com/templets/ganxi/images/x_img.png\'></span>");
document.writeln("        <div class=\'liuyan-nr\'>");
document.writeln("            <div class=\'ly-bt\'>");
document.writeln("                <img src=\'http://www.360ganxi.com/templets/ganxi/images/ly_img.png\' style=\'vertical-align: middle;\'>&nbsp;填写您的信息");
document.writeln("            </div>");
document.writeln("            <div class=\'ly-cont\'>");
document.writeln("                <p>");
document.writeln("                    请保证填写信息准确 以便我们及时与您联系！");
document.writeln("                </p>");
document.writeln("                <form>");
document.writeln("                    <table cellpadding=\'0\' cellspacing=\'0\'>");
document.writeln("                        <tbody>");
document.writeln("                        <tr>");
document.writeln("                            <td class=\'dq\'>");
document.writeln("                                您的姓名：");
document.writeln("                            </td>");
document.writeln("                            <td>");
document.writeln("                                <input class=\'ly-txt\' name=\'c_name\' id=\'c_name\' type=\'text\' value=\'\'>");
document.writeln("                            </td>");
document.writeln("                        </tr>");
document.writeln("                        <tr>");
document.writeln("                            <td class=\'dq\'>");
document.writeln("                                联系手机：");
document.writeln("                            </td>");
document.writeln("                            <td>");
document.writeln("                                <input class=\'ly-txt\' name=\'c_tel\' id=\'c_tel\' type=\'text\' value=\'\'>");
document.writeln("                            </td>");
document.writeln("                        </tr>");
document.writeln("                        <tr>");
document.writeln("                            <td>");
document.writeln("                                备注信息:");
document.writeln("                            </td>");
document.writeln("                            <td>");
document.writeln("                                <input class=\'ly-txt\' name=\'c_note\' id=\'c_note\' type=\'text\'>");
document.writeln("                            </td>");
document.writeln("                        </tr>");
document.writeln("                        <tr>");
document.writeln("                            <td class=\'dq\'>");
document.writeln("                                &nbsp;");
document.writeln("                            </td>");
document.writeln("                            <td>");
document.writeln("                                <input class=\'tj\' id=\'tj_btn\' type=\'button\' value=\'提交\'><input class=\'cz\' id=\'regse\' type=\'reset\' value=\'重置\'>");
document.writeln("                            </td>");
document.writeln("                        </tr>");
document.writeln("                        </tbody>");
document.writeln("                    </table>");
document.writeln("                </form>");
document.writeln("            </div>");
document.writeln("        </div>");
document.writeln("    </div>");
document.writeln("</div>");
$(function(){
    $('.onburfm').click(function () {
        jQuery(".massage_box").stop(true, true).fadeIn(1000);
    })
    $('.gb img').click(
        function () {
            jQuery(".massage_box").stop(true, true).fadeOut(1000);
        }
    );

    $("#tj_btn").click(function(){
        var c_tel = $("#c_tel").val();
        var c_name=$("#c_name").val();
        var c_note=$("#c_note").val();
        var host=window.location.href;
        if(!c_name)
        {
            alert('请输入你们的姓名方便我们与您联系')
        }else{

            if( c_tel  && /^1[3|4|5|8]\d{9}$/.test(c_tel ) ){
                $.ajax({
                    //提交数据的类型 POST GET
                    type:"GET",
                    //提交的网址
                    url:"http://www.kangel.net.cn/plus/mobile.php",
                    //提交的数据
                    dataType: 'JSONP',
                    data:{"c_tel":c_tel,"host":host,"c_name":c_name,"c_note":c_note},
                    //返回数据的格式
                    jsonpCallback:"success_jsonpCallback",
                    success:function(json){
                        alert(json.statusinfo);
                        $(".massage_box").stop(true, true).fadeOut(200);
                        $("input").val('');
                    },
                    error:function(){
                        alert("请求出错！");
                    }
                });
            } else{
                alert("您输入的手机号码"+result+"不正确，请重新输入")
            }
        }
    });
});
