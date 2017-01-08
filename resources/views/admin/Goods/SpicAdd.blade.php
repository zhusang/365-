@extends('Admin/layout/layout')
@section('title','商品小图添加')
@section('con')
	 
			
				
			
				<form role="form" action="{{url('admin/goods/spicadd')}}" method="post" enctype="multipart/form-data">	
						<div class="panel-body col-sm-7">
								<div class="form-group col-sm-12">
									<label for="password-1" style="font-size: 20px;"><strong>☟</strong> 点击添加小图 
									:</label>
									 <input type="file" name='spic'/> 
								</div>	
								{{csrf_field()}}
								<input type="hidden" name="gid" value="<?php echo $_GET['gid']; ?>>">
								<div class="form-group">
										<button class="btn btn-info btn-single pull-right">
										确定添加
										</button>
								</div>
								
							</form>
							
						</div>

						

@endsection