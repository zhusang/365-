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
                订单详情
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
                                    
                                </div>

                                <div class="col-sm-5" style="position: relative;top:-40px;left:300px;">
                                   
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
                                                    ID
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width:35px;"aria-label="Browser: activate to sort column ascending">
                                                    订单ID
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 70px;" aria-label="Browser: activate to sort column ascending">
                                                 商品
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 90px;" aria-label="Platform(s): activate to sort column ascending">
                                                   购买金额
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 98px;" aria-label="Engine version: activate to sort column ascending">
                                                    购买数量
                                                </th>
                                              
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 120px;" aria-label="CSS grade: activate to sort column ascending">
                                                   商品数量
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 90px;" aria-label="CSS grade: activate to sort column ascending">
                                                   商品价格
                                                </th>

                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 70px;" aria-label="CSS grade: activate to sort column ascending">
                                                   备注
                                                </th>

                                                 <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 200px;" aria-label="CSS grade: activate to sort column ascending">
                                                   操作
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($info as $k=>$v)
                                            <tr class="gradeA" role="row">

                                                <td class="sorting_1">{{$v->did}}</td>
                                                <td class="">{{$v->oid}}</td>
                                                <td>{{$v->gname}}</td>
                                                <td>{{$v->buyprice}}</td>
                                                <td class="center">{{$v->buycnt}}</td>
                                                <td style="overflow: hidden;" class="center">{{$v->gcnt}}</td>
                                                <td class="center">{{$v->gprice}}</td>
                                                <td class="center">{{$v->msg}}</td>
                                           
                                                <td class="center">
                                                   
        <a href="javascript:;" style="width:60px;height:30px;" class="del btn btn-red">删除</a> 
        <a href="{{url('admin/order/detailedit')}}?did={{$v->did}}" style="width:60px;height:30px;" class="btn btn-warning">修改</a>
      


                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                       


                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                            <!-- 分页 -->
                           

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
        $('.del').click(function(){
            var th = $(this);
            //获取订单详情id
                var did = $('.sorting_1').html();
            
            // 发送ajax 进行删除操作
                $.get('/admin/order/detaildel',{did:did},function(data){
                    if (data==1) {
                        alert('删除成功');
                        //动态删除tr
                        th.parents('tr').remove();

                    }
                });
            // alert(oid);
        });
    </script>
@endsection