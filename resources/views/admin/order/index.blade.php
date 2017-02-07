@extends('admin.layout.layout')
@section('order')
            <li class="has-sub">
            <a href="ui-panels.html">
                <i class="linecons-note"></i>
                <span class="title">订单管理</span>
            </a>
            <ul style="display:none;">
                <li class="">
                    <a href="{{url('/admin/order/index')}}">
                        <span class="title">订单列表</span>
                    </a>
                </li>
               
            </ul>
        </li>
@endsection
@section('con')
<!-- 用户列表 -->
      <!-- 主内容区 -->
    <div id="page-wrapper" style="min-height: 394px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                订单列表
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                            <form action="{{url('/admin/order/index')}}">
                                <div class="col-sm-5">
                                    <div class="dataTables_length" id="dataTables-example_length">
                                        <label>
                                            分页
                                            <select name="num" aria-controls="dataTables-example"
                                            class="form-control input-sm">
                                                <option value="5"  @if(!empty($list['num']) && $list['num'] == 5 ){ selected } @endif>
                                                    5
                                                </option>
                                                <option value="10"  @if(!empty($list['num']) && $list['num'] == 10 ){ selected } @endif>
                                                    10
                                                </option>
                                                <option value="15"  @if(!empty($list['num']) && $list['num'] == 15 ){ selected } @endif>
                                                    15
                                                </option>
                                                <option value="20"  @if(!empty($list['num']) && $list['num'] == 20 ){ selected } @endif>
                                                    20
                                                </option>
                                            </select>
                                            数据
                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm-5" style="position: relative;top:-40px;left:300px;">
                                    <div id="dataTables-example_filter" class="dataTables_filter">
                                        <label>
                                            
                                            地区查找
                                            <input class="form-control input-sm" name="addr" value="{{ $list['addr'] or '' }}" placeholder="例: 北京..." aria-controls="dataTables-example"
                                            type="search">
                                            <button class='btn btn-primary' style="height:30px;float:right;">确定查询</button>
                                        </label>

                                    </div>

                                </div>
                            </div> 
                            </form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped table-bordered table-hover dataTable no-footer"
                                    id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                        <thead>
                                            <tr role="row">
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width:35px;"aria-label="Browser: activate to sort column ascending">
                                                    订单ID
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 70px;" aria-label="Browser: activate to sort column ascending">
                                                    总金额
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 50px;" aria-label="Platform(s): activate to sort column ascending">
                                                    用户
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 68px;" aria-label="Engine version: activate to sort column ascending">
                                                    收货人
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 77px;" aria-label="CSS grade: activate to sort column ascending">
                                                    地址
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 120px;" aria-label="CSS grade: activate to sort column ascending">
                                                   电话
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 50px;" aria-label="CSS grade: activate to sort column ascending">
                                                   状态
                                                </th>

                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 70px;" aria-label="CSS grade: activate to sort column ascending">
                                                   Time
                                                </th>

                                                 <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 260px;" aria-label="CSS grade: activate to sort column ascending">
                                                   操作
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($orders as $k=>$v)
                                            <tr class="gradeA" role="row">
                                                <td class="sorting_1">{{$v->oid}}</td>
                                                <td>{{$v->ormb}}</td>
                                                <td>{{$v->uname}}</td>
                                                <td class="center">{{$v->rec}}</td>
                                                <td style="overflow: hidden;" class="center">{{$v->addr}}</td>
                                                <td class="center">{{$v->tel}}</td>
                                                <?php $arr=['待付款','取消订单','退款','待收货','待评价','待评价','交易完成'];?>
                                                <td class="center"><?php echo $arr[$v->status];?></td>
                                                <td class="center">{{$v->otime}}</td>
                                                <td class="center">
                                                   
        <a href="javascript:;" style="width:60px;height:30px;" class="del btn btn-red">删除</a> 
        <a href="{{url('admin/order/edit')}}?oid={{$v->oid}}" style="width:60px;height:30px;" class="btn btn-warning">修改</a>
        <a href="{{url('admin/order/detail')}}?oid={{$v->oid}}" style="width:70px;height:30px;" class="btn btn-primary">订单详情</a>


                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                       


                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                            <!-- 分页 -->
                            {!! $orders->appends($list)->render() !!}

                            <div class="row">
                               <!--  <div class="col-sm-6">
                                    <div class="dataTables_info" id="dataTables-example_info" role="status"
                                    aria-live="polite">
                                        Showing 1 to 10 of 57 entries
                                    </div>
                                </div> -->
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script>
        //发送ajax进行删除操作
        
        //绑定单击事件 获取oid
        for (var i = 0; i < $('.del').length; i++) {
           $('.del').eq(i).click(function(){
            var th = $(this);
            //获取订单id
                var oid = th.parents('tr').find('.sorting_1').html();
            // 发送ajax 进行删除操作
                $.get('/admin/order/del',{oid:oid},function(data){
                    if (data==1) {
                        alert('删除成功');
                        //动态删除tr
                        th.parents('tr').remove();

                    }
                });
            // alert(oid);
        });
        }


        // =================
       
    </script>
@endsection