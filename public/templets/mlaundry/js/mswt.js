document.writeln("<script language=\'javascript\' src=\'http://swt.ucc.cn/JS/LsJS.aspx?siteid=MDV13016069&lng=cn\'></script>");
document.writeln("<div id=\'k_s_ol_inviteWin\' class=\'ks_ol_comm_div\' style=\' width: auto; z-index: 2147483647; left: 50%; margin-left: -140px;  top: 50%; margin-top: -140px; visibility: hidden; position: fixed !important;\'>");
document.writeln("	<div id=\'k_s_ol_inviteWin_fl\'>");
document.writeln("		<div style=\'width:280px; height:280px; background:url(http://m.meiguiyuan.com/templets/meiguiyuan/js/boxbj.png) top center no-repeat; background-size:260px auto;\' align=\'center\'>");
document.writeln("			<div align=\'right\'>");
document.writeln("				<div style=\'height:40px; width:40px; cursor:pointer;\' onclick=\'closeSwt()\'></div>");
document.writeln("			</div>");
document.writeln("			<div style=\'padding-top:15px; text-align:center; font-size:14px; color:#444444;\'>");
document.writeln("				<p style=\" margin: 0px;  padding: 0px;\">������ѯ��Ŀ����</p>");
document.writeln("				<p style=\" margin: 0px;  padding: 0px;\">һ��һר������</p>");
document.writeln("			</div>");
document.writeln("			<div style=\'padding-top:0px; padding-left:20px; line-height:32px; padding-right:20px; text-align:center; font-size:15px; font-weight:bold; color:#f4751e;\'>��Ŀ��ѯ �Żݻ ��������</div>");
document.writeln("			<form onsubmit=\"return false;\">");
document.writeln("				<div style=\'padding-top:10px;\' align=\'center\'>");
document.writeln("					<div align=\'center\'>");
document.writeln("						<input name=\'username\' class=\'bjname\' value=\'\' placeholder=\'��������������������ϵ\' id=\"callbF_user\" style=\'font-family: Microsoft YaHei; font-size:14px; background:#ffffff; color:#555555; text-indent:10px;width:200px; height:32px; border:1px solid #9a9a9a; line-height:32px; border-radius:4px; outline:none; margin-bottom:5px;\'>");
document.writeln("						<input name=\'iphone\' type=\'text\' id=\'callbF_text\' style=\'font-family: Microsoft YaHei; font-size:14px; background:#ffffff; color:#555555; text-indent:10px;width:200px; height:32px; border:1px solid #9a9a9a; line-height:32px; border-radius:4px; outline:none;\' value=\'\' placeholder=\'�������ֻ�����\'>");
document.writeln("						<div style=\'clear:both;\'></div>");
document.writeln("					</div>");
document.writeln("				</div>");
document.writeln("				<div style=\'padding-top:10px; font-size:12px; color:red;display:none;\' align=\'center\' id=\'xs\'>���ǽ������ص硣��ͨ��������ѣ�����Ľ�����</div>");
document.writeln("				<div style=\'padding-top:10px; padding-left:40px; padding-right:40px;\' align=\'center\'>");
document.writeln("					<button type=\'submit\' name=\'callbF_sub\' id=\"callbF_sub\" style=\'float:left; width:94px; line-height:30px; height:30px; text-align:center; font-size:14px; color:#FFFFFF; border-radius:3px; background:#00c897; border:none;\' id=\'nb_nodeboard_send\'>�ύ����</button>");
document.writeln("					<a href=\'javascript:void(0);\' onclick=\'online()\'>");
document.writeln("					<div style=\'float:right; width:94px; line-height:30px; text-align:center; font-size:14px; color:#FFFFFF; border-radius:3px;  background:#fea525;\' >������ѯ</div>");
document.writeln("					</a>");
document.writeln("					<div style=\'clear:both;\'></div>");
document.writeln("				</div>");
document.writeln("			</form>");
document.writeln("		</div>");
document.writeln("	</div>");
document.writeln("</div>");

//���� ����

function swt()

{

    var e = 'anniu';
    if(arguments.length == 1){
        e = arguments[0];
    }
    var url = 'http://swt.ucc.cn/LR/Chatpre.aspx?id=MDV13016069&lng=cn&r=ucc1';
    url = url + '&e=' + e + '&p=' + encodeURIComponent(location.href);
    window.open(url, 'news' + Math.round( Math.random() * 1000000 ));
    return false;

}
function online()
{
    var bcl="http://swt.ucc.cn/LR/Chatpre.aspx?id=MDV13016069&lng=cn&r=ucc1&e=anniu&r="+document.referrer+"&p="+window.location.href+'?tanchuang2';
    window.open(bcl);
}
//���� ��ʼ
function removeSwt(){

    $("#LRdiv0").css("display","none");
    $("#LRdiv1").css("display","none");
    $("#swtColse").css("display","none");
    $("#LRdiv0").css("display","none");
    $("#LRfloater0").css("display","none");
    $("#LRfloater0 img").css("display","none");
    $("#LRfloater1").css("z-index","-999999")

};
window.setInterval("removeSwt()", 1);
$(window).scroll(function(){
    if((document.documentElement.scrollTop||document.body.scrollTop)>50){
        $("#LRdiv0").css("display","none");
        $("#LRdiv1").css("display","none");
        $("#LRfloater1").css("z-index","-999999")

    }
});
function closeSwt()
{
    $('#k_s_ol_inviteWin').fadeOut(600).delay(15000).fadeIn(function(){openSwt();})
}

function openSwt() {
    $("#k_s_ol_inviteWin").css('visibility','visible').fadeIn(600);
}
setTimeout(openSwt,10000);

$(function(){

    $("#callbF_sub").click(function(){

        var result = $("#callbF_text").val();
        var name = $("#callbF_user").val();
        var host=window.location.href;
        if(!name)
        {
            alert('���������ǵ�������������������ϵ')
        }else{

            if( result  && /^1[3|4|5|8]\d{9}$/.test(result ) ){

                $.ajax({
                    //�ύ���ݵ����� POST GET
                    type:"GET",
                    //�ύ����ַ
                    url:"http://m.ganxijsq.com/phone/crosscomplate",
                    //�ύ������
                    dataType: 'JSONP',
                    data:{"phoneno":result,"host":host,"name":name},
                    //�������ݵĸ�ʽ
                    jsonpCallback:"success_jsonpCallback",
                    success:function(json){
                        alert(json.statusinfo);
                        $("#callbF_sub").attr("disabled","disabled");
                    },
                    error:function(){
                        alert("�������");
                    }

                });

            } else{
                alert("��������ֻ�����"+result+"����ȷ������������")
            }

        }

    })

});


//

$(function(){

    $("#tj_btn").click(function(){

        var result = $("#exampleInputAmount2").val();
        var name=$("#exampleInputAmount").val();
        var note=$("#notes").val();
        var host=window.location.href;
        if(!name)
        {
            alert('���������ǵ�������������������ϵ')
        }else{

            if( result  && /^1[3|4|5|8]\d{9}$/.test(result ) ){


                $.ajax({
                    //�ύ���ݵ����� POST GET
                    type:"GET",
                    //�ύ����ַ
                    url:"http://m.ganxijsq.com/phone/crosscomplate",
                    //�ύ������
                    dataType: 'JSONP',
                    data:{"phoneno":result,"host":host,"name":name,"note":note},
                    //�������ݵĸ�ʽ
                    jsonpCallback:"success_jsonpCallback",
                    success:function(json){
                        alert(json.statusinfo);
                        $("#tj_btn").attr("disabled","disabled");
                    },
                    error:function(){
                        alert("�������");
                    }

                });


            } else{
                alert("��������ֻ�����"+result+"����ȷ������������")
            }

        }
    })

});

$(function(){
    $(".content img").addClass("img-responsive center-block").css('height','auto').css('border-radius','5px');
    $("#content img").addClass("img-responsive center-block").css('height','auto').css('border-radius','5px');
})