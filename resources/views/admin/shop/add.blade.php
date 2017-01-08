@extends('admin.layout.layout')
@section('title','分类管理')
@section('con')
	
	<div class="panel-body">
	@if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
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
		<form action="doadd" id="form1" enctype="multipart/form-data" method="post" class="validate" novalidate="novalidate">
			<div class="form-group">
				<label class="control-label">店铺名称:</label>
				<input type="text" name="sname" data-validate="required" data-message-required="This is custom message for required field."style='width:300px;height:30px' value="{{old('sname')}}">
			</div>
			<div class="form-group">
				<label class="control-label">店铺logo:</label>
				
				<input type="file" name="slogo"  style='width:300px;height:30px' >
			</div>
			<div class="form-group">
				<label class="control-label">店铺介绍:</label>
				<textarea name='sint' class="form-control" style='width:300px;height:120px' rows="3"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">确认添加</button>
				<button type="reset" class="btn btn-white">重置</button>
			</div>
		{{csrf_field()}}
		</form>
	
	</div>
@endsection