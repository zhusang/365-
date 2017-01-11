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
			<h3 class="panel-title">店铺宣传图片列表</h3>
			
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
                
				<table cellspacing="0" class="table table-small-font table-bordered table-striped"  >
					<thead>
						<tr>
							<th id="idd793a5eaeccf6-col-0">图片ID</th>
							<th data-priority="1" id="idd793a5eaeccf6-col-1">店铺ID</th>
							
							<th data-priority="1" id="idd793a5eaeccf6-col-3">店铺logo</th>
							
							<th data-priority="1" id="idd793a5eaeccf6-col-3">操作</th>
						</tr>
					</thead>
					<tbody>	
          @foreach($pic as $k=>$v)
						<tr>
				<td colspan="1" data-columns="idd793a5eaeccf6-col-0" class="sorting">    {{$v->id}}
              </td>
				<td data-priority="1" colspan="1" data-columns="idd793a5eaeccf6-col-1">
                {{$v->sid}}
              </td>
				
			  <td data-priority="3" colspan="1" data-columns="idd793a5eaeccf6-col-4">
                <img src="{{$v->xpic}}" alt="" width='100px' height='75px'>
              </td>
              
              <td data-priority="3" colspan="1" data-columns="idd793a5eaeccf6-col-4">
                <a href ='/admin/shop/tudelete?id={{$v->id}}&sid={{$v->sid}}' class="btn btn-danger btn-sm delete-btn">删除</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
               
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
	
@endsection