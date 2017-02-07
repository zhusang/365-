@extends('admin.layout.layout')
@section('title','帮助中心管理')
@section('con')
	
	<div class="panel-body">
				<h1>子类添加</h1>
					<form action="doadd" id="form1" method="post" class="validate" novalidate="novalidate">
						<div class="form-group">
							<label class="control-label">父&nbsp;&nbsp;&nbsp;&nbsp;类:</label>
							
							<select  name='zid' style='width:300px;height:30px' >
		                        <option value="{{$types->id}}" >{{$types->name}}</option>
	                        </select>
						</div>
						<div class="form-group">
							<label class="control-label">帮助 分类名:</label>
							
							<input type="text" name="name" data-validate="required" data-message-required="This is custom message for required field."style='width:300px;height:30px' >
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success">确认添加</button>
							<button type="reset" class="btn btn-white">重置</button>
						</div>
					{{csrf_field()}}
					</form>
				
				</div>

@endsection
