@extends('mobile.mobile')
@section('headlibs')
    <title>{{$thistypeinfo->title}}</title>
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}" >
    <meta name="description" content="{{config('app.description')}}">
    <meta name="keywords" content="{{config('app.keywords')}}">
@stop
@section('main_content')
    <p class="bg-primary"> 　<a href='/'>康洁洗衣</a> > <a href='/{{$thistypeinfo->real_path}}/'>{{$thistypeinfo->typename}}</a> ></p>
    <div class="container-fluid list_clear">
        <div clas="row">
            <div class="col-xs-12">
                <div id="content">
                    <h1>公司风貌</h1>
                    @foreach($pagelists as $pagelist)
                    <article class="col-xs-6" style="height: 168px;">
                        <div class="citem">
                            <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html"> <img src="{{$pagelist->litpic}}" alt="{{$pagelist->title}}" class="img-responsive center-block" style="height: auto; border-radius: 5px;"> <span></span> </a>
                            <div class="citemtxt"> <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html" > </a>
                                <p><span><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.html">{{$pagelist->title}}</a></span></p>
                            </div>
                        </div>
                    </article>
                   @endforeach
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