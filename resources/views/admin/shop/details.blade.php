@extends('admin.layout.layout')
@section('title','商城后台')
@section('con')
	<style>
		#inp{width:450px;}
	</style>
<div class="col-md-12">
		
<div class="panel panel-default">
<div class="panel-heading">
	<h3 class="panel-title">店铺详情</h3>
	
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
   </div><div>
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
        <table cellpadding="10" cellspacing="10">
        
		<tr style="font-size:20px">
			<td>店&nbsp;&nbsp;铺&nbsp;&nbsp;ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td id="did">{{$shop->sid}}</td>
		</tr>
		
		
		<tr style="font-size:20px">
			<td>店铺名称:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td class="update" id='sname'>{{$shop->sname}}</td>
		</tr>
		
		<tr>
			<td style="font-size:20px">店铺logo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td><img src="{{$shop->slogo}}" alt=""width="100px" height='75px'></td>
		</tr>
		<tr style="font-size:20px">
			<td >店铺介绍:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td class='sint'>{{$shop->sint}}</td>
		</tr>
		<tr style="font-size:20px">
			<td >商品数量:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>{{$shop->snum}}</td>
		</tr>
		<tr style="font-size:20px">
			<td>商铺销量:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>{{$shop->snum}}</td>
		</tr>
		<tr style="font-size:20px">
			<td>收藏数量:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>{{$shop->scoll}}</td>
		</tr>
		<tr style="font-size:20px">
			<td>优惠券id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>{{$shop->cid}}</td>
		</tr>
		<tr style="font-size:20px">
			<td>价&nbsp;&nbsp;格&nbsp;&nbsp;比:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>{{$shop->snum}}</td>
		</tr>
		<tr style="font-size:20px">
			<td>质&nbsp;&nbsp;量&nbsp;&nbsp;比:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>{{$shop->snum}}</td>
		</tr>
		<tr style="font-size:20px">
			<td>&nbsp;&nbsp;&nbsp;服&nbsp;&nbsp;&nbsp;&nbsp;务:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>{{$shop->snum}}</td>
		</tr>
		<tr style="font-size:20px">
		<td>&nbsp;&nbsp;&nbsp;操&nbsp;&nbsp;&nbsp;&nbsp;作:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td><button type='button' class="btn btn-danger btn-sm delete-btn">删除</button>
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    
		    <a href="/admin/shop/edit?sid={{$shop->sid}}" class="btn  btn-sm delete-btn btn-success">修改</a></td>
		</tr>
		{{csrf_field()}}
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
	//修改商铺名
	$('.update').dblclick(function(){
		//判断是否已经双击
		if($(this).attr('isDbl') == 1){return} 
		//双击后 添加标识
		$(this).attr('isDbl',1);
		//获取现在的值 和id
		var sid = $('#did').html();
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
			var sname = $(this).val();
			//发送ajax
			$.get('/admin/shop/xiugai',{sid:sid,sname:sname},function(data){
				//判断
				if(data == 1){
					//清空
					td.empty();
					td.html(sname);
					td.removeAttr('isDbl');
					 
				}else{
					td.empty();
					td.html(yname);
					td.removeAttr('isDbl');
				}
			})
		})
	})
	//修改商铺介绍
	$('.sint').dblclick(function(){
		//判断是否已经双击
		if($(this).attr('isDbl') == 1){return} 
		//双击后 添加标识
		$(this).attr('isDbl',1);
		//获取现在的值 和id
		var sid = $('#did').html();
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
			var sint = $(this).val();
			//发送ajax
			$.get('/admin/shop/xiugai',{sid:sid,sint:sint},function(data){
				//判断
				if(data == 1){
					//清空
					td.empty();
					td.html(sint);
					td.removeAttr('isDbl');
					 
				}else{
					td.empty();
					td.html(yname);
					td.removeAttr('isDbl');
				}
			})
		})
	})

	//删除
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
                alert('删除成功');
                btn.parents('tr').remove();
            }else{
                //删除失败
                alert('删除失败');
            }
        });
    })

    //双击修改内容
	</script>
@endsection