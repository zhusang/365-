@extends('admin.layout.layout')
@section('link')
            <li class="has-sub active">
                <a href="#">
                    <i class="linecons-note"></i>
                    <span class="title">链接管理</span>
                </a>
                <ul style="display:block;">
                    <li class="">
                        <a href="{{url('/admin/link/add')}}">
                            <span class="title">链接添加</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{url('/admin/link')}}">
                            <span class="title">链接列表</span>
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
                链接列表
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
                                <div class="col-sm-12">
                                    <table class="table table-striped table-bordered table-hover dataTable no-footer"
                                    id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                        <thead>
                                            <tr role="row">
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width:35px;"aria-label="Browser: activate to sort column ascending">
                                                    链接ID
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 70px;" aria-label="Browser: activate to sort column ascending">
                                                    链接名称
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 50px;" aria-label="Platform(s): activate to sort column ascending">
                                                    链接地址
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 50px;" aria-label="Platform(s): activate to sort column ascending">
                                                    状态
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 120px;" aria-label="CSS grade: activate to sort column ascending">
                                                    操作
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($link as $k=>$v)
                                            <tr class="gradeA" role="row">
                                                <td class="sorting_1">{{$v->id}}</td>
                                                <td class="center">{{$v->name}}</td>
                                                <td class="center">{{$v->url}}</td>
                                                <td class="center">
                                                @if($v->status)
                                                   <a  href="#" class='btn btn-danger  status0' >关闭链接</a>
                                                @else
                                                   <a  href="#" class='btn btn-success status1' >开启链接</a>
                                                @endif
                                                </td>
                                                <td class="center">
                                                    <button class='btn btn-danger  btn_delete'>删除</button>
                                                    <a  href="/admin/link/edit?id={{$v->id}}" class='btn btn-warning  btn_edit' >修改</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

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
    <script type="text/javascript">
        //绑定单击事件
        $('.btn_delete').click(function(){
        var res = $(this).parents('tr').find('.sorting_1').html();
        var btn = $(this);
        // alert(res);
         // 发送ajax
         // $.post('/admin/cate/delete',{id:res},function(data){
         $.get('/admin/link/delete',{id:res},function(data){
        if(data == 1){
            alert('删除成功');
            btn.parents('tr').remove();
        }else{
            alert('删除失败');
        }

        });
        });


        //绑定ajax修改状态
        $('.status1').click(function(){
            var id = $(this).parents('tr').find('.sorting_1').html();
             var a = 1;
           $.get('/admin/link/status',{id:id,status:a},function(data){
                console.log(data);
                window.location.href = '/admin/link';
           })
           
        });
        $('.status0').click(function(){
            var id = $(this).parents('tr').find('.sorting_1').html();
           var a = 0;
           $.get('/admin/link/status',{id:id,status:a},function(data){
                console.log(data);
                window.location.href = '/admin/link';
           })
           
        });
    </script>
@endsection