@extends('Admin/layout/layout')
@section('title','商品修改')
@section('con')
	

				<form role="form" action="{{url('admin/goods/update')}}" method="post" enctype="multipart/form-data">
													
								<div class="form-group">
						                  <div class="col-sm-7">
						             <label for="email-1">选择商品类别:</label>
						                    <select name="tid" class="form-control">
						                      @foreach($types as $k=>$v)
						                      <?php
						                      		 $n = substr_count($v->path,',');
						                      	?>
						                      <option value=" {{$v->tid}}" 
												@if ( $v -> tid == $good -> tid )
												{ selected }
												@endif 

						                      > <?php echo str_repeat('|--', $n); ?> {{$v->tname}} </option>
						                      @endforeach
						                    </select>
						                </div>
						                  </div>
						<div class="panel-body col-sm-7">



						
								
								<div class="form-group">
									<label for="email-1">商品名称:</label>
									<input class="form-control" id="email-1" placeholder="" type="text" name="gname" value='{{$good->gname}}'>
								</div>
								
								<div class="form-group">
									<label for="password-1">商品价格:</label>
									<input class="form-control" id="password-1" placeholder="" type="text" name="price" value='{{$good->price}}'>
								</div>
								
								<div class="form-group">
									<label for="password-1">商品库存:</label>
									<input class="form-control" id="password-1" placeholder="" type="text" name="cnt"  value='{{$good->cnt}}'>
								</div>
									
								<div class="form-group">
									<label for="password-1">商品图片:</label>
									 <input type="file" name='gpic'/> 
								</div>
								<img src="{{url($good->gpic)}}" alt="" width='50px;'>
									
								<div class="form-group">
									<label for="password-1">商品描述:</label>
									<input class="form-control"  id="field-8" placeholder="" type="text" name="gdesc"  value='{{$good->gdesc}}'>
								</div>
								

										
						                <div class="form-group">
						             <label for="email-1">商品状态:</label>
						                    <select name="status" class="form-control">
						                      <option value="0" 
												@if ( 0 == $good -> status )
												{ selected }
												@endif >
												新品
											 </option>

											   <option value="1" 
												@if ( 1 == $good -> status )
												{ selected }
												@endif >
												上架
											 </option>

											  <option value="2" 
												@if ( 2 == $good -> status )
												{ selected }
												@endif >
												下架
											 </option>


						               
						                    </select>
						             
						             	</div>

									
								{{csrf_field()}}
								<input type="hidden" name='gid' value='{{$good->gid}}'>
								
								
								<div class="form-group">
									
									<button class="btn btn-info btn-single pull-right">确定修改</button>
								</div>
								
							</form>
							
						</div>
@endsection