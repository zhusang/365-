@extends('Admin/layout/layout')
@section('title','店铺轮播管理')
	@section('shoplunbo')
<li class="has-sub">
    <a href="ui-panels.html">
        <i class="linecons-note"></i>
        <span class="title">店铺轮播图管理</span>
    </a>
    <ul style="display:none;">
        <li class="">
            <a href="{{url('/admin/shoplunbo/index')}}">
                <span class="title">店铺轮播列表</span>
            </a>
        </li>
        
    </ul>
</li>                       						
@endsection
@section('con')

<div id="page-wrapper" style="min-height: 394px;">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">
                请您选择四件商品点击下方红色按钮确认
            </h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
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




		
  <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
   <div class="row">
    <div class="col-xs-6">

    <form action="{{url('admin/shoplunbo/detail')}}" method="get">
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
          

           </div>

          </div>
    </form>

   </div>

  <div class="panel panel-default">
  <div class="panel-heading">
                </div>
   <table id="example-1" class="table table-striped table-bordered "  role="grid" aria-describedby="example-1_info" style="width: 100%;" width="100%" cellspacing="0"> 
    <thead> 
     <tr role="row">
      <th class="_asc" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 50.2px;" aria-sort="ascending" aria-label="Name: activate to sort column ascending">
      gid
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 130.2px;" aria-label="Position: activate to sort column ascending">
      商品名称
      </th>
     
     <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
      图片
      </th>

      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 90px;" aria-label="Salary: activate to sort column ascending">
      库存
      </th>
     
       <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" style="width: 200px;" aria-label="Salary: activate to sort column ascending">
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
      <td><img src="{{url($v->gpic)}}" alt="" width="50px"></td> 
      <td> {{$v->cnt}} </td> 
      <td>

       <input type="checkbox" class="box" name="pic{{$v->gid}}" value="">
        <!-- <a href="javascript:;" style="width:100px;height:30px;" class="btn btn-warning">取消推荐商品</a> -->
      </td> 
     </tr>
    @endforeach


    </tbody> 
   </table>
     <a href="javascript:;" sid="{{$v->sid}}" style="width:120px;height:30px;" class="add btn btn-red">添加到推荐商品</a> 
  </div>

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
      $(function(){
        var arr = [2];
        var brr = [];
        
        //给每一个input框绑定单击事件
       for (var i = 0; i < $('input[type=checkbox]').length; i++) {

         $('input[type=checkbox]').eq(i).click(function(){
            //存放起来gid
            var gid = $(this).parents('tr').find('._1').html();

            var th = $(this);
            //在数组中是否存在某个值
            var jieguo = $.inArray(Number(gid),arr);

            if (jieguo!=-1) {
              //如果在数组中
              delete arr[Number(gid)];
              delete brr[Number(gid)];

             
              
           // console.log(brr);
              //并改变状态
              th.removeAttr('checked');
            }else{
              //如果不在数组中
              arr[Number(gid)]=Number(gid);
            
              //并且改变状态
              th.attr('checked','true');
            }
          // console.log(arr);
         });
       }
        
     

      
        //绑定单击事件添加推荐商品
          $('.btn-red').click(function(){
             //获取店铺id
                var sid = $(this).attr('sid');
              //获取所有的选中的input
              var k=0;
              for (var i = 0; i < $('input[type=checkbox]').length; i++) {
                  
                   //如果它是选中的那么把它放入这个标志中
                   var che = $('input[type=checkbox]').eq(i).attr('checked');
                  if (che=='checked') {
                      //获取当前选中的商品的信息 并且放入数组
                        var gid = $('input[type=checkbox]').eq(i).parents('tr').find('._1').html();
                        gid = Number(gid);
                      //放在数组中
                        brr[k]=gid;
                        k++;
                  }
                  
              }
            //获取数组长度 看看是否
              var j = 0
             var crr = [];
              for (var i = 0; i < brr.length; i++) {
                  if (brr[i]!=undefined) {
                      crr[j]=brr[i];
                      j++;
                  }
              }

            //获取长度 只要达到四件就OK了 多了 就让重新选择
            var nn = crr.length;
            if (Number(nn)==4) {
                var str = brr.join(','); 
                //当数量够时 我就发送ajax  并且把添加按钮移除掉
                $.get('/admin/shoplunbo/addgoods',{str:str,sid:sid},function(data){
                      if (data==1) {
                        alert('添加推荐店铺成功');
                        location.href= "http://mg.cn/admin/shoplunbo";
                      }
                });
            }else{
              alert('您选择的商品数量不正确,请您按四件商品的标准选择');
            }
          
        
          });
         


        });
      </script>
@endsection