@extends('admin.layout.layout')
@section('indexpic')
    <li class="has-sub">
        <a href="ui-panels.html">
            <i class="linecons-note"></i>
            <span class="title">轮播图管理</span>
        </a>
        <ul style="display:none;">
            <li class="">
                <a href="{{url('/admin/indexpic/index')}}">
                    <span class="title">轮播图列表</span>
                </a>
            </li>
            <li class="">
                <a href="{{url('/admin/indexpic/add')}}">
                    <span class="title">轮播图添加</span>
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
                轮播图列表
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
                            <form action="">
                                <div class="col-sm-5">
                                    
                                </div>

                                <div class="col-sm-5" style="position: relative;top:-40px;left:300px;">
                                  

                                </div>
                            </div> 
                            </form>
                            <div class="row">
                                <div class="col-sm-12">
                                <a href="javascript:;" style="width:180px;height:30px;margin-left: 100px;" class="del btn btn-red">重新添加轮播图</a> 
                                    <table class="table table-striped table-bordered table-hover dataTable no-footer"
                                    id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                        <thead>
                                            <tr role="row">
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width:60px;"aria-label="Browser: activate to sort column ascending">
                                                    图片ID
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 200px;" aria-label="Browser: activate to sort column ascending">
                                                    图片
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
                                                <td class="sorting_1">{{$v->id}}</td>
                                                <td><img src="{{$v->pic}}" alt=""></td>
                                                
                                                <td class="center">
                                                   
        
        <a href="{{url('admin/indexpic/edit')}}?id={{$v->id}}" style="width:60px;height:30px;" class="btn btn-warning">修改</a>
       


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
            
            
            // 发送ajax 进行删除操作
                $.get('/admin/indexpic/del',{id:1},function(data){
                    if (data==1) {
                        alert('删除成功');
                        //动态删除tr
                        th.next().remove();
                        location.href = 'http://mogu.cn/admin/indexpic/add';
                    }
                });
            // alert(oid);
        });
    </script>
@endsection