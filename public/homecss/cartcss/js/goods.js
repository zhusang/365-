// 商品页的 加入购物车操作 单击事件
	


	$('#J_BuyCart').click(function()
      {
        //获取各个参数
        // var img = $('.style-list').find('.c').val();
        // var size = $('.size-list').find('.c').val();
       
        //商品数量
        var num = $('.num-input').val();
        //商品id
        var gid = $('#gid').val();
        //获取价格  促销价
        var nowp= $('#J_NowPrice').html();
        //获取 原价
        var oldp= $('#J_OriginPrice').html();
        //获取款式
        var type = '黑白格';
        //获取尺码
        var size = 'm';
        //获取店铺id
        // $('#sname').attr('sid');
        var sid =  $('#sname').attr('sid');
        
       
        //发送ajax
        $.get('/cart',{num:num,gid:gid,nowp:22,oldp:30.5,type:type,size:size,sid:sid},function(data){
            if (data){
               //弹出状态框
               // $('#J_AddCartBox').css('display','block');
               
              }else{
                $('#div').html('请选择尺码和款式');
              }
        },'json');
      })