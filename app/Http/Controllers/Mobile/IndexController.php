<?php

namespace App\Http\Controllers\Mobile;

use App\AdminModel\Archive;
use App\AdminModel\Ask;
use App\AdminModel\Brandarticle;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    function Index()
    {
        //加盟指南
        $gangchanglists=Archive::where('typeid',4)->take(3)->orderBy('id','asc')->get();
        $chengbenlists=Archive::where('typeid',16)->take(5)->orderBy('id','asc')->get();
        $lirunlists=Archive::where('typeid',17)->take(5)->orderBy('id','asc')->get();
        $touzilists=Archive::where('typeid',18)->take(5)->orderBy('id','asc')->get();
        $lastenews=Archive::latest()->orderBy('id','desc')->take(10)->get();
        return view('mobile.index',compact('gangchanglists','chengbenlists','lirunlists','touzilists','lastenews'));

    }

}
