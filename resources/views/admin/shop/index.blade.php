@extends('admin.layout.layout')
@section('title','分类管理')
@section('shop')
	<li class="has-sub">
        <a href="ui-panels.html">
            <i class="linecons-note"></i>
            <span class="title">商铺管理</span>
        </a>
        <ul style="display:block;">
            <li class="active">
                <a href="{{url('/admin/shop/add')}}">
                    <span class="title">商铺添加</span>
                </a>
            </li>
            <li class="active">
                <a href="{{url('/admin/shop/index')}}">
                    <span class="title">商铺列表</span>
                </a>
            </li>
        </ul>
    </li>						
@endsection
@section('con')
	
	<div class="col-md-12">
				
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">店铺列表</h3>
			
			<div class="panel-options">
				<a href="#" data-toggle="reload">
					<i class="fa-rotate-right"></i>
				</a>
				<a href="#" data-toggle="remove">
					×
				</a>
			</div>
		</div>
		<div class="panel-body">
			<div class="table-wrapper">
        <div class="btn-toolbar">
           </div><div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true"  data-add-focus-btn="true" style="overflow-x:visible">
			 
                <br>
                <form action="{{url('admin/shop/index')}}" method='get' >
                	
                        <div id="dataTables-example_filter" class="">
                        <label style='font-size:18px'>查询:&nbsp;&nbsp;&nbsp;
                        <input type="text" name='keywords' height='35px'>&nbsp;&nbsp;&nbsp;
                         <button class="btn btn-warning" style="margin:0px 0px">确认查询</button>
                        </label></div>
                </form>
                <br>
				<table cellspacing="0" class="table table-small-font table-bordered table-striped"  >
					<thead>
						<tr>
							<th id="idd793a5eaeccf6-col-0">店铺ID</th>
							<th data-priority="1" id="idd793a5eaeccf6-col-1">店铺名</th>
							
							<th data-priority="1" id="idd793a5eaeccf6-col-3">店铺logo</th>
							<th data-priority="1" id="idd793a5eaeccf6-col-3">店铺介绍</th>
							<th data-priority="1" id="idd793a5eaeccf6-col-3">商品数量</th>
              <th data-priority="1" id="idd793a5eaeccf6-col-3">操作</th>
							<th data-priority="1" id="idd793a5eaeccf6-col-3">店铺商品</th>
							<th data-priority="1" id="idd793a5eaeccf6-col-3">店铺详情</th>
              <th data-priority="1" id="idd793a5eaeccf6-col-3">图片操作</th>
						</tr>
					</thead>
					<tbody>	
          @foreach($shops as $k=>$v)
						<tr>
				<td colspan="1" data-columns="idd793a5eaeccf6-col-0" class="sorting">    {{$v->sid}}
              </td>
				<td data-priority="1" colspan="1" data-columns="idd793a5eaeccf6-col-1">
                {{$v->sname}}
              </td>
				
			  <td data-priority="3" colspan="1" data-columns="idd793a5eaeccf6-col-4">
                <img src="{{$v->slogo}}" alt="" width='100px' height='75px'>
              </td>
              <td data-priority="3" colspan="1" data-columns="idd793a5eaeccf6-col-4">
                {{$v->sint}}
              </td>
              <td data-priority="3" colspan="1" data-columns="idd793a5eaeccf6-col-4">
                {{$v->snum}}
              </td>
              <td data-priority="3" colspan="1" data-columns="idd793a5eaeccf6-col-4">
                <button type='button' class="btn btn-danger btn-sm delete-btn">删除</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                <a href="/admin/shop/edit?sid={{$v->sid}}" class="btn btn-success">修改</a>
              </td>
              <td  >
               <a href="/admin/shop/goods?sid={{$v->sid}}" class="btn btn-warning">所有商品</a>
              </td>
               <td  >
               <a href="/admin/shop/details?sid={{$v->sid}}" class="btn btn-primary">店铺详情</a>
              </td>
              <td  >
               <a href="/admin/shop/addtu?sid={{$v->sid}}" class="btn btn-success">添加图片</a>
               <a href="/admin/shop/show?sid={{$v->sid}}" class="btn btn-warning">查看图片</a>
              </td>
						</tr>
            @endforeach
					</tbody>
				</table>
			
			</div></div>
			
			<script type="text/javascript">
			// This JavaScript Will Replace Checkboxes in dropdown toggles
			jQuery(document).ready(function($)
			{
				setTimeout(function()
				{
					$(".checkbox-row input").addClass('cbr');
					cbr_replace();
				}, 0);
			});
			</script>
				
			
		</div>
	
	{!! $shops->appends($list)->render() !!}
	</div>
</div>

@endsection
@section('js')
	<script type="text/javascript">
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //绑定单击事件
    $('.delete-btn').click(function(){
    	
        var sid = $(this).parents('tr').find('.sorting').html();
        var btn = $(this);

        //发送ajax
        $.get('/admin/shop/delete',{sid:sid},function(data){
            if(data == 1){
                //删除成功
                btn.parents('tr').remove();
            }else{
                //删除失败
                alert('删除失败');
            }
        });
    })
	</script>
@endsection