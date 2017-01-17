@extends('admin.layout.layout')
@section('title','分类管理')
@section('coupon')
    <li class="has-sub active">
        <a href="/admin/coupontype/index">
            <i class="linecons-note"></i>
            <span class="title">优惠券分类管理</span>
        </a>
        <ul style="display:block;">
            <li class="">
                <a href="/admin/coupontype/add">
                    <span class="title">优惠券分类添加</span>
                </a>
            </li>
            <li class="active">
                <a href="/admin/coupontype/index">
                    <span class="title">优惠券分类列表</span>
                </a>
            </li>
        </ul>
    </li>                       
@endsection
@section('con')
	
	<div class="col-md-12">
				
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">优惠券分類</h3>
			
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
							<th id="idd793a5eaeccf6-col-0">CID</th>
                            <th data-priority="1" id="idd793a5eaeccf6-col-1">分类名</th>
							<th data-priority="1" id="idd793a5eaeccf6-col-1">优惠金额</th>
							
							<th data-priority="1" id="idd793a5eaeccf6-col-3">操作</th>
						</tr>
					</thead>
					<tbody>	
          @foreach($coupon as $k=>$v)
						<tr>
				<td colspan="1" id='cid' data-columns="idd793a5eaeccf6-col-0" class="sorting">{{$v->cid}}
              </td>
                <td data-priority="1" colspan="1" class="update" id='sname' data-columns="idd793a5eaeccf6-col-1">{{$v->ctname}}</td>
				<td data-priority="1" colspan="1" class="updates" id='' data-columns="idd793a5eaeccf6-col-1">{{$v->money}}
              </td>
				
              <td data-priority="3" colspan="1" data-columns="idd793a5eaeccf6-col-4">
                <button type='button' class="btn btn-danger btn-sm delete-btn">删除</button>
                <a href="/admin/coupontype/edit?cid={{$v->cid}}" class="btn btn-success btn-sm ">修改</a>
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
    	
        var cid = $(this).parents('tr').find('.sorting').html();
        var btn = $(this);

        //发送ajax
        $.get('/admin/coupontype/delete',{cid:cid},function(data){
            if(data == 1){
                //删除成功
                
                btn.parents('tr').remove();
            }else{
                //删除失败
                alert('删除失败');
            }
        });
    })

    //修改
    $('.update').dblclick(function(){
        //判断是否已经双击
        if($(this).attr('isDbl') == 1){return} 
        //双击后 添加标识
        $(this).attr('isDbl',1);
        //获取现在的值 和id
        var cid = $('#cid').html();
        var yname = $(this).html();
        var td = $(this);
        //创建input
        var inp = $('<input type="text" id="inp" value="'+yname+'" />');
        //插入
        $(this).empty();
        $(this).append(inp);
        inp.select();
        //绑定丧失焦点事件
        inp.blur(function(){
            //获取修改后的值
            var ctname = $(this).val();

            //发送ajax
            $.get('/admin/coupontype/xiugai',{cid:cid,ctname:ctname},function(data){
                //判断
                if(data == 1){
                    //清空
                    td.empty();
                    td.html(ctname);
                    td.removeAttr('isDbl');
                     
                }else{
                    td.empty();
                    td.html(yname);
                    td.removeAttr('isDbl');
                }
            })
        })
    })
	</script>
@endsection