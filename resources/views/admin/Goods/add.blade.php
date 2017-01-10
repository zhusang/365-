@extends('Admin/layout/layout')
@section('title','商品添加')
@section('con')
	 
			
				
			
				<form role="form" action="{{url('admin/goods/insert')}}" method="post" enctype="multipart/form-data">
													

								<div class="form-group col-sm-7">
									<label class="control-label">选择商品类别:</label>
									<select  name="tid" class="form-control select2-offscreen" id="s2example-1" tabindex="-1" title="">
										<option>请选择</option>
										@foreach($types as $k=>$v)
										<optgroup style="font-size: 20px;color:red;" label="{{$v->tname}}">
										@foreach($v->sub as $kk=>$vv)
											<optgroup style="font-size: 16px;" label="{{$vv->tname}}">
										@foreach($vv->sub as $kkk=>$vvv)	
											<option value="{{$vvv->tid}}"> {{$vvv->tname}} </option>
											</option>
											@endforeach
										@endforeach
										  @endforeach
										</optgroup>
									
									</select>
										
										
								</div>


						        <!-- ====================================== -->
						        		<div class="form-group">
						                  <div class="col-sm-7">
						             <label for="email-1">选择您的店铺:</label>
						                    <select name="sid" class="form-control">
						                    <option>请选择</option>
						                     @foreach($shops as $kk=>$vv)
						                      <option value="{{$vv->sid}}"> {{$vv->sname}}</option>
						                    @endforeach
						                    </select>
						                </div>
						                  </div>

						        <!-- ====================================== -->
						<div class="panel-body col-sm-7">

							

						
								
								<div class="form-group col-sm-12">
									<label for="email-1">商品名称:</label>
									<input class="form-control" id="email-1" placeholder="" type="text" name="gname">
								</div>
								
								<div class="form-group col-sm-12">
									<label for="password-1">商品价格:</label>
									<input class="form-control" id="password-1" placeholder="" type="text" name="price">
								</div>
								
								<div class="form-group col-sm-12">
									<label for="password-1">商品库存:</label>
									<input class="form-control" id="password-1" placeholder="" type="text" name="cnt">
								</div>
									
								<div class="form-group col-sm-12">
									<label for="password-1">商品图片:</label>
									 <input type="file" name='pic'/> 
								</div>
									
								<div class="form-group col-sm-12">
									<label for="password-1">商品描述:</label>
									<input class="form-control"  id="field-8" placeholder="" type="text" name="gdesc">
								</div>
									
								{{csrf_field()}}
								
								
								
								<div class="form-group">
									
									<button class="btn btn-info btn-single pull-right">确定添加</button>
								</div>
								
							</form>
							
						</div>

						

@endsection