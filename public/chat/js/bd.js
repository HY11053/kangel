// JavaScript Document
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fb482cd16d008b1815222efa12ca72dfb' type='text/javascript'%3E%3C/script%3E"));

$(this).scroll(function() { // ҳ�淢��scroll�¼�ʱ����
var bodyTop = 0;
if (typeof window.pageYOffset != 'undefined') {
bodyTop = window.pageYOffset;
}
else if (typeof document.compatMode != 'undefined' && document.compatMode != 'BackCompat')
{
bodyTop = document.documentElement.scrollTop;
}
else if (typeof document.body != 'undefined') {
bodyTop = document.body.scrollTop;
}
$(".lovexin2").css("top", 100 + bodyTop)
});			

$(document).ready(function(){
		$('.lovexin1').css('display','block');
		FollowDiv = {
		follow : function(){
		$('.lovexin1').css('position','absolute');
		$(window).scroll(function(){
		var f_top = $(window).scrollTop() + $(window).height() - $(".lovexin1").outerHeight();
		$('.lovexin1').css( 'top' , f_top );
		});
		}
		}
		/*FF��IE7����ͨ��position:fixed����λ��ֻ��ie6��Ҫ��̬���ø߶�.*/
		if($.browser.msie && $.browser.version == 6) {
		FollowDiv.follow();
		}
		shake();
		repeat = setInterval(shake,30000);//����repeat��ȫ�֣���hideLovexin1���������
		//�󶨵���¼�
		/*
		$('#qqShake').bind('click',function(){
		if($('#LRfloater0').css('display') == 'block'){
		$('#LRfloater0 img').eq(1).click();
		}
		if($('#LRfloater1').css('display') == 'block'){
		$('#LRfloater1 area').eq(1).click();
		}
		})
		*/
});
function hideLovexin1(){
$('.lovexin1').css('display','none');
window.setTimeout("show_doudong()",10000);
//clearInterval(repeat);
}
/**
* ���ڶ���
*/
function shake(){
//window.console.log('shake')
var a=['bottom','right'],b=0;
var u=setInterval(function(){
$('.lovexin1').css( a[b%2] , (b++)%4<2?0:4 );
if(b>17){
clearInterval(u);
b=0;
}
},30)
}
function show_doudong(){
$('.lovexin1').css('display','block');
}

function openWin()
{
window.open ('http://pwt.zoosnet.net/JS/LsJS.aspx?siteid=PWT86491315&float=1'); //���Ҫд��һ�� ����
}