@extends('admin.layouts.admin_app')
@section('title')添加普通文档@stop
@section('head')
<link href="/adminlte/plugins/summernote/summernote.css" rel="stylesheet">
<link href="/adminlte/plugins/iCheck/all.css" rel="stylesheet">
<link rel="stylesheet" href="/adminlte//plugins/daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="/adminlte/plugins/datepicker/datepicker3.css">
<link href="/adminlte/dist/css/fileinput.min.css" rel="stylesheet">
@stop
@section('content')
        <!-- row -->
<div class="row">
    {{Form::open(array('route' => 'article_create','files' => true,))}}
    <div class="col-md-12">
        <!-- The time line -->
        <ul class="timeline">

            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-red">
                     {{date("M j, Y")}}
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->

            <li>
                <i class="fa fa-pencil-square bg-blue"></i>

                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{date('H:i')}}</span>

                    <h3 class="timeline-header"><a href="#">文章基本信息|</a> 按需填写</h3>

                    <div class="timeline-body basic_info">
                        <div class="form-group col-md-12">
                            {{Form::label('title', '文章标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="col-md-4 col-sm-9 col-xs-12">
                                {{Form::text('title', null, array('class' => 'form-control','id'=>'title','placeholder'=>'文章标题'))}}
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="col-md-2 col-sm-3 col-xs-12 control-label">自定义文档属性</label>
                            <div class="checkbox" style="margin-top: 0px;">
                                <label>
                                    {{Form::checkbox('flags[]', 'h',false,array('class'=>'flat-red'))}} 头条
                                </label>
                                <label>
                                    {{Form::checkbox('flags[]', 'p',false,array('class'=>'flat-red'))}} 图片
                                </label>
                                <label>
                                    {{Form::checkbox('flags[]', 'c',false,array('class'=>'flat-red'))}} 推荐
                                </label>
                                <label>
                                    {{Form::checkbox('flags[]', 'f',false,array('class'=>'flat-red'))}} 幻灯
                                </label>
                                <label>
                                    {{Form::checkbox('flags[]', 's',false,array('class'=>'flat-red'))}} 滚动
                                </label>
                                <label>
                                    {{Form::checkbox('flags[]', 'a',false,array('class'=>'flat-red'))}} 特荐
                                </label>
                            </div>

                        </div>
                        <div class="form-group col-md-12">
                            {{Form::label('shorttitle', '简略标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="col-md-4 col-sm-9 col-xs-12">
                                {{Form::text('shorttitle',null, array('class' => 'form-control','id'=>'shorttitle','placeholder'=>'短标题'))}}
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            {{Form::label('tags', 'tag标签', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="col-md-4 col-sm-9 col-xs-12">
                                {{Form::text('tags', null, array('class' => 'form-control','id'=>'tags','placeholder'=>'文档tag标签'))}}
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            {{Form::label('keywords', '关键字', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="col-md-4 col-sm-9 col-xs-12">
                                {{Form::text('keywords',null, array('class' => 'form-control','id'=>'keywords','placeholder'=>'文档关键词'))}}
                            </div>
                        </div>
                        <div class="form-group col-md-12 ">
                            {{Form::label('typeid', '文章所属栏目', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-md-4 col-sm-9 col-xs-12">
                                {{Form::select('typeid', $allnavinfos, null,array('class'=>'form-control select2'))}}
                            </div>
                        </div>
                        <div class="form-group col-md-12 ">
                            {{Form::label('original', '原创提交', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="radio col-md-4 col-sm-9 col-xs-12">
                                {{Form::radio('original', '1', false,array('class'=>'flat-red'))}} 是
                                {{Form::radio('original', '0', true,array('class'=>'flat-red'))}}否
                            </div>
                        </div>
                        <div class="form-group col-md-12 ">
                            {{Form::label('xiongzhang', '熊掌号推送', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="radio col-md-4 col-sm-9 col-xs-12">
                                {{Form::radio('xiongzhang', '1', false,array('class'=>'flat-red'))}} 熊掌号实时推送
                                {{Form::radio('xiongzhang', '0', true,array('class'=>'flat-red'))}}熊掌号历史推送
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            {{Form::label('description', '文档描述', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="col-md-4 col-sm-9 col-xs-12">
                                {{Form::textarea('description',null, array('class' => 'form-control col-md-10','id'=>'desrciption','rows'=>3,'placeholder'=>'不填写将自动提取首段'))}}
                            </div>
                        </div>
                        <div class="form-group col-md-12 ">
                            {{Form::label('ismake', '文章状态', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="radio col-md-4 col-sm-9 col-xs-12">
                                {{Form::radio('ismake', '1', true,array('class'=>'flat-red'))}} 已审核
                                {{Form::radio('ismake', '0', false,array('class'=>'flat-red'))}}未审核
                            </div>

                        </div>
                        <div class="form-group col-md-12 ">
                            {{Form::label('published_at', '预选发布时间', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="input-group date  col-md-4 col-sm-9 col-xs-12">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                {{Form::text('published_at', \Carbon\Carbon::now(), array('class' => 'form-control pull-right','id'=>'datepicker','placeholder'=>'点击选择时间'))}}
                            </div>
                        </div>

                    </div>
                    <div class="timeline-footer">
                        <button class="btn btn-primary btn-xs">Read more</button>
                    </div>
                </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-photo bg-aqua"></i>
                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{date('D M j')}}</span>
                    <h3 class="timeline-header no-border"><a href="#">缩略图处理</a> 图片上传</h3>
                    <div class="timeline-body">
                        {{Form::file('image',  array('class' => 'file col-md-10','id'=>'input-2','multiple data-show-upload'=>'false','data-show-caption'=>'true'))}}
                    </div>
                </div>
            </li>
            <!-- END timeline item -->

            <!-- timeline item -->
            <li>
                <i class="fa fa-file-text bg-maroon"></i>

                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

                    <h3 class="timeline-header"><a href="#">文档处理</a>文章内容编辑</h3>

                    <div class="timeline-body">
                   @include('admin.layouts.ueditor')

                        <!-- 编辑器容器 -->
                        <script id="container" name="body" type="text/plain" ></script>
                        <!--<div style="display: none"><textarea  name="body" id="lawsContent"></textarea></div>-->
                    </div>
                    <div class="timeline-footer">
                        <button type="submit"  class="btn btn-md bg-maroon">提交文档</button>
                    </div>
                </div>
            </li>

            <!-- END timeline item -->
            <li>
                <i class="fa fa-clock-o bg-gray"></i>
            </li>
        </ul>

    </div>
    <!-- /.col -->
    {!! Form::close() !!}

</div>
        <button onsubmit="return false;" onclick="getLocalData ()" class="btn btn-md bg-green">恢复内容</button>
@if(count($errors) > 0)
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
<!-- /.row -->
<script>
    function getLocalData () {
        if(!ue.hasContents())
        {
            body=ue.execCommand( "getlocaldata" );
            ue.setContent(body);
        }

    }
</script>
@stop

@section('libs')
<!-- iCheck -->
<script src="/adminlte/plugins/iCheck/icheck.min.js"></script>
<script src="/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="/adminlte/plugins/datepicker/locales/bootstrap-datepicker.zh-CN.js"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    })
</script>

<script>
    $(function () {
        $('#datepicker').datepicker({
            autoclose: true,
            language: 'zh-CN',
            todayHighlight: true
        });
        //iCheck for checkbox and radio inputs
        $('.basic_info input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('.basic_info input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('.basic_info input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });
    });
</script>
<!-- /Custom Notification -->
<script src="/js/fileinput.min.js"></script>
@stop

