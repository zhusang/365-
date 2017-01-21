@extends('admin.layout.layout')
@section('title','订单详情修改')
@section('con')        
<!-- 主内容区 -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">订单详情修改</h1>
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
                            <form role="form" action="{{url('/admin/order/detailupdate')}}" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                    <label>商品：</label>
                                    <input name="gid" value="{{$info->gname}}" class="form-control" disabled>
                                </div>

                                <div class="form-group">
                                    <label>购买价格：</label>
                                    <input name="buyprice" value="{{$info->buyprice}}" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label>购买数量:</label>
                                    <input name="buycnt" value="{{$info->buycnt}}" type="text" class="form-control">
                                    <!-- <input name="password" value="" type="password" class="form-control"> -->
                                </div>
                                 <div class="form-group">
                                    <label>商品数量:</label>
                                    <input name="gcnt" value="{{$info->gcnt}}" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>商品价格:</label>
                                    <input name="gprice" value="{{$info->gprice}}" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>备注:</label>
                                    <input name="msg" value="{{$info->msg}}" type="text" class="form-control">
                                </div>
                               
                                

                                
                                <input type="hidden" name="oid" value="{{$info->oid}}">
                                <input type="hidden" name="did" value="{{$info->did}}">
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