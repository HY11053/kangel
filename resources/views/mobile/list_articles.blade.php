@extends('mobile.mobile')
@section('headlibs')
    <title>{{$thistypeinfo->title}}-康洁洗衣</title>
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}" >
    <meta name="keywords" content="{{$thistypeinfo->keywords}}" />
    <meta name="description" content="{{$thistypeinfo->description}}" />
@stop
@section('main_content')
    <p class="bg-primary">   <a href="/">干洗店加盟</a> ><a href="/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a></p>
    <div class="container-fluid list_clear">
        <div clas="row">
            <div class="ul_list">
                <ul class="list-group">
                    @foreach($pagelists as $pagelist)
                        <li class="list-group-item relist-group-item">
                            <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html"><img src="{{$pagelist->litpic}}" class="col-xs-4 col-md-4 img-responsive img-rounded" /></a>
                            <dl class="col-xs-8 col-md-8" style="padding-top:8px; margin-bottom: 0px; ">
                                <dt><a class="" style="color:#333;" href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html">{{$pagelist->title}}</a></dt>
                                <dd>{{str_limit($pagelist->description,84,'...')}}</dd>
                            </dl>
                        </li>
                    @endforeach
                </ul>
            </div>
            <nav>
                {!! $pagelink !!}
            </nav>
        </div>
        <ul class="nav nav-pills nav-stacked nav-pills-stacked-example" style="clear: both;">
            <p class="bg-primary">　<span class="glyphicon glyphicon-flag" style="font-size: 12pt;">　{{$thistypeinfo->typename}}</span></p>
        </ul>
        <ul class="list-group tjw_z">
            @foreach($latestlists as $latestlist)
                <li class="list-group-item"><a href="/{{$latestlist->arctype->real_path}}/{{$latestlist->id}}.html">{{$latestlist->title}}</a></li>
            @endforeach
        </ul>
    </div>
@stop