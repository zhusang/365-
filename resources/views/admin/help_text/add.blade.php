@extends('admin.layout.layout')
@section('title','常见问题添加')
@section('con')        
<!-- 主内容区 -->
        <div id="page-wrapper" style="min-height: 394px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">常见问题添加</h1>
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
                                    <form role="form" action='insert' method='post' enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label>问题分类</label>
                                            <select class="form-control" name="cid">
                                                <option value="0">请选择分类</option>
                                            @foreach($cates as $k=>$v)
                                                <option value="{{$v->id}}">{{$v->name}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label>问题解决方案</label>
                                            <textarea name="text" class="form-control" cols="5" placeholder="请写出此类问题解决方案。" id="field-5"></textarea>
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