@extends('Admin/layout/layout')
@section('title','优惠券添加')
@section('con')
						<!---本页面未完成,优惠券不得添加--> 
<form role="form" action="doadd" method="get" enctype="multipart/form-data">
	<div class="form-group col-sm-4">
		<label class="control-label">选择优惠券类别:</label>
		<select  name="tid" class="form-control select2-offscreen" id="s2example-1" tabindex="-1" title="">
			<option>请选择</option>
			@foreach($types as $k=>$v)
				<option value="{{$v->cid}}">{{$v->ctname}}</option>
			@endforeach
		</select>
	</div>
    <!-- ====================================== -->
	<br>
	<div class="form-group col-sm-4">
		<label for="email-1">开始时间:</label>
		<input class="form-control" id="email-1" placeholder="" type="date" name="activatetime">
	</div>
	<div class="form-group col-sm-4">
		<label for="password-1">结束时间:</label>
		<input class="form-control" id="password-1" placeholder="" type="date" name="endtime">
	</div>
	<div class="form-group col-sm-4">
		<label for="password-1">商品库存:</label>
		<input class="form-control" id="password-1" placeholder="" type="text" name="cnt">
	</div>
	<div class="form-group col-sm-4">
		<label for="password-1">商品图片:</label>
		<input type="file" name='pic'/> 
	</div>
	<div class="form-group col-sm-4">
		<label for="password-1">商品描述:</label>
		<input class="form-control"  id="field-8" placeholder="" type="text" name="gdesc">
	</div>
	{{csrf_field()}}
	<div class="form-group">
		<button class="btn btn-info btn-single pull-right" style='float:left'>确定添加</button>
	</div>
</form>
@endsection