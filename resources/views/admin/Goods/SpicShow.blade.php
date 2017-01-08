@extends('Admin/layout/layout')
@section('title','商品小图')
@section('con')
		
  <div id="example-1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
   <div class="row">
    <div class="col-xs-6">

    <form action="{{url('admin/goods/index')}}" method="get">
    &nbsp;&nbsp;&nbsp;&nbsp;<h3>商品小图</h3>
           <!-- <div class="dataTables_length" id="example-1_length">
            <label>Show 
                  <select name="num" aria-controls="example-1" class="form-control input-sm">
                      <option value="4" 
                       @if( !empty($list['num']) && $list['num'] == 4 )
                        { selected } 
                        @endif)
                      >4</option>
                      <option value="6" 
                      @if( !empty($list['num']) && $list['num'] == 6 )
                        { selected } 
                        @endif)
                      >6</option>
                      <option value="10" 
                      @if( !empty($list['num']) && $list['num'] == 10 )
                      { selected } 
                      @endif) 
                      >10</option>
                  </select> 
            entries
            </label>
           </div> -->

          </div>
          <div class="col-xs-6">
           <!-- <div id="example-1_filter" class="dataTables_filter">
            <label>搜索:
                <input name='gname' class="form-control input-sm" placeholder="" aria-controls="example-1" type="text" value="@if(!empty($list['gname'])){{$list['gname']}}@endif"/>
                 <input type="submit" value="确定">
            </label>

           </div> -->

          </div>
    </form>

   </div>


   <table id="example-1" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="example-1_info" style="width: 100%;" width="100%" cellspacing="0"> 
    <thead> 
     <tr role="row">



      <th class="_asc" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 50.2px;" aria-sort="ascending" aria-label="Name: activate to sort column ascending">
      id
      </th>

      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 130.2px;" aria-label="Position: activate to sort column ascending">
      所属商品
      </th>

    

      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
     	图片
      </th>


       <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 240px;" aria-label="Salary: activate to sort column ascending">
      操作
      </th>


     </tr> 
    </thead> 
		
    <tfoot> 
     
    </tfoot> 
    <tbody> 
    <!-- 如果没有数据分配 -->
    @if( empty($pics) )
    <tr> <a href="{{url('admin/goods/spic')}}?gid={{$gid}}" style="font-size: 20px;">您还没有商品小图!快点击我进行添加吧 ☚!</a> </tr>
    @endif

    @foreach($pics as $k=>$v)
     <tr role="row" class="odd"> 
      <td class="_1"> {{$v->id}} </td> 
      <td> {{$v->gname}} </td> 
      <td><img src="{{url($v->spic)}}" alt="" width="50px"></td> 
      <td>
        <a href="#" class="del btn btn-red">删除</a> 
        <a href="{{url('admin/goods/spic')}}?gid={{$v->gid}}" class="btn btn-primary">添加图片</a>
      </td> 
     </tr>
    @endforeach


    </tbody> 
   </table>


   <div class="row">
    <div class="col-xs-6">
     
     <div class="dataTables_info" id="example-1_info" role="status" aria-live="polite">

     </div>
    
    </div>
    <div class="col-xs-6">
             <!-- 分页部分 写入模板就可以进行分页操作-->
            
    </div>
   </div>
  </div> 


@endsection

@section('js')
  <script>
      $('.del').click(function(){
          var th = $(this);
          var id = $(this).parents('tr').find('._1').html();

         //发送ajax
              $.get('/admin/goods/spicdel',{id:id},function(data){
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