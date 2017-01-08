@extends('admin.layout.layout')
@section('title','分类修改')
@section('con')        
<!-- 主内容区 -->
        <div id="page-wrapper" style="min-height: 394px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">分类修改</h1>
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
                                    <form role="form" action='/admin/cate/update' method='post'>
                                        
                                        <div class="form-group">
                                            <label>请选择分类</label>
                                            <select class="form-control" name="pid">
                                                <option value="0">请选择分类</option>
                                            @foreach($cates as $k=>$v)
                                                <option value="{{$v->id}}" <?php if($v->id == $edit->pid){echo 'selected';} ?>>{{$v->name}}</option>
                                            @endforeach
                                                <input type="hidden" name='id' value='{{$edit->id}}'>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>分类名称</label>
                                            <input class="form-control" name='name' value="{{$edit->name}}">
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