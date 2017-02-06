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
									<label for="password-1">促销价格:</label>
									<input class="form-control" id="password-1" placeholder="" type="text" name="tprice">
								</div>
								
								<div class="form-group col-sm-12">
									<label for="password-1">商品库存:</label>
									<input class="form-control" id="password-1" placeholder="" type="text" name="cnt">
								</div>
									
								<div class="form-group col-sm-12">
									<label for="password-1">商品图片:</label>
									 <input type="file" name='pic'/> 
								</div>
									
								<div class="form-group col-sm-12 ms" style="display: none;">
									<label for="password-1">商品属性:</label>
									<!-- ============ -->
									<select  name="t" class="form-control select2-offscreen MS" id="s2example-1" tabindex="-1" title="" style="display: none;">
										<option>请选择</option>
										
										<optgroup style="font-size: 20px;color:red;" label="">
										
											
										
											<option value="{{$vvv->tid}}">  </option>
											
									
										</optgroup>
									
									</select>
									<!-- ============ -->
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
@section('js')
	<script>
		// $('.select2-offscreen').change(function(){
		// 	$('.ms').find('.ccc').remove();
		// 	//获取当前的分类tid
		// 		var tid = $(this).val();
		// 	//定义数组 辨别筛选内容是否已经存在
		// 		var brr = [];
		// 		var c=0;
		// 		var crr = [];
		// 		var n=0;
		// 	//发送ajax获取当前分类下有哪些筛选内容
		// 		$.get('/admin/goods/shaixuan',{tid:tid},function(data){
						
		// 			for (var i = 0; i < data.length; i++) {
					
		// 				//获取当前的筛选属性值
		// 				var str = data[i].value;
		// 				var name = data[i].name;
		// 				//所有的值都在brr中
		// 				 brr[i] = str; 
		// 				 // console.log(brr);
						
		// 				//显示筛选下拉框
		// 				$('.ms').css('display','block');
		// 				//复制一个下拉框
		// 				var newMS = $('.MS').eq(0).clone();
		// 				newMS.addClass('ccc');
		// 				//修改下拉框的属性
		// 				newMS.attr('name','name'+(n++));
		// 				newMS.find('optgroup').attr('label',name);
		// 				for (var j = 0; j < brr[i].length; j++) {
		// 					// console.log(brr[i][j]);
		// 					var newO = newMS.find('optgroup').find('option').eq(0).clone();
		// 					newMS.css('display','block');
		// 					newO.html(brr[i][j]);
		// 					newO.val(brr[i][j]);
		// 					newO.css('color','black');
		// 					// console.log(newO);
		// 					newMS.find('optgroup').append(newO);
		// 				}
		// 				//移除空的选项
		// 				newMS.find('optgroup').find('option').eq(0).remove();
		// 				// console.log(newMS);            
						
		// 				//插入新的下拉框
		// 				$('.ms').append(newMS);
		// 			}
		// 		},'json');


		// });

	</script>
@endsection