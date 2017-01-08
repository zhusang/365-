@extends('admin.layout.layout')
@section('title','分类管理')
@section('cate')
            <li class="has-sub active">
                <a href="ui-panels.html">
                    <i class="linecons-note"></i>
                    <span class="title">分类管理</span>
                </a>
                <ul style="display:block;">
                    <li class="">
                        <a href="{{url('/admin/care/add')}}">
                            <span class="title">分类添加</span>
                        </a>
                    </li>
                    <li class="active">
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
            <h1 class="page-header">
                分类列表
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
                            <form action="{{url('/admin/cate/index')}}">
                                <div class="col-sm-6">
                                    <div class="dataTables_length" id="dataTables-example_length">
                                        <label>
                                            查找
                                            <select name="num" aria-controls="dataTables-example"
                                            class="form-control input-sm">
                                                <option value="10"  @if(!empty($list['num']) && $list['num'] == 10 ){ selected } @endif>
                                                    10
                                                </option>
                                                <option value="20"  @if(!empty($list['num']) && $list['num'] == 20 ){ selected } @endif>
                                                    20
                                                </option>
                                                <option value="50"  @if(!empty($list['num']) && $list['num'] == 50 ){ selected } @endif>
                                                    50
                                                </option>
                                                <option value="100"  @if(!empty($list['num']) && $list['num'] == 100 ){ selected } @endif>
                                                    100
                                                </option>
                                            </select>
                                            数据
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div id="dataTables-example_filter" class="dataTables_filter">
                                        <label>
                                            
                                            搜索
                                            <input class="form-control input-sm" name="keywords" value="{{ $list['keywords'] or '' }}" placeholder="" aria-controls="dataTables-example"
                                            type="search">
                                            <button class='btn btn-primary'>查询</button>
                                  
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
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width:100px;"aria-label="Browser: activate to sort column ascending">
                                                    分类ID
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 150px;" aria-label="Browser: activate to sort column ascending">
                                                    分类名称
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 184px;" aria-label="Platform(s): activate to sort column ascending">
                                                    所属分类
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 150px;" aria-label="Engine version: activate to sort column ascending">
                                                    分类路径
                                                </th>
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 108px;" aria-label="CSS grade: activate to sort column ascending">
                                                    操作
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($cates as $k=>$v)
                                            <tr class="gradeA" role="row">
                                                <td class="sorting_1">{{$v->id}}</td>
                                                <td>{{$v->name}}</td>
                                                <td class="center">{{$v->pid}}</td>
                                                <td class="center">{{$v->path}}</td>
                                                <td class="center">
                                                    <button class='btn btn-danger    btn_delete'>删除</button>
                                                    <a  href="/admin/cate/edit?id={{$v->id}}" class='btn btn-warning  btn_edit' >修改</a>
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
<!-- 主内容区结束 -->
@endsection
@section('js')
    <script type="text/javascript">
    // alert($);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //绑定单击事件
    $('.btn_delete').click(function(){
        var res = $(this).parents('tr').find('.sorting_1').html();
        var btn = $(this);
        // alert(res);
         // 发送ajax
         // $.post('/admin/cate/delete',{id:res},function(data){
         $.get('/admin/cate/delete',{id:res},function(data){
        if(data == 1){
            alert('删除成功');
            btn.parents('tr').remove();
        }else{
            alert('删除失败');
        }

        });
    });

   

    </script>
@endsection