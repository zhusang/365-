@extends('Admin/layout/layout')
@section('title','商品添加')
@section('con')
	 
			
				
			
				<form role="form" action="{{url('admin/goods/insert')}}" method="post" enctype="multipart/form-data">
													
								<div class="form-group">
						                  <div class="col-sm-7">
						             <label for="email-1">选择商品类别:</label>
						                    <select name="tid" class="form-control">
						                      @foreach($types as $k=>$v)
						                      <?php
						                      		 $n = substr_count($v->path,',');
						                      	?>
						                      <option value=" {{$v->tid}} "> <?php echo str_repeat('|--', $n); ?> {{$v->tname}} </option>
						                      @endforeach
						                    </select>
						                </div>
						                  </div>
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