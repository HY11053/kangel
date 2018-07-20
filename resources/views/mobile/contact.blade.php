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
                    <h1>联系我们</h1>
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