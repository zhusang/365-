@extends('admin.layout.layout')
@section('title','分类管理')
@section('con')
	
	<div class="panel-body">
				
					<form action="doadd" id="form1" method="post" class="validate" novalidate="novalidate">
						<div class="form-group">
							<label class="control-label">父&nbsp;&nbsp;&nbsp;&nbsp;类:</label>
							
							<select  name='pid' style='width:300px;height:30px' >
		                        <option value="{{$types->tid}}" >{{$types->tname}}</option>
	                        </select>
						</div>
						<div class="form-group">
							<label class="control-label">分类名:</label>
							
							<input type="text" name="tname" data-validate="required" data-message-required="This is custom message for required field."style='width:300px;height:30px' >
						</div>
						<div class="form-group">
							<label class="control-label">Dtype:</label>
							
							<input type="text" name="datatype" data-validate="required" data-message-required="This is custom message for required field."style='width:300px;height:30px' >
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success">确认添加</button>
							<button type="reset" class="btn btn-white">重置</button>
						</div>
					{{csrf_field()}}
					</form>
				
				</div>

@endsection
