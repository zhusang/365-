@extends('Admin/layout/layout')
@section('title','商品管理')
	@section('goods')
	<li class="has-sub active">
        <a href="ui-panels.html">
            <i class="linecons-note"></i>
            <span class="title">商品管理</span>
        </a>
        <ul style="display:block;">
            <li class="">
                <a href="/admin/goods/add">
                    <span class="title">商品添加</span>
                </a>
            </li>
            <li class="active">
                <a href="{{url('/admin/goods')}}">
                    <span class="title">商品列表</span>
                </a>
            </li>
        </ul>
    </li>						
@endsection
@section('con')

		
  <div id="example-1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
   <div class="row">
    <div class="col-xs-6">

    

   </div>


   <table id="example-1" class="table table-striped table-bordered " role="grid" aria-describedby="example-1_info" style="width: 100%;" width="100%" cellspacing="0"> 
    <thead> 
     <tr role="row">
      <th class="_asc" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 50.2px;" aria-sort="ascending" aria-label="Name: activate to sort column ascending">
      gid
      </th>

      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 130.2px;" aria-label="Position: activate to sort column ascending">
      店铺
      </th>

      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 130.2px;" aria-label="Position: activate to sort column ascending">
      销量
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 80.2px;" aria-label="Office: activate to sort column ascending">
      游览量
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 60.2px;" aria-label="Age: activate to sort column ascending">
      描述
      </th><th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
      状态
      </th>
      <!-- <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 100.2px;" aria-label="Start date: activate to sort column ascending">
      库存
      </th> -->

     <!--  <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
      销量
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
      游览量
      </th>
      
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
     	描述
      </th>
       <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
     	状态
      </th>-->
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
     	创建时间
      </th> 
       
     </tr> 
    </thead> 
		
    <tfoot> 
     
    </tfoot> 
    <tbody> 
   
     <tr role="row" class="odd"> 
      <td class="_1"> {{$info->gid}} </td> 
      <td class="_1">{{$good->sname}}</td> 
      <td> {{$info->scnt}} </td> 
      <td> {{$info->vcnt}} </td> 
      <td> {{$info->gdesc}} </td> 
      
      <td>{{$info->status}}</td> 
    
      
     
      <td>
   
       <?php echo date('Y-m-d H:i:s',$info->ctime); ?>
      </td> 
     </tr>
   


    </tbody> 
   </table>


   <div class="row">
    <div class="col-xs-6">
     
     <div class="dataTables_info" id="example-1_info" role="status" aria-live="polite">

     </div>
    
    </div>
    <div class="col-xs-6">     <!-- 分页部分 写入模板就可以进行分页操作-->
          
   </div>
  </div> 


@endsection

@section('js')
  <script>
      $('.del').click(function(){
          var th = $(this);
          var gid = $(this).parents('tr').find('._1').html();
         //发送ajax
              $.get('/admin/goods/delete',{gid:gid},function(data){
                    if (data==1) {
                        //成功执行
                        alert('删除成功');
                        th.parents('tr').remove();
                    }else{
                        //失败执行
                      alert('删除失败');
                    }
              });
      });
  </script>
@endsection