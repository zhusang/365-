@extends('Admin/layout/layout')
@section('title','商铺横幅添加')
@section('con')
	 
			
				
			<div class="panel-body col-sm-7">
				<form role="form" action="{{url('admin/shop/spicadd')}}" method="post" enctype="multipart/form-data">	
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
								<div class="form-group col-sm-12">
									<label for="password-1" style="font-size: 20px;"><strong>☟</strong> 点击添加横幅 
									:</label>
									 <input type="file" name='spic'/> 
								</div>	
								{{csrf_field()}}
								<input type="hidden" name="sid" value="{{$sid['sid']}}">
								
								<div class="form-group">
										<button class="btn btn-info btn-single pull-right">
										确定添加
										</button>
								</div>
					</form>
					<hr style='margin:40px 0px'>
								<form role="form" action="{{url('admin/shop/xpicadd')}}" method="post" enctype="multipart/form-data">	
								<div class="form-group col-sm-12">
									<label for="password-1" style="font-size: 20px;"><strong>☟</strong> 添加店铺宣传图 
									:</label>
									 <input type="file" name='xpic'/> 
								</div>	
								{{csrf_field()}}
								<input type="hidden" name="sid" value="{{$sid['sid']}}">
								
								<div class="form-group">
										<button class="btn btn-info btn-single pull-right">
										确定添加
										</button>
								</div>
							
								</form>
						</div>

						

@endsection