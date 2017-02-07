// alert($);
//设置全局变量
var a = 1;

//点击显示添加地址表单
$('#J_saddAddress').click(function(){
	// alert(1);
	if(a == 1){
		$('.biao').css('display','block');
		a = 2;
	}else{
		$('.biao').css('display','none');
		a = 1;
	}
	$('.addrb').remove();
});
//绑定取消按键
$('.J_cancelbtn').click(function(){
	$('.biao').css('display','none');
		a = 1;
});
//获取当前地址的aid
//给设置默认地址加点击事件
$('.J_default').click(function(){

	var aid = $(this).prev().val();
	var uid = $(this).prev().prev().val();

	$.get('/dizhi/status',{aid:aid,uid:uid,a:1},function(data){
		// console.log(data);
		window.location.href =  '/dizhi';
	});


});
//点击删除地址
$('.del').click(function(){
	var aid = $(this).prev().prev().prev().val();
	// alert(aid);
	$.get('/dizhi/delete',{aid:aid},function(data){
		console.log(data);
		window.location.href =  '/dizhi';
	});
});
var province = '省份';
var city = '市';
var county = '县/区';


// var opt0 = [province,city,county];
//点击编辑地址信息
// 点击编辑时发送ajax得到数据
// $.ajaxSetup({
// 	async:false,
// });


$('.edit').click(function(){
	var aid = $(this).prev().prev().val();
	// alert(aid);
	//发送ajax
	$.get('/dizhi/addr',{id:aid},function(data){
		// console.log(data);
		//得到城市地址
		var address = data.address;
		//拆分
		province = address.split('||')[0];
		city = address.split('||')[1];
		county = address.split('||')[2];
		
		// console.log(province,city,county);
		
		// 拷贝添加地址的div
		var addr = $('.addra').clone();
		// console.log(addr);
		addr.find('.J_postcode').val(data.emailcode);
		addr.find('.textarea').html(data.street);
		addr.find('.J_name').val(data.rec);
		addr.find('.J_mobile').val(data.recphone);
		addr.addClass('addrb');
		addr.removeClass('addra');
		// 插入到页面
		$('.asd').append(addr);
		addr.find('.biao').css('display','block');

	},'json');
	$('.biao').css('display','none');
	// console.log(province,city,county);
});

var opt0 = [province,city,county];