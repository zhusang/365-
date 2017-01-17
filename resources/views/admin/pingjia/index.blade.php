@extends('admin.layout.layout')
@section('title','评价管理')
@section('cout')
    <li class="has-sub active">
        <a href="/admin/cout/index">
            <i class="linecons-note"></i>
            <span class="title">评价管理</span>
        </a>
    </li>                       
@endsection
@section('con')
	
	<div class="col-md-12">
				
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">评价列表</h3>
			
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
							<th id="idd793a5eaeccf6-col-0">商品名</th>
							<th data-priority="1" id="idd793a5eaeccf6-col-1">用户名</th>
							<th data-priority="3" id="idd793a5eaeccf6-col-2">商铺名</th>
							<th data-priority="1" id="idd793a5eaeccf6-col-3">评价内容</th>
                            <th data-priority="1" id="idd793a5eaeccf6-col-3">订单号</th>
							<th data-priority="1" id="idd793a5eaeccf6-col-3">评价时间</th>
                            <th data-priority="1" id="idd793a5eaeccf6-col-3">
                            操作</th>
						</tr>
					</thead>
					<tbody>	
          @foreach($cout as $k=>$v)
						<tr>
				<td colspan="1" data-columns="idd793a5eaeccf6-col-0" class="sorting">    {{$v->gname}}
              </td>
				<td data-priority="1" colspan="1" data-columns="idd793a5eaeccf6-col-1">
                {{$v->uname}}
              </td>
				<td data-priority="3" colspan="1" data-columns="idd793a5eaeccf6-col-2">
                {{$v->sname}}
              </td>
				<td data-priority="3" colspan="1" data-columns="idd793a5eaeccf6-col-4">
                {{$v->cout}}
              </td>
              <td data-priority="3" colspan="1" data-columns="idd793a5eaeccf6-col-4">
                {{$v->oid}}
              </td>
               <td data-priority="3" colspan="1" data-columns="idd793a5eaeccf6-col-4">
                <?php echo date('Y-m-d H:i:s',$v->ptime); ?>
              </td>
              <td data-priority="3" colspan="1" data-columns="idd793a5eaeccf6-col-4">
              <input type="hidden" id='aid' value='{{$v->aid}}'>
                <button type='button' class="btn btn-danger btn-sm delete-btn">删除</button>
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
    	
        var aid = $('#aid').val();
        alert(aid);
        var btn = $(this);

        //发送ajax
        $.get('/admin/pingjia/delete',{aid:aid},function(data){
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