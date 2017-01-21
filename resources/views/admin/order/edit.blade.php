@extends('admin.layout.layout')
@section('title','订单修改')
@section('con')        
<!-- 主内容区 -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">订单修改</h1>
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
                            <form role="form" action="{{url('/admin/order/update')}}" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                    <label>金额：</label>
                                    <input name="ormb" value="{{$info->ormb}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>收货人：</label>
                                    <input name="rec" value="{{$info->rec}}" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label>收货地址:</label>
                                    <input name="addr" value="{{$info->addr}}" type="text" class="form-control">
                                    <!-- <input name="password" value="" type="password" class="form-control"> -->
                                </div>
                                 <div class="form-group">
                                    <label>联系电话:</label>
                                    <input name="tel" value="{{$info->tel}}" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>状态:</label>
                                    <select name="status" id="">
                                        <option value="0" @if( $info->status == 0) selected @endif >待付款</option>
                                        <option value="1" @if( $info->status == 1) selected @endif >取消订单</option>
                                        <option value="2" @if( $info->status == 2) selected @endif >退款</option>
                                        <option value="3" @if( $info->status == 3) selected @endif >待收货</option>
                                        <option value="4" @if( $info->status == 4) selected @endif >待评价</option>
                                        <option value="5" @if( $info->status == 5) selected @endif >交易完成</option>
                                    </select>
                                </div>
                                
                                

                                
                                <input type="hidden" name="oid" value="{{$info->oid}}">
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