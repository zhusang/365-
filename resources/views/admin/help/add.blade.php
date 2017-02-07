@extends('admin.layout.layout')
@section('title','帮助中心管理')
@section('help')
    <li class="has-sub active">
        <a href="/admin/type/index">
            <i class="linecons-note"></i>
            <span class="title">帮助中心管理</span>
        </a>
        <ul style="display:block;">
            <li class="active">
                <a href="/admin/helptype/add">
                    <span class="title">帮助分类添加</span>
                </a>
            </li>
            <li class="">
                <a href="/admin/helptype/index">
                    <span class="title">帮助分类列表</span>
                </a>
            </li>
        </ul>
    </li>                       
@endsection
@section('con')
	
	<div class="panel-body">
				
					<form action="doadd" id="form1" method="post" class="validate" novalidate="novalidate">
						<div class="form-group">
							<label class="control-label">父&nbsp;&nbsp;&nbsp;&nbsp;类:</label>
							
							<select  name='zid' style='width:300px;height:30px'>
	                            <option value="0">顶级分类</option>
	                            
	                            	
		                            @foreach($types as $k=>$v)
		                            	
		                                <option value="{{$v->id}}">{{$v->name}}</option>
		                            @endforeach
								
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