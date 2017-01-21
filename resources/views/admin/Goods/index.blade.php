@extends('Admin/layout/layout')
@section('title','商品管理')
	@section('goods')
	<li class="has-sub active">
        <a href="ui-panels.html">
            <i class="linecons-note"></i>
            <span class="title">商品管理</span>
        </a>
        <ul style="display:block;">
            <li class="">
                <a href="/admin/goods/add">
                    <span class="title">商品添加</span>
                </a>
            </li>
            <li class="active">
                <a href="{{url('/admin/goods')}}">
                    <span class="title">商品列表</span>
                </a>
            </li>
        </ul>
    </li>						
@endsection
@section('con')

<div id="page-wrapper" style="min-height: 394px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                商品列表
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    @if(session('success'))
                    <div class="alert alert-success alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        {{session('success')}}
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        {{session('error')}}
                    </div>
                @endif

<!-- 跑马灯 -->
<marquee behavior="" direction="right" width="600px" height="30px;"bgcolor="#EEEEEE" style="color:red;line-height: 30px; font-size: 18px;" >提示消息: 点击->修改 里边可以进行修改店铺的上架下架哟!</marquee>



		
  <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
   <div class="row">
    <div class="col-xs-6">

    <form action="{{url('admin/goods/index')}}" method="get">
           <div class="dataTables_length" id="example-1_length">
            <label>Show 
                  <select name="num" aria-controls="example-1" class="form-control input-sm">
                      <option value="4" 
                       @if( !empty($list['num']) && $list['num'] == 4 )
                        { selected } 
                        @endif)
                      >4</option>
                      <option value="6" 
                      @if( !empty($list['num']) && $list['num'] == 6 )
                        { selected } 
                        @endif)
                      >6</option>
                      <option value="10" 
                      @if( !empty($list['num']) && $list['num'] == 10 )
                      { selected } 
                      @endif) 
                      >10</option>
                  </select> 
            entries
            </label>
           </div>
          </div>
          <div class="col-xs-6">
           <div id="example-1_filter" class="dataTables_filter">
            <label>搜索:
                <input name='gname' class="form-control input-sm" placeholder="" aria-controls="example-1" type="text" value="@if(!empty($list['gname'])){{$list['gname']}}@endif"/>
                 <input type="submit" class='btn btn-black btn-xs' style="width:60px;height:30px;margin-top:10px;"value="确定">
            </label>

           </div>

          </div>
    </form>

   </div>

  <div class="panel panel-default">
  <div class="panel-heading">
                </div>
   <table id="example-1" class="table table-striped table-bordered "  role="grid" aria-describedby="example-1_info" style="width: 100%;" width="100%" cellspacing="0"> 
    <thead> 
     <tr role="row">
      <th class="_asc" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 50.2px;" aria-sort="ascending" aria-label="Name: activate to sort column ascending">
      id
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 130.2px;" aria-label="Position: activate to sort column ascending">
      名称
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 80.2px;" aria-label="Office: activate to sort column ascending">
      类别
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 60.2px;" aria-label="Age: activate to sort column ascending">
      价格
      </th><th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
      图片
      </th>
      <!-- <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 100.2px;" aria-label="Start date: activate to sort column ascending">
      库存
      </th> -->

     <!--  <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
      销量
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
      游览量
      </th>
      
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
     	描述
      </th>
       <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
     	状态
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
     	创建时间
      </th> -->
       <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 240px;" aria-label="Salary: activate to sort column ascending">
      操作
      </th>
     </tr> 
    </thead> 
		
    <tfoot> 
     
    </tfoot> 
    <tbody> 
    @foreach($goods as $k=>$v)
     <tr role="row" class="odd"> 
      <td class="_1"> {{$v->gid}} </td> 
      <td> {{$v->gname}} </td> 
      <td> {{$v->tname}} </td> 
      <td> {{$v->price}} </td> 
      
      <td><img src="{{url($v->gpic)}}" alt="" width="50px"></td> 
    
      
     
      <td>
        <a href="#" style="width:60px;height:30px;" class="del btn btn-red">删除</a> 
        <a href="{{url('admin/goods/edit')}}?gid={{$v->gid}}" style="width:60px;height:30px;" class="btn btn-warning">修改</a>
        <a href="{{url('admin/goods/spicshow')}}?gid={{$v->gid}}" style="width:70px;height:30px;" class="btn btn-primary">商品图片</a>
        <a href="{{url('admin/goods/detail')}}?gid={{$v->gid}}" style="width:70px;height:30px;" class="btn btn-primary">商品详情</a>
        @if( $v->quick == 2 )
        <a href="#" style="width:70px;height:30px;" class="btn btn-primary quick">加入抢购</a>
        @endif
      </td> 
     </tr>
    @endforeach


    </tbody> 
   </table>
    
  </div>

   <div class="row">
    <div class="col-xs-6">
     
     <div class="dataTables_info" id="example-1_info" role="status" aria-live="polite">

     </div>
    
    </div>
    <div class="col-xs-6">
             <!-- 分页部分 写入模板就可以进行分页操作-->
             {!! $goods->appends($list)->render() !!}
    </div>
   </div>
  </div> 


@endsection

@section('js')
  <script>
      $('.del').click(function(){
          var th = $(this);
          var gid = $(this).parents('tr').find('._1').html();
         //发送ajax
              $.get('/admin/goods/delete',{gid:gid},function(data){
                    if (data==1) {
                        //成功执行
                        alert('删除成功');
                        th.parents('tr').remove();
                    }else{
                        //失败执行
                      alert('删除失败');
                    }
              });
      });

      $('.quick').click(function(){
          var th = $(this);
          //获取当前商品id
          var gid = $(this).parents('tr').find('._1').html();
          //发送ajax
               $.get('/admin/goods/quickgoods',{gid:gid},function(data){
                    if (data==1) {
                        //成功执行
                        alert('已加入抢购商品');
                        $('.quick').remove();
                    }
                    if(data==2){
                        //失败执行
                      alert('该商品已经加入抢购');
                    }
                    if (data==3) {
                      alert('抢购商品达到最大限度');
                    }
              });
      });


  </script>
@endsection