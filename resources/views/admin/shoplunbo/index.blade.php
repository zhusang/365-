@extends('admin.layout.layout')
@section('shoplunbo')
    <li class="has-sub">
    <a href="ui-panels.html">
        <i class="linecons-note"></i>
        <span class="title">店铺轮播图管理</span>
    </a>
    <ul style="display:none;">
        <li class="">
            <a href="{{url('/admin/shoplunbo/index')}}">
                <span class="title">店铺轮播列表</span>
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
                店铺轮播图列表
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
                                            
                                            店名查找
                                            <input class="form-control input-sm" name="like" value="{{ $list['like'] or '' }}" placeholder="例: 北京..." aria-controls="dataTables-example"
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
                                                    店铺ID
                                                </th>
                                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 200px;" aria-label="Browser: activate to sort column ascending">
                                                    店铺名称
                                                </th>

                                               

                                                 <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" style="width: 200px;" aria-label="CSS grade: activate to sort column ascending">
                                                   操作
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($shops as $k=>$v)
                                            <tr class="gradeA" role="row">
                                                <td class="sorting_1">{{$v->sid}}</td>
                                                <td>{{$v->sname}}</td>
                                                
                                                <td class="center">
                                                   
        
       <!-- 这里第一种情况   如果 已经为推荐店铺就不能在显示加入推荐店铺按钮  -->
       <!-- 第二种情况       如果 推荐店铺已经满了 就不可以显示加入推荐店铺这个按钮-->
       @if($v->tuijian==0 && $Full!=1)
        <a href="javascript:;" style="width:120px;height:30px;" class="btn btn-primary add">加入前台推荐店铺</a> 
        <span style="display: none;color: red;">已加入前台推荐店铺</span>
        @endif
       
        @if($v->tuijian!=0)
        <a href="javascript:;" style="width:120px;height:30px;" sid="{{$v->sid}}" class="btn btn-red del">取消推荐店铺</a> 
        @endif
                                                </td>
                                            </tr>
                                      @endforeach
                                        
                                       
        

                                        </tbody>
                                    </table>

                                </div>
                                
                            </div>
                             <!-- 分页部分 写入模板就可以进行分页操作-->
                            {!! $shops->appends($list)->render() !!}
                            

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
        
    //给每一个都加入推荐店铺绑定单击事件
            for (var i = 0; i < $('.add').length; i++) {
                $('.add').eq(i).click(function(){
                    var th = $(this);
                    //获取sid 查看此店铺是否已经加入店铺轮播 或者前台推荐店铺已经满
                    var sid = $(this).parents('tr').find('.sorting_1').html();
                    // 发送ajax查询是否已经加入店铺轮播
                    $.get('/admin/shoplunbo/add',{sid:sid},function(data){
                        if (data==1) {
                            //不可以加入 推荐店铺 前台推荐商家已满
                                alert('前台推荐商家已满,请删除一些后再来添加');
                        }else if(data==2){
                            //可以加入前台推荐店铺 跳转到显示店铺所有商品页面 
                              location.href="http://mg.cn/admin/shoplunbo/detail?sid="+sid+"";
                              //并且把当前提示信息显示出来
                              th.next().css('display','inline-block');
                        }else if(data==22){
                            //不可以加入当前店铺已经为前台推荐店铺
                            alert('当前店铺已经为前台推荐店铺');
                        }
                    });
                });
            }
        // {{url('admin/shoplunbo/detail')}}?sid={{$v->sid}}
    //给每一个取消推荐店铺绑定单击事件
            for (var i = 0; i < $('.del').length; i++) {
                $('.del').eq(i).click(function(){
                    //获取当前的sid
                        var sid = $(this).attr('sid');
                    //发送ajax 进行删除当前的店铺轮播
                    $.get('/admin/shoplunbo/del',{sid:sid},function(data){
                        if (data==1) {
                            alert('取消成功');
                            location.href=location.href;
                        }
                    })

                });
            }

        
    </script>
@endsection