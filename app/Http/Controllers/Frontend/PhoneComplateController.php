<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Phonemanage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhoneComplateController extends Controller
{
    public function phoneComplate(Request $request)
    {
        $request['ip']=$request->getClientIp();
        $request['referer']=is_array($request->session()->get('referer'))?$request->session()->get('referer')[0]:$request->input('host');
        //$request->session()->forget('referer');
        //$request->session()->flush();
        //dd($request->session()->get('referer'));
        if(empty(Phonemanage::where('phoneno',$request->phoneno)->value('phoneno')))
        {
            Phonemanage::create($request->all());
            $request->session()->flush();
            //event(new PhoneEvent(Phonemanage::latest() ->first()));
            //Admin::first()->notify(new MailSendNotification(Phonemanage::latest() ->first()));
            echo "电话提交成功！";
        }else{
            echo "电话已存在 请直接点击咨询！！！";
        }
    }

        function ComplateBrands(Request $request)
        {
            //开店成本计算，列表及内容页侧边
            $phoneno=$request->input('phoneno');
            $jmfy=$request->input('jmfy');
            $dpzj=$request->input('dpzj');
            $rycb=$request->input('rycb');
            $mdjj=$request->input('mdjj');
            $mrcb=$request->input('mrcb');
            $yye=$mdjj*$mrcb;
            $cb=$dpzj+$rycb;
            $rlr=$mdjj*$mrcb*0.6;
            if(empty(Phonemanage::where('phoneno',$phoneno)->value('phoneno')))
            {
                Phonemanage::create(['phoneno'=>$phoneno,'name'=>'计算器','ip'=>$request->getClientIp(),'note'=>'成本计算器提交','host'=>$request->input('host')]);
                //event(new PhoneEvent(Phonemanage::latest() ->first()));
                //Admin::first()->notify(new MailSendNotification(Phonemanage::latest() ->first()));
            }
            echo "<div class=\"w260_result\" id=\"results\">
				<div class=\"w260_result_total\"><span class=\"w260_result_span\">您的开店预算</span><b id=\"bprice\">？</b><span>元</span></div>
				<div class=\"w260_list\">
					<ul class=\"w260_list_before\" id=\"replacecontent\">
						<li><span>加盟费：</span><em id=\"materialPay\">$jmfy</em>元</li>
						<li><span>成本费：</span><em id=\"artificialPay\">$cb</em>元</li>
						<li><span>营业额：</span><em id=\"designPay\">$yye</em>元</li>
						<li><span>日利润：</span><em id=\"qualityPay\">$rlr</em>元</li>
					</ul>
				</div>
			</div>";
        }
}
