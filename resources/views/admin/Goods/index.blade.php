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

    <form action="{{url('admin/goods/index')}}" method="get">
           <div class="dataTables_length" id="example-1_length">
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
           </div>
          </div>
          <div class="col-xs-6">
           <div id="example-1_filter" class="dataTables_filter">
            <label>搜索:
                <input name='gname' class="form-control input-sm" placeholder="" aria-controls="example-1" type="text" value="@if(!empty($list['gname'])){{$list['gname']}}@endif"/>
                 <input type="submit" value="确定">
            </label>

           </div>

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
      名称
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 80.2px;" aria-label="Office: activate to sort column ascending">
      类别
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 60.2px;" aria-label="Age: activate to sort column ascending">
      价格
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 100.2px;" aria-label="Start date: activate to sort column ascending">
      库存
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
      销量
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
      游览量
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
     	图片
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
     	描述
      </th>
       <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
     	状态
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
     	创建时间
      </th>
       <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 240px;" aria-label="Salary: activate to sort column ascending">
      操作
      </th>
     </tr> 
    </thead> 
		
    <tfoot> 
     
    </tfoot> 
    <tbody> 
    @foreach($goods as $k=>$v)
     <tr role="row" class="odd"> 
      <td class="_1"> {{$v->gid}} </td> 
      <td> {{$v->gname}} </td> 
      <td> {{$v->tname}} </td> 
      <td> {{$v->price}} </td> 
      <td> {{$v->cnt}} </td> 
      <td> {{$v->scnt}} </td>     
      <td> {{$v->vcnt}} </td> 
      <td><img src="{{url($v->gpic)}}" alt="" width="50px"></td> 
      <td> {{$v->gdesc}} </td> 
      
      <?php $arr = ['新品','上架','下架']; ?>
      <td> <?php echo $arr[$v->status]; ?> </td> 
      <td> {{$v->ctime}} </td>  
      <td>
        <a href="#" class="del btn btn-red">删除</a> 
        <a href="{{url('admin/goods/edit')}}?gid={{$v->gid}}" class="btn btn-warning">修改</a>
        <a href="{{url('admin/goods/spicshow')}}?gid={{$v->gid}}" class="btn btn-primary">查看小图</a>
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
             {!! $goods->appends($list)->render() !!}
    </div>
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