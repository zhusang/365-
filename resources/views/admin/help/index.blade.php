@extends('admin.layout.layout')
@section('title','帮助中心管理')
@section('help')
    <li class="has-sub active">
        <a href="/admin/type/index">
            <i class="linecons-note"></i>
            <span class="title">帮助中心管理</span>
        </a>
        <ul style="display:block;">
            <li class="">
                <a href="/admin/helptype/add">
                    <span class="title">帮助分类添加</span>
                </a>
            </li>
            <li class="active">
                <a href="/admin/helptype/index">
                    <span class="title">帮助分类列表</span>
                </a>
            </li>
        </ul>
    </li>                       
@endsection
@section('con')
	
	<div class="col-md-12">
				
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">问题分类</h3>
			
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
           </div><div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
				<table cellspacing="0" class="table table-small-font table-bordered table-striped">
					<thead>
						<tr>
							<th id="idd793a5eaeccf6-col-0">ID</th>
							<th data-priority="1" id="idd793a5eaeccf6-col-1">分类名</th>
							<th data-priority="3" id="idd793a5eaeccf6-col-2">父id</th>
							<th data-priority="1" id="idd793a5eaeccf6-col-3">Path</th>
							<th data-priority="1" id="idd793a5eaeccf6-col-3">操作</th>
						</tr>
					</thead>
					<tbody>	
          @foreach($types as $k=>$v)
						<tr>
				<td colspan="1" data-columns="idd793a5eaeccf6-col-0" class="sorting">{{$v->id}}
              </td>
				<td data-priority="1" colspan="1" data-columns="idd793a5eaeccf6-col-1">
                {{$v->name}}
              </td>
				<td data-priority="3" colspan="1" data-columns="idd793a5eaeccf6-col-2">
                {{$v->zid}}
              </td>
				<td data-priority="3" colspan="1" data-columns="idd793a5eaeccf6-col-4">
                {{$v->path}}
              </td>
              <td data-priority="3" colspan="1" data-columns="idd793a5eaeccf6-col-4">
                <button type='button' class="btn btn-danger btn-sm delete-btn">删除</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/admin/helptype/zadd?id={{$v->id}}" class="btn btn-warning">添加子类</a> 
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/admin/helptype/update?id={{$v->id}}" class="btn btn-success">修改</a>
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
    	
        var id = $(this).parents('tr').find('.sorting').html();
        var btn = $(this);

        //发送ajax
        $.get('/admin/helptype/delete',{id:id},function(data){
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