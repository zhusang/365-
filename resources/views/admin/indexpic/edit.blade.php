@extends('admin.layout.layout')
@section('title','轮播图添加')
@section('indexpic')
       <li class="has-sub">
        <a href="ui-panels.html">
            <i class="linecons-note"></i>
            <span class="title">轮播图管理</span>
        </a>
        <ul style="display:none;">
            <li class="">
                <a href="{{url('/admin/indexpic/index')}}">
                    <span class="title">轮播图列表</span>
                </a>
            </li>
            <li class="">
                <a href="{{url('/admin/indexpic/add')}}">
                    <span class="title">轮播图添加</span>
                </a>
            </li>
        </ul>
    </li>                   
@endsection
@section('con')        
<!-- 主内容区 -->
        <div id="page-wrapper" style="min-height: 394px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">轮播图添加</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action='/admin/indexpic/update' method='post' enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>轮播图一</label>
                                            <input type="file" name='pic'>
                                            <input type="hidden" name="id" value="{{$info->id}}">
                                            <img src="{{$info->pic}}" alt="">
                                        </div>
                                        
                                        {{csrf_field()}}    
                                        <button type="submit" class="btn btn-success">提交</button>
                                        <button type="reset" class="btn btn-warning">重置</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
<!-- 主内容区结束 -->
@endsection