@extends('admin.layout.layout')
@section('title','用户添加')
@section('user')
            <li class="has-sub active">
                <a href="#">
                    <i class="linecons-note"></i>
                    <span class="title">用户管理</span>
                </a>
                <ul style="display:block;">
                    <li class="active">
                        <a href="{{url('/admin/users/add')}}">
                            <span class="title">用户添加</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{url('/admin/users')}}">
                            <span class="title">用户列表</span>
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
                    <h1 class="page-header">用户添加</h1>
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
                                    <form role="form" action='/admin/users/insert' method='post' enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>用户名</label>
                                            <input class="form-control" name='uname'>
                                        </div>
                                        <div class="form-group">
                                            <label>密码</label>
                                            <input class="form-control" type='password' name='upwd'>
                                        </div>
                                        <div class="form-group">
                                            <label>手机号</label>
                                            <input class="form-control" name='tel'>
                                        </div>
                                        <div class="form-group">
                                            <label>上传头像</label>
                                            <input type="file" name='pic'>
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