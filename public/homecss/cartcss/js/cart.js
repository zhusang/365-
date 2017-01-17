//当加载页面时 让所有的商品都不选中
for (var i = 0; i < $('input[type=checkbox]').length; i++) {
		$('input[type=checkbox]')[i].checked=false;
	}


// 绑定单击事件
//全部商品  优惠 库存紧张 的单击事件
	for (var i = 0; i < $('#cartSlide').find('li').length; i++) {
	if (i!=4) {

		$('#cartSlide').find('li').eq(i).find('a').click(function(){
					$(this).addClass('cart_slide_item_cur');
					$(this).parents('li').siblings().find('a').removeClass('cart_slide_item_cur');

		});	
	}
	

	}


//给input为checkbox绑定单击事件

// TOP全选
//全选 全不选标志
	var topc = 1
	$('#s_all_h').click(function(){
		//全局变量 总价格
			var bottomNumPrice = 0;
			if (topc==1) {
				//让每一个框都选中
				for (var i = 0; i < $('.two').length; i++) {
						topc=2;
						$('.two')[i].checked = true;
				}
				// 如果每一个框都选中了 那么本身就变成选中
				$(this).checked = true;
				//另一个全选也选中
				$('#s_all_f').attr('checked','true');
				//商品数量
				var goodsTotal = 0;
				//如果全部选中 计算所有的商品价格
				for (var i = 0; i < $('.item_sum').length; i++) {
					//商品数量
					goodsTotal++;
					//每个小计
					var everyPrice = $('.item_sum').eq(i).find('font').html();
					//每个小计加起来总价格
					bottomNumPrice= bottomNumPrice+Number(everyPrice);
				}
				
				//改变的商品数量
				$('.goodsNum').html(goodsTotal);
				//改变总价格
				$('.goodsSum').find('font').html(bottomNumPrice);
				
				//全选时触发店铺选中
				for (var i = 0; i < $('.s_shopall').length; i++) {
					//获取每一个店铺的sid
					var sid = $('.s_shopall').eq(i).attr('data-bid');
					//把sid存入 标记数组中
					shopc[sid]=sid;
					// console.log(shopc);
				}

				//全选时触发单个商品选中
				for (var i = 0; i < $('.cart_thcheck').length; i++) {
					//获取每一个商品的gid
					var gid = $('.cart_thcheck').eq(i).attr('gid');
					//存入标记gid
					goodsArr[gid] = gid;
					console.log(goodsArr);
				}
			}else{
				
				//让每一个框都不选中
				for (var i = 0; i < $('.two').length; i++) {
						topc=1;
						$('.two')[i].checked = false;
				}
				// 如果每一个框都不选中 那么本身就变成不选中
				$(this).checked = false;
				//另一个全选不选中
				$('#s_all_f').removeAttr('checked');
				//改变总价格
				$('.goodsSum').find('font').html('');
				//改变的商品数量
				$('.goodsNum').html('0');

				// 全不选时触发店铺不选中
				for (var i = 0; i < $('.s_shopall').length; i++) {
					var sid = $('.s_shopall').eq(i).attr('data-bid');
					//把店铺sid从标记数组中删除
					delete shopc[sid];
					// console.log(shopc);
				}

				//全不选时触发单个商品不选中
				for (var i = 0; i < $('.cart_thcheck').length; i++) {
					//触发商品不提交
		  			 	$('.cart_thcheck').eq(i).removeAttr('n');
		  			 	// =========================================
		  			 //获取点击的商品的gid
		 				var gid = $('.cart_thcheck').eq(i).attr('gid');
					//触发商品不提交
		  			 	$('.cart_thcheck').eq(i).removeAttr('n');
		 				// console.log($('.cart_thcheck')[i]);
		 					//调用函数 拿到所有的type等于hidden的input框 并且删除
		 					InputDel(gid);
		 					
		  			 	// =========================================
					//获取每一个商品的gid
						var gid = $('.cart_thcheck').eq(i).attr('gid');
					//存入标记gid
					delete goodsArr[gid];
					// console.log(goodsArr);
				}
			}
	});
 // bottom 全选
	$('#s_all_f').click(function(){
				//全局变量 总价格
			var bottomNumPrice = 0;
			if (topc==1) {
				//让每一个框都选中
				for (var i = 0; i < $('.two').length; i++) {
						topc=2;
						$('.two')[i].checked = true;
				}
				// 如果每一个框都选中了 那么本身就变成选中
				$(this).checked = true;
				//另一个全选也选中
				$('#s_all_h').attr('checked','true');
				//商品数量
				var goodsTotal = 0;
				//如果全部选中 计算所有的商品价格
				for (var i = 0; i < $('.item_sum').length; i++) {
					//商品数量
					goodsTotal++;
					//每个小计
					var everyPrice = $('.item_sum').eq(i).find('font').html();
					//每个小计加起来总价格
					bottomNumPrice= bottomNumPrice+Number(everyPrice);
				}
				//改变的商品数量
				$('.goodsNum').html(goodsTotal);
				//改变总价格
				$('.goodsSum').find('font').html(bottomNumPrice);

				//全选时触发店铺选中
				for (var i = 0; i < $('.s_shopall').length; i++) {
					//获取每一个店铺的sid
					var sid = $('.s_shopall').eq(i).attr('data-bid');
					//把sid存入 标记数组中
					shopc[sid]=sid;
					// console.log(shopc);
				}

				//全选时触发单个商品选中
				for (var i = 0; i < $('.cart_thcheck').length; i++) {
					//获取每一个商品的gid
					var gid = $('.cart_thcheck').eq(i).attr('gid');
					//存入标记gid
					goodsArr[gid] = gid;
					console.log(goodsArr);
				}
				
			}else{
				
				//让每一个框都不选中
				for (var i = 0; i < $('.two').length; i++) {
						topc=1;
						$('.two')[i].checked = false;
				}
				// 如果每一个框都不选中 那么本身就变成不选中
				$(this).checked = false;
				//另一个全选不选中
				$('#s_all_h').removeAttr('checked');
				//改变总价格
				$('.goodsSum').find('font').html('');
				//改变的商品数量
				$('.goodsNum').html('0');

				// 全不选时触发店铺不选中
				for (var i = 0; i < $('.s_shopall').length; i++) {
					var sid = $('.s_shopall').eq(i).attr('data-bid');
					//把店铺sid从标记数组中删除
					delete shopc[sid];
					// console.log(shopc);
				}

				//全不选时触发单个商品不选中
				for (var i = 0; i < $('.cart_thcheck').length; i++) {
		  			 //获取当前商品的gid
		 						var gid = $('.cart_thcheck').eq(i).attr('gid');
					//触发商品不提交
		  			 	$('.cart_thcheck').eq(i).removeAttr('n');
		 						// console.log($('.cart_thcheck')[i]);
		 					//调用函数 拿到所有的type等于hidden的input框 并且删除
		 					InputDel(gid);
		 				
		  			 
					//获取每一个商品的gid
					var gid = $('.cart_thcheck').eq(i).attr('gid');
					//存入标记gid
					delete goodsArr[gid];
					// console.log(goodsArr);
				}
			}
	});

//添加数组元素用
var m = 0;
//店铺的全选
//全选 全不选 标识
//定义数组 辨别店铺选中
var shopc = [2];
	for (var i = 0; i < $('.s_shopall').length; i++) {
		$('.s_shopall').eq(i).click(function(){
			//获取到是否为当前店铺商品标识
				var bid = $(this).attr('data-bid');
				var th = $('.s_shopall').eq(i);

				var shopBB= $.inArray(bid,shopc);
			//如果数组中存在这个bid
			if ( shopBB != -1) {
				//删除这个元素
				delete shopc[bid];
				//把所有当前标识的商品不选中
				for (var i = 0; i < $('.'+bid+'').length; i++) {
					$('.'+bid+'').eq(i).removeAttr('checked');
				}
				//当前店铺下商品数量值
				var shopNum = 0;
				//如果店铺商品全取消选中 需要重新计算总价
				// 获取当前店铺下商品的总价格
				var shop_goodsSum = 0; 
				for (var i = 0; i < $('.item_sum').length; i++) {
					var sbid = $('.item_sum').eq(i).attr('data-bid');
					if (sbid==bid) {
						shopNum++;
						shop_goodsSum += Number($('.item_sum').eq(i).find('font').html());
					}
				}
				//把减掉商品的价格去掉
				var goodsSum = $('.goodsSum').find('font').html();
				if (goodsSum!=0) {
					$('.goodsSum').find('font').html(goodsSum-shop_goodsSum);
				}
				//修改数量
					var oldGoodsNum = $('.goodsNum').html();
					if (oldGoodsNum != 0) {
						$('.goodsNum').html(Number(oldGoodsNum)-Number(shopNum));

					}
				
				//全不选时触发单个商品不选中
				for (var i = 0; i < $('.cart_thcheck').length; i++) {
		  			
		 			
					//触发商品不提交
		  			 	$('.cart_thcheck').eq(i).removeAttr('n');
		 						console.log($('.cart_thcheck')[i]);
		 				//调用函数 拿到所有的type等于hidden的input框 并且删除
		 				//调用方法只删除当前店铺下的符合input条件的商品
		 					InputDelSid(bid);
					//如果是当前店铺下商品就触发单个商品选中事件
					var sid = $('.cart_thcheck').eq(i).attr('data-bid');
				if (sid==bid) {
					//获取每一个商品的gid
					var gid = $('.cart_thcheck').eq(i).attr('gid');
					//存入标记gid
					delete goodsArr[gid];
					console.log(goodsArr);
					}
				}
				
			}else{
				
				//改变标识 添加进数组
				shopc[bid]=bid;
				console.log(shopc);
				//把所有当前标识的商品选上
				for (var i = 0; i < $('.'+bid+'').length; i++) {
					
					$('.'+bid+'').eq(i).attr('checked','true');
				}
				//当前店铺下商品数量值
				var shopSum = 0;
				//如果店铺商品全选中 需要重新计算总价
				// 获取当前店铺下商品的总价格
				var shop_goodsSum = 0; 
				for (var i = 0; i < $('.item_sum').length; i++) {
					
					var sbid = $('.item_sum').eq(i).attr('data-bid');
					if (sbid==bid) {
						//商品数量
						shopSum++;
						shop_goodsSum += Number($('.item_sum').eq(i).find('font').html());
					}
				}
				// alert(shop_goodsSum);
				//获取总价
				var goodsSum = $('.goodsSum').find('font').html();
				if (goodsSum==undefined) {
					//如果没有原值 就直接覆盖
					$('.goodsSum').find('font').html(shop_goodsSum);
				}else{
					//原值加上新添加的值
					$('.goodsSum').find('font').html(Number(goodsSum)+Number(shop_goodsSum));
					
				}
				//修改数量
				//获取原数量
					var oldGoodsSum = $('.goodsNum').html();
					$('.goodsNum').html(Number(shopSum)+Number(oldGoodsSum));
					// alert(oldGoodsSum);
			
				//全选时触发单个商品选中
				for (var i = 0; i < $('.cart_thcheck').length; i++) {
					//如果是当前店铺下商品就触发单个商品不选中事件
					var sid = $('.cart_thcheck').eq(i).attr('data-bid');
				if (sid==bid) {
					//获取每一个商品的gid
					var gid = $('.cart_thcheck').eq(i).attr('gid');
					//存入标记gid
					goodsArr[gid] = gid;
					console.log(goodsArr);
					}
				}

			}
			
		});
	}

// 店铺单个商品的单击事件
//查询当前店铺下所有的 相同data-bid属性 的input框
//单个商品标记数组
var goodsArr = [];
  	for (var i = 0; i < $('.cart_thcheck').length; i++) {
  		//绑定单击事件
  			 $('.cart_thcheck').eq(i).click(function(){
  			 	//获取商品id
  			 	var gid = $(this).attr('gid');
  			 	//查看标记是否存在于数组中
  			 	var goodsBZ = $.inArray(gid,goodsArr);

  			 	if (goodsBZ != -1) {
  			 		//如果存在执行 把标记删除掉
  			 		delete goodsArr[gid];
  			 		//商品数量
  			 		var goodsNumTotal = 0;
  			 		//获取总价减去自己的价格
  			 		//先获取当前商品的小计
  			 		for (var i = 0; i < $('.item_sum').length; i++) {
  			 			//获取小计里边的gid
  			 			var ggid = $('.item_sum').eq(i).attr('gid');
  			 			if (ggid==gid) {
  			 				//获取到当前商品数量
  			 				goodsNumTotal++;
  			 				//获取当前商品的小计
  			 				var goodsNumPrice = $('.item_sum').eq(i).find('font').html();
  			 			}
  			 		}
  			 		//改变总价 以及 总数量
  			 		
  			 				//获取总价
							var goodsSum = $('.goodsSum').find('font').html();
							//减去取消选中的商品价格
							if (goodsSum!=0) {
								$('.goodsSum').find('font').html(goodsSum-goodsNumPrice);
							}
							//获取原数量
								var oldGoodsSum = $('.goodsNum').html();
							//减去取消选中的商品数量
								if (oldGoodsSum != 0) {
									$('.goodsNum').html(Number(oldGoodsSum)-Number(goodsNumTotal));
								}
								// alert(goodsSum);
								// alert(oldGoodsSum);
								//定义两个标志
									var shop_n=0;
									var shop_c=0;
						//点击取消单个商品选中时 查询所有的同店铺商品是否全部取消选中 是的话店铺就取消选中
		  			 				for (var i = 0; i < $('.cart_thcheck').length; i++) {
		  			 					//获取当前点击的gid
		  			 					//获取当前商品的gid
											var gid = $(this).attr('gid');
		  			 						// alert(gid);
		  			 						// console.log($('.cart_thcheck')[i]);
		  			 					// 触发商品不提交 并且把当前商品这个删除掉
		  			 						$('.cart_thcheck').eq(i).removeAttr('n');
		  			 					//调用函数 拿到所有的type等于hidden的input框 并且删除
		  			 					InputDel(gid);
		  			 					
		  			 					
		  			 						
										//获取当前点击的id
										var sid = $(this).attr('data-bid');
										//获取当前遍历出来的id
										var shopSid = $('.cart_thcheck').eq(i).attr('data-bid');
										//同类商品带自己有几个
										if (sid==shopSid) {
											shop_n++;
											var che = $('.cart_thcheck').eq(i).attr('checked');
											//同类商品选中的带自己有几个
											if (!che) {
												shop_c++;
											}
										}
								}
								if (shop_c==shop_n) {
							
								//当前店铺下商品全取消选中时触发店铺取消选中
								for (var i = 0; i < $('.s_shopall').length; i++) {
									//获取每一个店铺的sid
									var twoSid = $('.s_shopall').eq(i).attr('data-bid');
									if (twoSid==sid) {
										//把sid删除从标记数组中
										delete shopc[sid];
										$('.s_shopall').eq(i).removeAttr('checked');
										// console.log(shopc);
										}
									}
								}

  			 		
  			 	}else{
  			 		//如果不存在执行 把gid存入标识
  			 		goodsArr[gid] = gid;
  			 		//获取总价加上自己的价格
  			 		//商品数量
  			 		var goodsNumTotal = 0;
  			 		//先获取当前商品的小计
  			 		for (var i = 0; i < $('.item_sum').length; i++) {
  			 			//获取小计里边的gid
  			 			var ggid = $('.item_sum').eq(i).attr('gid');
  			 			if (ggid==gid) {
  			 				//获取到当前商品数量
  			 				goodsNumTotal++;
  			 				//获取当前商品的小计
  			 				var goodsNumPrice = $('.item_sum').eq(i).find('font').html();
  			 			}
  			 		}

  			 		//改变总价 以及 总数量
  			 			
  			 			//获取总价
						var goodsSum = $('.goodsSum').find('font').html();
						if (goodsSum==undefined) {
							//如果没有原值 就直接覆盖
							$('.goodsSum').find('font').html(Number(goodsNumPrice));
						}else{
							//原值加上新添加的值
							$('.goodsSum').find('font').html(Number(goodsSum)+Number(goodsNumPrice));
							
						}
						// alert();
						//修改数量
						//获取原数量
							var oldGoodsSum = $('.goodsNum').html();
							$('.goodsNum').html(Number(goodsNumTotal)+Number(oldGoodsSum));
							// alert(goodsSum);
							// alert(oldGoodsSum);
							//定义两个标志
							var shop_n=0;
							var shop_c=0;
						//点击单个商品选中时 查询所有的同店铺商品是否全部选中 是的话店铺就选中
  			 				for (var i = 0; i < $('.cart_thcheck').length; i++) {
								//获取当前点击的id
								var sid = $(this).attr('data-bid');
								//获取当前遍历出来的id
								var shopSid = $('.cart_thcheck').eq(i).attr('data-bid');
								//同类商品带自己有几个
								if (sid==shopSid) {
									shop_n++;
									var che = $('.cart_thcheck').eq(i).attr('checked');
									//同类商品选中的带自己有几个
									if (che) {
										shop_c++;
									}
								}
						}
								// alert(shop_c);
								//改变店铺为选中状态
								if (shop_c == shop_n) {
						
									//当前店铺下商品全选时触发店铺选中
									for (var i = 0; i < $('.s_shopall').length; i++) {
										//获取每一个店铺的sid
										var twoSid = $('.s_shopall').eq(i).attr('data-bid');
										if (twoSid==sid) {
											//把sid存入 标记数组中
											shopc[sid]=sid;
											$('.s_shopall').eq(i).attr('checked','true');
											// console.log(shopc);
											}
										}
										
								}
  			 	}
  			 	
  			 });
  	}


  //价格加减
  //减号的操作
  for (var i = 0; i < $('.cart_num_reduce').length; i++) {
  	var min = $('.cart_num_reduce').eq(i).prev().prev().val();
  
  	//给每一个减号绑定单击事件
	  	$('.cart_num_reduce').eq(i).click(function(){
	  		// console.log($(this));
	  		//获取到input框中的值操作
	  		var n = $(this).prev().prev().val();
	  		// console.log(n);
	  		//如果值等于一了 就不能继续往下减
	  		if (n==1) {
	  			return;
	  		}
	  		//将原值减一
	  		n--;
	  		$(this).prev().prev().val(n);
	  		 	//获取商品的gid
	  			var gid = $(this).attr('gid');
	  			//获取当前商品的是否被选中
				for (var i = 0; i < $('.cart_thcheck').length; i++) {
					var cgid = $('.cart_thcheck').eq(i).attr('gid');
					if (cgid==gid) {
						//h获取到是否为选中判断标志
						var check = $('.cart_thcheck').eq(i).attr('checked');
					}
				}

	  			//获取当前商品小计
	  			for (var i = 0; i < $('.cart_data_sprice').length; i++) {
	  				//获取所有小计的gid
	  				var xgid = $('.cart_data_sprice').eq(i).attr('gid');
	  				//如果gid相等 我就把当前小计拿出来
	  				if (xgid == gid) {
	  					//获取到小计
	  					var nowPrice = $('.cart_data_sprice').eq(i).find('font').html();
	  				}
	  			}
	  			
	  			// alert(nowPrice);
	  			var numPrice = n*parseInt(nowPrice);
	  			for (var i = 0; i < $('.item_sum').length; i++) {
		  		var pgid = $('.item_sum').eq(i).attr('gid');
		  		//如果拿到的gid 与商品gid相等 我就改变这个框的值
		  		if (pgid==gid) {
		  			//改变小计
		  			$('.item_sum').eq(i).find('font').html(numPrice);
		  		}
		  	}
		  	 	//如果显示出来总价钱总数量 
			  	var BZ= $('.goodsNum').html();
			  	if(BZ!=0){
			  		//当当前商品选中时 才改变总价钱总数量
			  		if (check) {
				  		//改变价格减一个单价
				  		//获取显示总价格
				  		var goodsSum = $('.goodsSum').find('font').html();
				  		$('.goodsSum').find('font').html(Number(goodsSum)-Number(nowPrice));
			  		}
			  	}
	  	});
  	
  }
  //加号的操作
  for (var i = 0; i < $('.cart_num_add').length; i++) {
  	
  	 //绑定 加单击事件
 	$('.cart_num_add').eq(i).click(function(){
  	//获取 最大库存为多少
 		var total = $(this).attr('total');
 	//获取当前商品gid
 		var gid = $(this).attr('gid');
 	//判断当前商品是否为选中状态
 	//获取当前商品的是否被选中
			for (var i = 0; i < $('.cart_thcheck').length; i++) {
				var cgid = $('.cart_thcheck').eq(i).attr('gid');
				if (cgid==gid) {
					//h获取到是否为选中判断标志
					var check = $('.cart_thcheck').eq(i).attr('checked');
				}
			}
		// console.log(check);
 		//获取到input框中的值操作
	  		var nn = $(this).prev().val();
	  		nn++;
	  	//如果值大于库存
	  	if (nn > total) { nn=total;}
	  	//改变原文本的值
	  		$(this).prev().val(nn);
	  	//获取商品的gid
	  	var gid = $(this).attr('gid');
	  	// alert(gid);
	  	//获取小计
	  			//获取当前商品小计
	  			for (var i = 0; i < $('.cart_data_sprice').length; i++) {
	  				//获取所有小计的gid
	  				var xgid = $('.cart_data_sprice').eq(i).attr('gid');
	  				//如果gid相等 我就把当前小计拿出来
	  				if (xgid == gid) {
	  					//获取到小计
	  					var nowPrice = $('.cart_data_sprice').eq(i).find('font').html();
	  				}
	  			}

	  	var numPrice = nn*parseInt(nowPrice);
	  	for (var i = 0; i < $('.item_sum').length; i++) {
	  		var pgid = $('.item_sum').eq(i).attr('gid');
	  		//如果拿到的gid 与商品gid相等 我就改变这个框的值
	  		if (pgid==gid) {
	  			//改变小计
	  			$('.item_sum').eq(i).find('font').html(numPrice);
	  		}
	  	}

	  	//如果显示出来总价钱总数量 
	  	var BZ= $('.goodsNum').html();
	  	if(BZ!=0){
	  		if (check) {
	  			//改变价格加一个单价
		  		//获取显示总价格
		  		var goodsSum = $('.goodsSum').find('font').html();
		  		$('.goodsSum').find('font').html(Number(goodsSum)+Number(nowPrice));
	  		}
	  		
	  	}
	  	
 	});
  }


  //给每一个文本框绑定丧失焦点事件
  for (var i = 0; i < $('.cart_num_input').length; i++) {
  	$('.cart_num_input').eq(i).blur(function(){
  			var gid = $(this).attr('gid');
  			// alert(gid);
  			var check = '';
  			//获取当前商品的是否被选中
			for (var i = 0; i < $('.cart_thcheck').length; i++) {
				var cgid = $('.cart_thcheck').eq(i).attr('gid');
				// console.log(cgid);
				if (cgid==gid) {
					// alert(gid);
					//h获取到是否为选中判断标志
					check = $('.cart_thcheck').eq(i).attr('checked');
				}
			}
			// alert(check);
  			//当丧失焦点时候
  			//获取下边的最大总价钱
  			var maxPrice = $('.goodsSum').find('font').html();
  			
		  	//获取商品gid  获取文本框值
			  	var gid = $(this).attr('gid');
			  	var value = $(this).val();

		  	//获取 最大库存为多少
 				var total = $(this).attr('total');
 				// alert(total);
		  	//输入的值不可以小于或者等于0
			  	if (value <= 0) {
			  		//改变数量为1
			  			value = 1;
			  			$(this).val(1);
			  	}
		  	//输入的值不可以大于库存
		  		if (value > Number(total)) {
			  		//改变数量为最大库存
			  			value = total;
			  			$(this).val(total);
			  	}
		  	//重新获取
		  	value = $(this).val();
		  	//获取单价
		  	for (var i = 0; i < $('.cart_data_sprice').length; i++) {
		  		//拿到该商品的单价
		  		var pgid = $('.cart_data_sprice').eq(i).attr('gid');
		  		if (pgid==gid) {
		  			//获取小计\
		  			var XiaoJi = $('.item_sum').eq(i).find('font').html();
		  			//获取到单价
		  			var price = $('.cart_data_sprice').eq(i).find('font').html();
		  			//改变小计
		  			// price*value
		  			$('.item_sum').eq(i).find('font').html(price*value);
		  			//再获取小计
		  			var XiaoJi2 = $('.item_sum').eq(i).find('font').html();
		  			//当前商品选中时执行
		  			if (check=='checked') {
		  				if (XiaoJi < XiaoJi2) {
		  				//计算小计比之前多了多少
		  				var Cha = Number(price*value)-Number(XiaoJi);
		  			    $('.goodsSum').find('font').html(Number(maxPrice)+Number(Cha));
		  				}
		  				if (XiaoJi > XiaoJi2) {
		  					//计算比之前小多少
		  					var Cha = Number(XiaoJi)-Number(price*value);
		  					$('.goodsSum').find('font').html(Number(maxPrice)-Number(Cha));
		  				}

		  			}
		  		}
		  	}

  	});
  }

  

  //设置函数 检测value值
  function xxoo(res,bb){
  	//判断是否为空
  		
  			var rr = prompt('商品数量不可为空或小于1,请重新输入');
  			if (rr >=1 ) {
  				bb.val(rr);
  				console.log(rr);
  				return rr;
  			}
  			xxoo(1,bb);
  		

  }


// =============================================================
//当页面刷新时
 //获取文本框数量 获取小计 
 	for (var i = 0; i < $('.cart_num_input').length; i++) {
 		//获取刷新时的价格 以及 商品数量 获取当前商品gid
 		var SHnum = $('.cart_num_input').eq(i).val();
 		var SHprice = $('.cart_data_sprice').eq(i).find('font').html();
 		var SHgid = $('.cart_num_input').eq(i).attr('gid');
 		// console.log(SHgid);
 		//更新小计
 		var SHpgid = $('.item_sum').eq(i).attr('gid');
 		// console.log(SHpgid);
 		if (SHgid==SHpgid) {
 			//更新小计
 			$('.item_sum').eq(i).find('font').html(SHnum*SHprice);
 		}

 		// console.log($('.item_sum').eq(i).find('font'));
 	}
 
 	//一旦按钮可以提交时候 总价钱 总数量可以显示的时候 加减时候就会改变 总价钱总数量
  

  	//当没有商品被选中时 提交按钮不可以提交 并且点击后显示相应信息
  	$('#payBtn').click(function(){
  		var BZ= $('.goodsNum').html();
  		if (BZ==0) {
  			$('#message').fadeIn(2000);
  		}
  			
  	});

  	$('#payBtn').mouseout(function(){
  		$('#message').fadeOut(2000);
  	});


  	//当有商品被选中时 就显示可以提交的按钮并且可提交
  	for (var i = 0; i < $('input[type=checkbox]').length; i++) {
  	//给每一个商品多选框绑定onchange事件
  	$('input[type=checkbox]').eq(i).change(function(){
  		var res = $(this).attr('checked');
  		// console.log();
  		if(res || $(this).checked ==true){
  			//改变按钮样式
  			$('#payBtn').removeClass('cart_paybtn_disable').attr('bbb','1');
  			//改变 提交地址
  			// $('#payBtn').attr('type','');
  			//调用函数获取到所有要提交的信息
  			// var th = $(this);
  			// getAll(th);
  			for (var i = 0; i < $('.cart_thcheck').length; i++) {
  				// console.log($('.cart_thcheck').eq(i));
  				//获取到是哪些商品被选中
  				var che = $('.cart_thcheck').eq(i).attr('checked');
  				//取消标识
  				// if (che!='checked') {$('.cart_thcheck').eq(i).removeAttr('n');}
  				if (che=='checked') {
  					
  					//查看商品是否已经被删除
  					//如果被选中了 就把当前的商品的信息插入当前商品的隐藏域中
  					var gid = $('.cart_thcheck').eq(i).attr('gid');
  					var sid = $('.cart_thcheck').eq(i).attr('sid');
  					//获取到该商品的所有信息
  					var gpic = $('.cart_thcheck').eq(i).parents('td').next().find('a').eq(0).find('img').attr('src');
  					var gname =  $('.cart_thcheck').eq(i).parents('td').next().find('a').eq(0).find('img').attr('alt');
  					var type = $('.cart_thcheck').eq(i).parents('td').next().next().find('p').eq(0).html();
  					var size = $('.cart_thcheck').eq(i).parents('td').next().next().find('p').eq(1).html();
  					var YouHui = $('.cart_thcheck').eq(i).parents('td').next().next().next().find('p').eq(2).find('span').html();
  					var oldPrice = $('.cart_thcheck').eq(i).parents('td').next().next().next().find('p').eq(0).find('font').html();
  					var nowPrice = $('.cart_thcheck').eq(i).parents('td').next().next().next().find('p').eq(1).find('font').html();
  					
  					var goodsNum = $('.cart_thcheck').eq(i).parents('td').next().next().next().next().find('input').val();
  					var goodsSum = $('.cart_thcheck').eq(i).parents('td').next().next().next().next().next().find('font').html();
  						console.log(gpic,gname,type);
  					
  				//创建input标签
  					var newInput1 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'" name="gid[]" value="'+gid+'"/>');
  					var newInput2 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'" name="gpic[]" value="'+gpic+'"/>');
  					var newInput3 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'"name="gname[]" value="'+gname+'"/>');
  					var newInput4 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'" name="type[]" value="'+type+'"/>');
  					var newInput5 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'" name="size[]" value="'+size+'"/>');
  					var newInput6 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'" name="YouHui[]" value="'+YouHui+'"/>');
  					var newInput7 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'" name="oldPrice[]" value="'+oldPrice+'"/>');
  					var newInput8 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'" name="nowPrice[]" value="'+nowPrice+'"/>');
  					var newInput9 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'" name="goodsSum[]" value="'+goodsSum+'"/>');
  					var newInput10 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'" name="goodsNum[]" value="'+goodsNum+'"/>');
  					// var arr =['gid'=>gid,'gpic'=>gpic,'gname'=>gname,'type'=>type,'size=>'size,'YouHui'=>YouHui,'oldPrice'=>oldPrice,'nowPrice'=>nowPrice,'goodsNum'=>goodsNum,'goodsSum'=>goodsSum];
  				
  					$('#postform').append(newInput1);
  					$('#postform').append(newInput2);
  					$('#postform').append(newInput3);
  					$('#postform').append(newInput4);
  					$('#postform').append(newInput5);
  					$('#postform').append(newInput6);
  					$('#postform').append(newInput7);
  					$('#postform').append(newInput8);
  					$('#postform').append(newInput9);
  					$('#postform').append(newInput10);

  					//找到当前商品的隐藏域 存入该商品信息
  					// $('#'+gid+'').attr('value',arr);
  					// console.log($('form'));
  				}
  			}
  		}

  		var BZ= $('.goodsNum').html();
  		if (BZ==0) {
  			//改变按钮样式
  			$('#payBtn').addClass('cart_paybtn_disable').removeAttr('bbb');
  			//改变 提交地址
  			// $('#payBtn').attr('type','button');
  			$('.cart_thcheck').eq(i).removeAttr('n');
  		}
  	});
  }



// 删除商品
	// 删除时判断同一个店铺下所有商品是否删除
	
	for (var i = 0; i < $('.delete').length; i++) {
		$('.delete').eq(i).click(function(){
			// var th = $(this);
			// everyDel(th);
			//获取当前的小计
			var goodsSum = $(this).parents('td').prev().find('font').html();
			//删除时查看所有的本店商品是否剩我一个 如果是 就连带店铺删除
			//获取店铺id
			var sid = $(this).parents('td').prev().find('p').attr('data-bid');
			// 获取商品id
			var gid = $(this).attr('gid');
			//获取当前商品的是否被选中
			for (var i = 0; i < $('.cart_thcheck').length; i++) {
				var cgid = $('.cart_thcheck').eq(i).attr('gid');
				if (cgid==gid) {
					//h获取到是否为选中判断标志
					var check = $('.cart_thcheck').eq(i).attr('checked');
				}
			}
			// alert(gid);
			// 设置标记
			var deleteN = 0;
			for (var i = 0; i < $('.cart_mitem ').length; i++) {
				//获取每一个商品的店铺id
				var tsid = $('.cart_mitem ').eq(i).attr('data-bid');
				//获取删除标记
				var cut = $('.cart_mitem ').eq(i).attr('data-cut')
				//如果商品的店铺id为同一个店铺id
				if (tsid==sid) {
					if (cut=='true') {
						deleteN++;
					}
				}
			}	
			
			//获取是否显示总价钱 总数量
			var res = $('.goodsNum').html();
			//获取总价钱
			var priceNum = $('.goodsSum').find('font').html();
			// console.log(res,priceNum);
			//如果商品数为一
				if (deleteN==1) {
					//如果显示总价钱以及总数量 需要删除时减去当前数量 减去当前价钱
					if (res!=0) {
						//判断当前这个商品是否为选中状态 如果选中就执行以下操作
						if (check=='checked') {
						//删除提交信息
							InputDel(gid);
						//修改数量
						$('.goodsNum').html(res-1);
						//修改价钱
						$('.goodsSum').find('font').html(Number(priceNum)-Number(goodsSum));
						var priceNum = $('.goodsNum').html();
						if (priceNum==0) {
							$('#payBtn').addClass('cart_paybtn_disable');

						}
						
						}
					}
					//删除时连带店铺删除 修改删除标记
					$(this).parents('tr').css('display','none').attr('data-cut','false');
					$(this).parents('tr').prev().css('display','none').attr('data-cut','false');;
					$(this).parents('tr').next().css('display','table-row');
				}else{
					//删除时只删除商品 修改删除标记
					$(this).parents('tr').css('display','none').attr('data-cut','false');
					$(this).parents('tr').next().css('display','table-row');
					//如果显示总价钱以及总数量 需要删除时减去当前数量 减去当前价钱
					if (res!=0) {
						//删除提交信息
							InputDel(gid);
						//判断当前这个商品是否为选中状态 如果选中就执行以下操作
						if (check=='checked') {
						//修改数量
						$('.goodsNum').html(res-1);
						//修改价钱
						$('.goodsSum').find('font').html(Number(priceNum)-Number(goodsSum));
						}
					}
					
				}
		});
	}






	// 撤销删除
	//获取 总数量
	var res = $('.goodsNum').html();
	//获取总价钱
	var priceNum = $('.goodsSum').find('font').html();
	for (var i = 0; i < $('.J_undo').length; i++) {
		//获取当前的小计
		//获取当前的gid
		// var gid = $('.J_undo').eq(i).attr('gid');
		// alert(gid);
		
		// console.log();
		// alert(goodsSum);

		$('.J_undo').eq(i).click(function(){
			// var th = $(this);
			// cheXiao(th);
			//获取到当前gid
			var gid = $(this).attr('gid');
			// console.log(gid);
			//获取当前商品的是否被选中
			for (var i = 0; i < $('.cart_thcheck').length; i++) {
				var cgid = $('.cart_thcheck').eq(i).attr('gid');
				if (cgid==gid) {
					//h获取到是否为选中判断标志
					var check = $('.cart_thcheck').eq(i).attr('checked');
				}
			}

			//获取当前商品的小计
				for (var i = 0; i < $('.item_sum').length; i++) {
				var Xgid = $('.item_sum').eq(i).attr('gid');
				// console.log(Xgid);
				if (Xgid==gid) {
					//获取当前小计
					var XiaoJi = $('.item_sum').eq(i).find('font').html();
					
				}
			}
		
			//显示商品 改变标识
			$(this).parents('tr').prev().css('display','table-row').attr('data-cut','true');
			$(this).parents('tr').css('display','none');
			//判断商铺下的标题是否隐藏 如果隐藏了 显示商品同时显示
			var shopNone= $(this).parents('tr').prev().prev().attr('data-cut');
			if (shopNone=='false') {
				//生成提交信息
				for (var i = 0; i < $('.cart_thcheck').length; i++) {
					//获取当前的gid
					var infoGid = $('.cart_thcheck').eq(i).attr('gid');
					//如果当前gid 等于点击的gid时
					if (infoGid==gid) {
						var th = $('.cart_thcheck').eq(i);
						//调用函数进行重新生成删除的信息
						ShengCh(gid,th);
					}
				}
				 $(this).parents('tr').prev().prev().css('display','table-row').removeAttr('data-cut');
			}

			//获取 总数量
			var res = $('.goodsNum').html();
			//获取总价钱
			var priceNum = $('.goodsSum').find('font').html();

			//判断是否显示了 总价钱 总数量
			var bbb = $('#payBtn').attr('bbb');
			if (bbb) {
				//判断当前这个商品是否为选中状态 如果选中就执行以下操作
				if (check) {
					//取消删除时候需要把总价格 总数量 改变
					$('.goodsNum').html(Number(res)+1);
					//修改价格
					$('.goodsSum').find('font').html(Number(priceNum)+Number(XiaoJi));
				}
				
			}else{
				// alert(111);
			}
		
		});
	}




	// 多选删除
	$('#cartRemoveChecked').click(function(){
		//获得所有选中状态的商品
		for (var i = 0; i < $('.cart_thcheck').length; i++) {
			var che = $('.cart_thcheck').eq(i).attr('checked');
			if(che=='checked'){
				// console.log($('.cart_thcheck').eq(i));
				var th = $('.cart_thcheck').eq(i);
				//调用函数进行多选删除
				everyDel(th);
				
			}
		}
	});


	// 封装函数 进行单个删除操作
	function everyDel(th){

			//获取当前的小计
			var goodsSum = th.parents('td').next().next().next().next().next().find('font').html();
			// console.log(goodsSum);
			//删除时查看所有的本店商品是否剩我一个 如果是 就连带店铺删除
			//获取店铺id
			var sid = th.parents('td').prev().find('p').attr('data-bid');
			// 获取商品id
			var gid = th.attr('gid');
			// alert(gid);
			//获取当前商品的是否被选中
			for (var i = 0; i < $('.cart_thcheck').length; i++) {
				var cgid = $('.cart_thcheck').eq(i).attr('gid');
				if (cgid==gid) {
					//h获取到是否为选中判断标志
					var check = $('.cart_thcheck').eq(i).attr('checked');
				}
			}
			// alert(gid);
			// 设置标记
			var deleteN = 0;
			for (var i = 0; i < $('.cart_mitem ').length; i++) {
				//获取每一个商品的店铺id
				var tsid = $('.cart_mitem ').eq(i).attr('data-bid');
				//获取删除标记
				var cut = $('.cart_mitem ').eq(i).attr('data-cut')
				//如果商品的店铺id为同一个店铺id
				if (tsid==sid) {
					if (cut=='true') {
						deleteN++;
					}
				}
			}	
			// alert(deleteN);
			//获取是否显示总价钱 总数量
			var res = $('.goodsNum').html();
			//获取总价钱
			var priceNum = $('.goodsSum').find('font').html();
			// console.log(res,priceNum);
			//如果商品数为一
				if (deleteN==1) {
					// alert(deleteN);
						
						//判断当前这个商品是否为选中状态 如果选中就执行以下操作
						if (check=='checked') {
						//删除当前商品的提交信息
						InputDel(gid);
						//修改数量
						$('.goodsNum').html(res-1);
						//修改价钱
						$('.goodsSum').find('font').html(Number(priceNum)-Number(goodsSum));
						var priceNum = $('.goodsNum').html();
							
							if (priceNum==0) {
								$('#payBtn').addClass('cart_paybtn_disable');

							}
						
						}
					
					//删除时连带店铺删除 修改删除标记
					th.parents('tr').css('display','none').attr('data-cut','false');
					th.parents('tr').prev().css('display','none').attr('data-cut','false');;
					th.parents('tr').next().css('display','table-row');
				}else{
					// alert(deleteN);
					
					//删除时只删除商品 修改删除标记
					th.parents('tr').css('display','none').attr('data-cut','false');
					th.parents('tr').next().css('display','table-row');
					//如果显示总价钱以及总数量 需要删除时减去当前数量 减去当前价钱
					if (res!=0) {
						//删除当前商品的提交信息
						InputDel(gid);
						//判断当前这个商品是否为选中状态 如果选中就执行以下操作
						if (check=='checked') {
						//修改数量
						$('.goodsNum').html(res-1);
						//修改价钱
						$('.goodsSum').find('font').html(Number(priceNum)-Number(goodsSum));
						}
					}
					
				}
	}

 
	//封装函数 进行单个撤销操作
	function cheXiao(th){
			//获取到当前gid
			var gid = th.attr('gid');
			// console.log(gid);
			//获取当前商品的是否被选中
			for (var i = 0; i < $('.cart_thcheck').length; i++) {
				var cgid = $('.cart_thcheck').eq(i).attr('gid');
				if (cgid==gid) {
					//h获取到是否为选中判断标志
					var check = $('.cart_thcheck').eq(i).attr('checked');
				}
			}

			//获取当前商品的小计
				for (var i = 0; i < $('.item_sum').length; i++) {
				var Xgid = $('.item_sum').eq(i).attr('gid');
				// console.log(Xgid);
				if (Xgid==gid) {
					//获取当前小计
					var XiaoJi = $('.item_sum').eq(i).find('font').html();
					
				}
			}
			// console.log();
			//显示商品 改变标识
			th.parents('tr').prev().css('display','table-row').attr('data-cut','true');
			th.parents('tr').css('display','none');
			//判断商铺下的标题是否隐藏 如果隐藏了 显示商品同时显示
			var shopNone= th.parents('tr').prev().prev().attr('data-cut');
			if (shopNone=='false') {
				 th.parents('tr').prev().prev().css('display','table-row').removeAttr('data-cut');
			}

			//获取 总数量
			var res = $('.goodsNum').html();
			//获取总价钱
			var priceNum = $('.goodsSum').find('font').html();

			//判断是否显示了 总价钱 总数量
			var bbb = $('#payBtn').attr('bbb');
			if (bbb) {
				//判断当前这个商品是否为选中状态 如果选中就执行以下操作
				if (check) {
					//取消删除时候需要把总价格 总数量 改变
					$('.goodsNum').html(Number(res)+1);
					//修改价格
					$('.goodsSum').find('font').html(Number(priceNum)+Number(XiaoJi));
				}
				
			}else{
				// alert(111);
			}
	}


		
	//表单提交事件
		$('#payBtn').click(function(){
  				$('form').submit(function(){
  				//判断是否有选中的商品 
  				var bbb = $('#payBtn').attr('bbb');
  					if (bbb==1) {
  						return true;
  					}else{
  						return false;
  					}
  				});
  			});


// 封装函数 进行提交时候取消商品时  删除input框
function InputDel(gid){
	// alert(gid);
	for (var i = 0; i < $('input[type=hidden]').length; i++) {
		// console.log(hid);
		//获取hidden的id
		var hid = $('input[type=hidden]').eq(i).attr('id');
		if (hid==gid) {
	 	// console.log(hid);
			// alert(hid);
			$('input[type=hidden]').eq(i).remove();
		

		}
		//查询剩下的input框 如果没有删除干净那么就再次调用自己去删除符合当前条件的input
		var hid = $('input[type=hidden]').eq(i).attr('id');
		if (hid==gid) {
			InputDel(gid);
		}


	}


}


//封装函数 如果传入店铺id只删除店铺下的符合条件的商品
function InputDelSid(sid){
	for (var i = 0; i < $('input[type=hidden]').length; i++) {
		// console.log(sid);
		//获取hidden的sid
		var hid = $('input[type=hidden]').eq(i).attr('sid');
		if (hid==sid) {
	 	// console.log(hid);
			// alert(hid);
			$('input[type=hidden]').eq(i).remove();
		

		}
		//查询剩下的input框 如果没有删除干净那么就再次调用自己去删除符合当前条件的input
		var hid = $('input[type=hidden]').eq(i).attr('sid');
		if (hid==sid) {
			InputDelSid(sid);
		}


	}


}



//封装函数进行重新生成提交订单信息
function ShengCh(gid,th){
	//获取到是哪些商品被选中
  				var che = th.attr('checked');
  				//取消标识
  				// if (che!='checked') {$('.cart_thcheck').eq(i).removeAttr('n');}
  				if (che=='checked') {
  					
  					//查看商品是否已经被删除
  					//如果被选中了 就把当前的商品的信息插入当前商品的隐藏域中
  					var gid = th.attr('gid');
  					var sid = th.attr('sid');
  					//获取到该商品的所有信息
  					var gpic = th.eq(i).parents('td').next().find('a').eq(0).find('img').attr('src');
  					var gname =th.eq(i).parents('td').next().find('a').eq(0).find('img').attr('alt');
  					var type = th.eq(i).parents('td').next().next().find('p').eq(0).html();
  					var size = th.eq(i).parents('td').next().next().find('p').eq(1).html();
  					var YouHui =th.eq(i).parents('td').next().next().next().find('p').eq(2).find('span').html();
  					var oldPrice = th.eq(i).parents('td').next().next().next().find('p').eq(0).find('font').html();
  					var nowPrice = th.eq(i).parents('td').next().next().next().find('p').eq(1).find('font').html();
  					
  					var goodsNum = th.eq(i).parents('td').next().next().next().next().find('input').val();
  					var goodsSum = th.eq(i).parents('td').next().next().next().next().next().find('font').html();
  						// console.log(gpic,gname,type);
  					
  				//创建input标签
  					var newInput1 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'" name="gid[]" value="'+gid+'"/>');
  					var newInput2 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'" name="gpic[]" value="'+gpic+'"/>');
  					var newInput3 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'"name="gname[]" value="'+gname+'"/>');
  					var newInput4 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'" name="type[]" value="'+type+'"/>');
  					var newInput5 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'" name="size[]" value="'+size+'"/>');
  					var newInput6 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'" name="YouHui[]" value="'+YouHui+'"/>');
  					var newInput7 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'" name="oldPrice[]" value="'+oldPrice+'"/>');
  					var newInput8 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'" name="nowPrice[]" value="'+nowPrice+'"/>');
  					var newInput9 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'" name="goodsSum[]" value="'+goodsSum+'"/>');
  					var newInput10 = $('<input type="hidden" sid="'+sid+'" id="'+gid+'" name="goodsNum[]" value="'+goodsNum+'"/>');
  					// var arr =['gid'=>gid,'gpic'=>gpic,'gname'=>gname,'type'=>type,'size=>'size,'YouHui'=>YouHui,'oldPrice'=>oldPrice,'nowPrice'=>nowPrice,'goodsNum'=>goodsNum,'goodsSum'=>goodsSum];
  				
  					$('#postform').append(newInput1);
  					$('#postform').append(newInput2);
  					$('#postform').append(newInput3);
  					$('#postform').append(newInput4);
  					$('#postform').append(newInput5);
  					$('#postform').append(newInput6);
  					$('#postform').append(newInput7);
  					$('#postform').append(newInput8);
  					$('#postform').append(newInput9);
  					$('#postform').append(newInput10);

  					//找到当前商品的隐藏域 存入该商品信息
  					// $('#'+gid+'').attr('value',arr);
  					// console.log($('form'));
  				}
}