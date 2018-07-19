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
                    <h1>VI识别</h1>

                    <div>
                        　　主色调：</div>
                    <div>
                        　　蓝：明亮、清澈</div>
                    <div>
                        　　白：洁净、健康</div>
                    <div>
                        　　红：热情、爱心</div>
                    <div>
                        　　吉祥物：</div>
                    <div>
                        　　&ldquo;康康&rdquo;，康洁企业形象的卡通代言人，以憨态可掬的小水滴造型呈现，充分体现了康洁&ldquo;洁净、健康&rdquo;的经营理念；她面带笑容，双手呈拥抱的姿态，寓意康洁人永远用最真的微笑拥抱每一位顾客，展现了康洁&ldquo;人性化、亲和性&rdquo;的服务理念；她迈步向前，诠释了康洁孜孜以求、永不止步的精神。</div>
                    <div>
                        　　标志：</div>
                    <div>
                        　　kangel，是康洁拼音kangjie和&ldquo;天使&rdquo;的英文angel的巧妙结合，设计采用了流畅的曲线、倾斜的字体，具有明显的识别性和现代感。</div>
                    <div>
                        　　&ldquo;做消费者的&lsquo;健康天使&rsquo;&rdquo;是康洁（kangel）这个美丽名字的含义，是康洁在事业征程中永无止境的追求，更是康洁对顾客不变的承诺和关爱。</div>

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