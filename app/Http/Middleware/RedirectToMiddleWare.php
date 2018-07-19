<?php

namespace App\Http\Middleware;

use Closure;
use Log;
use Jenssegers\Agent\Facades\Agent;

class RedirectToMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (preg_match('#(.*)/$#',$_SERVER['REQUEST_URI'],$matches))
        {

            if ((str_contains($request->url(),'www.')) && Agent::isMobile())
            {
                $redirecturl=str_replace('www.','m.',config('app.url').$_SERVER['REQUEST_URI']);
                //Log::info('移动端跳转设备信息'.Agent::device());
                //Log::info('移动端跳转浏览器信息'.Agent::browser());
                //Log::info('移动端跳转是否机器人'.Agent::isRobot());
                //Log::info('移动端跳转访问请求地址'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
                //Log::info('User-Agent'.$_SERVER['HTTP_USER_AGENT']);
                //Log::info('-----------------------------------------------------------------------');
                return redirect($redirecturl,302);
            }
            //Log::info('正常访问设备信息'.Agent::device());
            //Log::info('正常访问浏览器信息'.Agent::browser());
            //Log::info('正常访问是否机器人'.Agent::isRobot());
            //Log::info('正常访问请求地址'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
            //Log::info('正常访问User-Agent1'.$_SERVER['HTTP_USER_AGENT']);
            //Log::info('-----------------------------------------------------------------------');
            return $next($request);
        }else{
            if ((str_contains($request->url(),'phonecomplate')) || str_contains($request->url(),'captcha') || str_contains($request->url(),'.html'))
            {
                return $next($request);
            }else{
                preg_match('#(.*)[^/]$#',$_SERVER['REQUEST_URI'],$matches);
                if (str_contains($request->url(),'www.'))
                {
                    $redirecturl=config('app.url').$matches[0].'/';
                }elseif (str_contains($request->url(),'m.')){
                    $redirecturl=str_replace('www.','m.',config('app.url')).$matches[0].'/';
                }elseif (str_contains($request->url(),'mip.')){
                    $redirecturl=str_replace('www.','mip.',config('app.url')).$matches[0].'/';
                }
                //Log::info('【^/】设备信息'.Agent::device());
                //Log::info('【^/】浏览器信息'.Agent::browser());
                //Log::info('【^/】是否机器人'.Agent::isRobot());
                //Log::info('【^/】请求地址'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
                //Log::info('【^/】User-Agent1'.$_SERVER['HTTP_USER_AGENT']);
                //Log::info('-----------------------------------------------------------------------');
                return redirect($redirecturl,301);
            }

        }
        //Log::info('foot设备信息'.Agent::device());
        //Log::info('foot浏览器信息'.Agent::browser());
        //Log::info('foot是否机器人'.Agent::isRobot());
        //Log::info('foot请求地址'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
       //Log::info('foot-User-Agent1'.$_SERVER['HTTP_USER_AGENT']);
        //Log::info('-----------------------------------------------------------------------');
        return $next($request);
    }
}
