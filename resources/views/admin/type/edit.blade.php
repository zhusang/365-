@extends('admin.layout.layout')
@section('title','分类管理')
@section('con')
	
	<div class="panel-body">
				
					<form action="doupdate" id="form1" method="post" class="validate" novalidate="novalidate">
						
						<div class="form-group">
							<label class="control-label">类名:</label>
							
							<input type="text" name="tname" data-validate="required" data-message-required="This is custom message for required field."style='width:300px;height:30px'value='{{$type->tname}}' >
							<input type="hidden" name="tid" value='{{$type->tid}}' >
						</div>
						<div class="form-group">
							<label class="control-label">Dtype:</label>
							
							<input type="text" name="datatype" data-validate="required" data-message-required="This is custom message for required field."style='width:300px;height:30px'value='{{$type->datatype}}' >
							<input type="hidden" name="tid" value='{{$type->tid}}' >
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success">确认添加</button>
							<button type="reset" class="btn btn-white">重置</button>
						</div>
					{{csrf_field()}}
					</form>
				
				</div>

@endsection