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
                            <form role="form" action="{{url('/admin/help/update')}}" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                            <label>商品分类</label>
                                            <select class="form-control" name="cid">
                                                <option value="0">请选择分类</option>
                                            @foreach($cates as $k=>$v)
                                                <option value="{{$v->id}}" <?php if($v->id == $text->cid){echo 'selected';} ?>>{{$v->name}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>问题解决方案</label>
                                            <textarea style="width: 400px;height: 200px;" name="text" class="form-control" cols="5"  id="field-5">{{$text->text}}</textarea>
                                        </div>
                                <input type="hidden" name="id" value="{{$text->id}}">
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