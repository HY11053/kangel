<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Ask;
use App\AdminModel\Brandarticle;
use App\AdminModel\flink;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    function Index()
    {
        //加盟指南
        $gangchanglists=Archive::where('typeid',4)->take(4)->orderBy('id','asc')->get();
        $dianmianlists=Archive::where('typeid',7)->take(14)->orderBy('id','asc')->get();
        $chengbenfirst=Archive::where('typeid',16)->where('flags','like','%c%')->where('flags','like','%p%')->latest()->first();
        $chengbenlists=Archive::where('typeid',16)->take(5)->orderBy('id','asc')->get();
        $lirunfirst=Archive::where('typeid',17)->where('flags','like','%c%')->where('flags','like','%p%')->latest()->first();
        $lirunlists=Archive::where('typeid',17)->take(5)->orderBy('id','asc')->get();
        $touzifirst=Archive::where('typeid',18)->where('flags','like','%c%')->where('flags','like','%p%')->latest()->first();
        $touzilists=Archive::where('typeid',18)->take(5)->orderBy('id','asc')->get();
        $zhinanfirst=Archive::where('typeid',19)->where('flags','like','%c%')->where('flags','like','%p%')->latest()->first();
        $zhinanlists=Archive::where('typeid',19)->take(5)->orderBy('id','asc')->get();
        $flinks=flink::latest()->orderBy('created_at','desc')->take(30)->get();
        return view('frontend.index',compact('flinks','gangchanglists','dianmianlists','chengbenfirst','chengbenlists','lirunfirst','lirunlists','touzifirst','touzilists','zhinanfirst','zhinanlists'));

    }

}
