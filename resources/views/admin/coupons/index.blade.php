@extends('Admin/layout/layout')
@section('title','商品管理')
	@section('coup')
	<li class="has-sub active">
        <a href="{{url('/admin/coupons/index')}}">
            <i class="linecons-note"></i>
            <span class="title">优惠券管理</span>
        </a>
    </li>						
@endsection
@section('con')
<div id="page-wrapper" style="min-height: 394px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                优惠券列表
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
  <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
   <div class="row">
    <div class="col-xs-6">

    <form action="{{url('admin/coupon/show')}}" method="get">
           
          <div class="col-xs-6">
           <div id="example-1_filter" class="dataTables_filter">
            <label>搜索:
                <input name='' class="form-control input-sm" placeholder="" aria-controls="example-1" type="text" value=""/>
                 <input type="submit" class='btn btn-black btn-xs' style="width:60px;height:30px;margin-top:10px;"value="确定">
            </label>

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
      <th class="_asc" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1"  aria-sort="ascending" aria-label="Name: activate to sort column ascending">
      优惠券ID
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1"  aria-label="Position: activate to sort column ascending">
      优惠券类ID
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1"  aria-label="Office: activate to sort column ascending">
      类名
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1"  aria-label="Age: activate to sort column ascending">
      成交金额:
      </th><th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1"  aria-label="Salary: activate to sort column ascending">
      开始时间
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending">
      结束时间
      </th>

      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1"  aria-label="Salary: activate to sort column ascending">
      用户:
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1"  aria-label="Salary: activate to sort column ascending">
      店铺:
      </th>
      <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1"  aria-label="Salary: activate to sort column ascending">
     	激活时间:
      </th>
       <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">
     	状态
      </th>
       <th class="" tabindex="0" aria-controls="example-1" rowspan="1" colspan="1"  aria-label="Salary: activate to sort column ascending">
      操作
      </th>
     </tr> 
    </thead> 
		
    <tfoot> 
     
    </tfoot> 
    <tbody> 
    @foreach($cou as $k=>$v)
     <tr role="row" class="odd"> 
      <td class="_1">{{$v->couid}}</td>
      @if($coupon[$v->cid]) 
      <td> {{$v->cid}}</td>
      @else
      <td style='color:green'>没有分类id</td>
      @endif
      @if($coupon[$v->cid])
      <td> {{$coupon[$v->cid]->ctname}}</td> 
      @else
      <td style='color:red'>该券可能已经过期了</td>
      @endif
      <td> {{$v->money}} </td> 
      <td> {{$v->activatetime}} </td> 
      <td> {{$v->endtime}} </td> 
      @if($user[$v->uid])
      <td> {{$user[$v->uid]->uname}}</td>
      @else
      <td></td> 
      @endif
      @if($shop[$v->sid])
      <td> {{$shop[$v->sid]->sname}}</td>
      @else
      <td></td> 
      @endif
      <td> {{$v->usetime}}</td> 
      <td> {{$state[$v->stute]}}</td> 
      <td>
        <a href="javascript:;" style="width:60px;height:30px;" class="del btn btn-red">删除</a> 
      </td> 
     </tr>
    @endforeach


    </tbody> 
   </table>
    
  </div>

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
          var couid = $(this).parents('tr').find('._1').html();
         //发送ajax
              $.get('/admin/coupons/delete',{couid:couid},function(data){
                    if (data==1) {
                        //成功执行
                        th.parents('tr').remove();
                    }else{
                        //失败执行
                      alert('删除失败');
                    }
              });
      });

     
  </script>
@endsection