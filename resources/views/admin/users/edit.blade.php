@extends('admin.layout.layout')
@section('title','用户修改')
@section('con')        
<!-- 主内容区 -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">用户修改</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <form role="form" action="{{url('/admin/users/update')}}" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>用户名</label>
                                    <input name="username" value="{{$users->username}}" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label>密码</label>
                                    <input name="password" value="{{$users->password}}" type="password" class="form-control">
                                    <!-- <input name="password" value="" type="password" class="form-control"> -->
                                </div>
                                <div class="form-group">
                                    <label>邮箱</label>
                                    <input name="email" value="{{$users->email}}" type="text" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label>手机号</label>
                                    <input name="phone" value="{{$users->phone}}" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>头像</label>
                                    <input type="file" name="pic">
                                </div>
                                <img src="{{$users->pic}}" width="100px">
                                <input type="hidden" name="id" value="{{$users->id}}">
                                {{csrf_field()}}
                                <br>
                                <br>
                                <button class="btn btn-primary" type="submit">修改</button>
                                <button class="btn btn-danger" type="reset">重置</button>
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
</div>

<!-- 主内容区结束 -->
@endsection