@extends('admin.layout.layout')
@section('title','优惠券分类管理')
@section('con')
	
	<div class="panel-body">
				
		<form action="update" id="form1" method="post" class="validate" novalidate="novalidate">
			<div class="form-group">
				<label class="control-label">分类名:</label>
				
				<input type="text" name="ctname" value='{{$res->ctname}}' data-validate="required" data-message-required="This is custom message for required field."style='width:300px;height:30px' >
			</div>
			<div class="form-group">
				<label class="control-label">优惠金额:</label>
				
				<input type="text" name="money" value='{{$res->money}}' data-validate="required" data-message-required="This is custom message for required field."style='width:300px;height:30px' >
			</div>
			<input type="hidden" name='cid' value='{{$res->cid}}'>
			<div class="form-group">
				<button type="submit" class="btn btn-success">确认添加</button>
				<button type="reset" class="btn btn-white">重置</button>
			</div>
		{{csrf_field()}}
		</form>
	
	</div>

@endsection