@extends('admin.layout.layout')
@section('buyone')
 <li class="has-sub">
    <a href="ui-panels.html">
        <i class="linecons-note"></i>
        <span class="title">一元抢购管理</span>
    </a>
    <ul style="display:none;">
        <li class="">
            <a href="{{url('/admin/buyone')}}">
                <span class="title">抢购列表</span>
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
                一元抢购管理
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
                                            
                                            商品名查找
                                            <input class="form-control input-sm" name="like" value="{{ $list['like'] or '' }}" placeholder="" aria-controls="dataTables-example"
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
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width:60px;"aria-label="Browser: activate to sort column ascending">
                                                    商品ID
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 200px;" aria-label="Browser: activate to sort column ascending">
                                                    商品名称
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 200px;" aria-label="Browser: activate to sort column ascending">
                                                    商品图片
                                                </th>

                                               

                                                 <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 200px;" aria-label="CSS grade: activate to sort column ascending">
                                                   操作
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                       @foreach($goods as $k=>$v)
                                            <tr class="gradeA" role="row">
                                                <td class="sorting_1" style=" ">{{$v->gid}}</td>

                                                <td style="color: red; ">{{$v->gname}}</td>
                                               
                                                <td style=""><img src="{{$v->gpic}}" alt="" style="width:200px;"></td>
                                                
                                                <td class="center" style="">
                                                   
        
       <!-- 这里第一种情况   如果 已经为推荐店铺就不能在显示加入推荐店铺按钮  -->
       <!-- 第二种情况       如果 推荐店铺已经满了 就不可以显示加入推荐店铺这个按钮-->
    @if($n != 7)
     @if(empty($v->biaozhi)) 
        <a href="javascript:;" style="width:120px;height:30px; "class="btn btn-primary add">加入一元抢购</a> 
     @endif 
     @endif 
       
       
       @if(!empty($v->biaozhi))
        <a href="javascript:;" style="width:120px;height:30px;" sid="" class="btn btn-red del">取消一元抢购</a> 
       @endif 
                                                </td>
                                            </tr>
                                     @endforeach
                                        
                                       
        

                                        </tbody>
                                    </table>

                                </div>
                                
                            </div>
                             <!-- 分页部分 写入模板就可以进行分页操作-->
                             {!! $goods->appends($list)->render() !!}
                            

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
        //加入一元抢购操作
        $('.add').click(function(){
            //获取当前商品gid
            var gid = $(this).parents('tr').find('.sorting_1').html();
           //发送ajax加入一元抢购商品
            $.get('/admin/buyone/add',{gid:gid},function(data){
                 if (data==1) {
                    alert('添加成功');
                    location.href=location.href;
                }else{
                    alert('添加失败');
                }
            });
        });
        

        // 取消一元抢购
        $('.del').click(function(){
            //获取当前商品gid
            var gid = $(this).parents('tr').find('.sorting_1').html();
           
           //发送ajax从一元抢购商品中去除
           $.get('/admin/buyone/del',{gid:gid},function(data){
                if (data==1) {
                    alert('删除成功');
                    location.href=location.href;
                }else{
                    alert('删除失败');
                }
           });
        });
        
    </script>
@endsection