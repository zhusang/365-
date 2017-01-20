@extends('admin.layout.layout')
@section('title','友情链接修改')
@section('link')
            <li class="has-sub active">
                <a href="#">
                    <i class="linecons-note"></i>
                    <span class="title">链接管理</span>
                </a>
                <ul style="display:block;">
                    <li class="active">
                        <a href="{{url('/admin/link/add')}}">
                            <span class="title">链接添加</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/admin/link')}}">
                            <span class="title">链接列表</span>
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
                    <h1 class="page-header">链接修改</h1>
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
                                    <form role="form" action='/admin/link/update' method='post' enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>网站名</label>
                                            <input class="form-control" name='name' value="{{$link->name}}">
                                        </div>
                                        <div class="form-group">
                                            <label>网站地址</label>
                                            <input class="form-control" type='text' name='url' value="{{$link->url}}">
                                        </div>
                                        <input type="hidden" name="id" value="{{$link->id}}">
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