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
                用户列表<small>__用户详情</small> 
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
                            </form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped table-bordered table-hover dataTable no-footer"
                                    id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                        <thead>
                                            <tr role="row">
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width:50px;"aria-label="Browser: activate to sort column ascending">
                                                    用户ID
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 40px;" aria-label="Browser: activate to sort column ascending">
                                                    性别
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 80px;" aria-label="Platform(s): activate to sort column ascending">
                                                    所在地
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 68px;" aria-label="Engine version: activate to sort column ascending">
                                                    生日
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 77px;" aria-label="CSS grade: activate to sort column ascending">
                                                    工作
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 150px;" aria-label="CSS grade: activate to sort column ascending">
                                                    信息
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 30px;" aria-label="CSS grade: activate to sort column ascending">
                                                    操作
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php $arr = ['w'=>'女','m'=>'男'] ?>
                                            <tr class="gradeA" role="row">
                                                <td class="sorting_1">{{$users->uid}}</td>
                                                <td>{{$arr[$users->sex]}}</td>
                                                <td>{{$users->province.','.$users->city}}</td>
                                                <td class="center"><?php echo  date("Y-m-d",$users->birth) ?></td>
                                                <td class="center">{{$users->work}}</td>
                                                <td class="center">{{$users->message}}</td>
                                                <td class="center">
                                                <a  href="/admin/users/detailedit?id={{$users->uid}}" class='btn btn-warning  btn_edit' >修改</a>
                                                </td>
                                            </tr>
                                        
                                        
                                       


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