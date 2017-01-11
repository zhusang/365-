@extends('admin.layout.layout')
@section('user')
            <li class="has-sub active">
                <a href="#">
                    <i class="linecons-note"></i>
                    <span class="title">用户管理</span>
                </a>
                <ul style="display:block;">
                    <li class="">
                        <a href="{{url('/admin/users/add')}}">
                            <span class="title">用户添加</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{url('/admin/users')}}">
                            <span class="title">用户列表</span>
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
                用户列表
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
                            <form action="{{url('/admin/users/index')}}">
                                <div class="col-sm-6">
                                    <div class="dataTables_length" id="dataTables-example_length">
                                        <label>
                                            查找
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
                                <div class="col-sm-6">
                                    <div id="dataTables-example_filter" class="dataTables_filter">
                                        <label>
                                            
                                            搜索
                                            <input class="form-control input-sm" name="keywords" value="{{ $list['keywords'] or '' }}" placeholder="" aria-controls="dataTables-example"
                                            type="search">
                                            <button class='btn btn-primary' style="height:30px;float:right;">查询</button>
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
                                                    用户ID
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 70px;" aria-label="Browser: activate to sort column ascending">
                                                    用户名
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 50px;" aria-label="Platform(s): activate to sort column ascending">
                                                    用户头像
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 68px;" aria-label="Engine version: activate to sort column ascending">
                                                    注册时间
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 77px;" aria-label="CSS grade: activate to sort column ascending">
                                                    用户电话
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 120px;" aria-label="CSS grade: activate to sort column ascending">
                                                    操作
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($users as $k=>$v)
                                            <tr class="gradeA" role="row">
                                                <td class="sorting_1">{{$v->uid}}</td>
                                                <td>{{$v->uname}}</td>
                                                <td><img src="{{$v->pic}}" width="50px"></td>
                                                <td class="center">{{$v->regtime}}</td>
                                                <td class="center">{{$v->tel}}</td>
                                                <td class="center">
                                                    <button class='btn btn-danger    btn_delete'>删除</button>
                                                    <a  href="/admin/users/edit?id={{$v->uid}}" class='btn btn-warning  btn_edit' >修改</a>
                                                    <a  href="/admin/users/detail?id={{$v->uid}}" class='btn btn-pink  btn_edit' >用户详情</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                       


                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                            <!-- 分页 -->
                            {!! $users->appends($list)->render() !!}

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