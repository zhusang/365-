@extends('admin.layout.layout')
@section('title','分类添加')
@section('cate')
            <li class="has-sub active">
                <a href="ui-panels.html">
                    <i class="linecons-note"></i>
                    <span class="title">分类管理</span>
                </a>
                <ul style="display:block;">
                    <li class="active">
                        <a href="{{url('/admin/care/add')}}">
                            <span class="title">分类添加</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{url('/admin/cate')}}">
                            <span class="title">分类列表</span>
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
                    <h1 class="page-header">分类添加</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                     @endif
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action='/admin/cate/insert' method='post'>
                                        
                                        <div class="form-group">
                                            <label>请选择分类</label>
                                            <select class="form-control" name="pid">
                                                <option value="0">请选择分类</option>
                                            @foreach($cates as $k=>$v)
                                                <option value="{{$v->id}}">{{$v->name}}</option>
                                            @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>分类名称</label>
                                            <input class="form-control" name='name'>
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