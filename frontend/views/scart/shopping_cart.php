<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="public/css/css.css" rel="stylesheet" type="text/css" />
<link href="public/css/common.css" rel="stylesheet" tyle="text/css" />
<link href="public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<script src="public/js/jquery.min.1.8.2.js" type="text/javascript"></script>
<script src="public/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="public/js/common_js.js" type="text/javascript"></script>
<script src="public/js/footer.js" type="text/javascript"></script>
<!--[if IE 7]>
<link rel="stylesheet" href="public/css/font-awesome-ie7.min.css">
<![endif]-->
<title>购物车</title>
<script type="text/javascript">
//页面加载事件
$(document).ready(function () {	
   //全选
   $("#CheckedAll").click(function () {
	   if (this.checked) {                 //如果当前点击的多选框被选中
		   $('input[type=checkbox][name=checkitems]').attr("checked", true);
	   } else {
		   $('input[type=checkbox][name=checkitems]').attr("checked", false);
	   }
   });
   $('input[type=checkbox][name=checkitems]').click(function () {
	   var flag = true;	  
	   	$('input[type=checkbox][name=checkitems]').each(function () {
		   if (!this.checked) {
			   flag = false;
		}
	   });

	   if (flag) {
		   $('#CheckedAll').attr('checked', true);
	   } else {
		   $('#CheckedAll').attr('checked', false);
	   }

   });
   //输出值
   $("#send").click(function () {
	      if($("input[type='checkbox'][name='checkitems']:checked").attr("checked")){
			   var str = "你是否要删除选中的商品：\r\n";
			   var num = '';
			   $('input[type=checkbox][name=checkitems]:checked').each(function () {
				   num += ","+$(this).val();

			   })
			   num = num.substr(1,num.length-1);
			   //alert(num);
			  $.ajax({
	 			url:"index.php?r=scart/cartdel",
				data:'cart_id='+num,
				//dataType:'json',
				success:function(msg){
					if(msg==1){
						location.href="index.php?r=scart/index";
						//$("#c"+cart_id).remove();
					}
					else{
						alert('删除失败');
					}
				}
			 })
	   			

		  }
		  else{
			   var str = "你未选中任何商品，请选择后再操作！"; 
			   alert(str);
       	  }
	   	    
   });
})
</script>
</head>
<!--宽度1000的购物车样式-->
<body>
<!-- <div id="top">
  <div class="carts">
    <div class="Collection"><em></em><a href="#">收藏我们</a></div>
	<div class="hd_top_manu clearfix">
	  <ul class="clearfix">
	   <li class="hd_menu_tit zhuce" data-addclass="hd_menu_hover">欢迎光临本店！<a href="#" class="red">[请登录]</a> 新用户<a href="#" class="red">[免费注册]</a></li>
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">我的订单</a></li> 
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="#">购物车(<b>0</b>)</a> </li>
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">联系我们</a></li>
	   <li class="hd_menu_tit list_name" data-addclass="hd_menu_hover"><a href="#" class="hd_menu">客户服务</a>
	    <div class="hd_menu_list">
		   <ul>
		    <li><a href="#">常见问题</a></li>
			<li><a href="#">在线退换货</a></li>
		    <li><a href="#">在线投诉</a></li>
			<li><a href="#">配送范围</a></li>
		   </ul>
		</div>	   
	   </li>
	  </ul>
	</div>
  </div>
</div> -->
<div id="shop_cart">
 <div id="header">
  <div class="logo">
  <a href="#"><img src="public/images/logo.png" /></a>
  <div class="phone">
   免费咨询热线:<span class="telephone">400-3454-343</span>
  </div>
  </div>
  <div class="Search">
    <p><input name="" type="text"  class="text"/><input name="" type="submit" value=""  class="Search_btn"/></p>
	<p class="Words"><a href="#">苹果</a><a href="#">香蕉</a><a href="#">菠萝</a><a href="#">西红柿</a><a href="#">橙子</a><a href="#">苹果</a></p>
 </div>
</div>
<!--提示购物步骤-->
<div>
	<h1 style="text-align:center;color:green">恭喜您,成功将商品加入购物车!</h1>
</div>
 <div class="prompt_step">
  <img src="public/images/cart_step_01.png" />
 </div>
 <!--购物车商品-->
 <div class="Shopping_list">
  <div class="title_name">
    <ul>
	<li class="checkbox">&nbsp;</li>
	<li class="name">商品名称</li>
	<li class="scj">样式</li>
	<li class="bdj">本店价</li>
	<li class="sl">购买数量</li>
	<li class="xj">小计</li>
	<LI class="cz">操作</LI>
  </ul>
 </div>
  <div class="shopping">
  <form  method="post" action="">
 <table class="table_list">
 <!-- 开始 -->
 <?php if(!empty($cartinfo)){?>
 <?php foreach($cartinfo as $k=>$v){?>
 <?php if(isset($_COOKIE['cartinfo'])){?>
   <tr class="tr" id="c<?php echo $k?>">
   <?php }else{?>
   <tr class="tr" id="c<?php echo $v['sku_id']?>">
   <?php }?>
   <td class="checkbox"><input name="checkitems" type="checkbox" value="<?php echo $v['sku_id']?>"/><?php echo $v['sku_id']?></td>
  
    <td class="name">
	  <div class="img"><a href="index.php?r=pdetail/index&sku_id=<?php echo $v['sku_id']?>"><img src="public/images/<?php echo $v['sku_img']?>"/></a>
	 </div>
	  <div class="p_name">
	  <a href="index.php?r=pdetail/index&sku_id=<?php echo $v['sku_id']?>">
	  <?php echo str_replace(' ','',$v['goods_name'])?>		
	  </a>
	  </div>
	</td>	
	<td class="scj sp">
	<?php echo $v['cart_size']?>
	|
	<?php echo $v['cart_color']?>
	</td>
	<td class="bgj sp">￥<span id="cp<?php echo $v['sku_id']?>"><?php echo $v['cart_goodsprice']?></span></td>
	<td class="sl">
	<!-- 数量加减 -->
	    <div class="Numbers">
		  <a href="javascript:void(0);" class="jian" onclick="amount_reduce(<?php echo $v['sku_id']?>)">-</a>
		  <input id="number<?php echo $v['sku_id']?>" name="number" type="text" value="<?php echo $v['cart_num']?>" class="number_text">
		  <a href="javascript:void(0);" class="jia" onclick="amount_add(<?php echo $v['sku_id']?>)">+</a>
		 </div>
	</td>
	<td class="xj" id="xj<?php echo $v['sku_id']?>">￥<span id='xj'><span id='x<?php echo $v['sku_id']?>'><?php echo $v['cart_total']?></span></span></td>
	<td class="cz">
	<?php if(isset($_COOKIE['cartinfo'])){?>
	 <p><a href="javascript:;" onclick="delcart(<?php echo $k?>)">删除</a><P>
	<!--  <p><a href="#">收藏该商品</a></p> -->
	<?php }else{?>
	 <p><a href="javascript:;" onclick="delcart(<?php echo $v['sku_id']?>)">删除</a><P>
	<!--  <p><a href="#">收藏该商品</a></p> -->
	<?php }?>
	</td>
   </tr>
  <?php }?>  
   <?php }?>  
  <!-- 结束  -->
 </table>
 <!-- 分页 -->
	<div class="Paging_style" style="margin-top:24px;">
	 <?php echo $data['first']?>
     <?php echo $data['up_page']?>
	 <?php echo $data['down_page']?>
	 <?php echo $data['last']?>
	 <span class="f_l f6" style="margin-right:10px;">共 <b><?php echo $data['page_num']?></b> 页</span>
    </div>
 <div class="sp_Operation">
  <div class="select-all">
  <div class="cart-checkbox">
  <input type="checkbox"   id="CheckedAll" name="toggle-checkboxes" class="jdcheckbox" clstag="clickcart">全选
  </div>
  <div class="operation">
  
  <a href="javascript:void(0);" id="send">删除选中的商品</a>
  
  </div> 
    </div>     
	 <!--结算-->
	<div class="toolbar_right">
    <div class="p_Total">
	  <span class="text">商品总价：￥</span><span class="price sumPrice" id='zj'>0.00元</span>
	</div>
<!-- 	<div class="Discount"><span class="text">以节省：</span><span class="price">5.1</span></div>
 --><div class="btn">
 <!-- 结算 -->
	 <a class="cartsubmit" href="javascript:;" onclick="checkout('checkout')"></a>
	 <a class="continueFind" href="./"></a>
	</div>
  </div>
  </div>
   </form>
 </div>

</div>
<!--底部样式-->
 <!-- <div class="footer help-box  clearfix">
   <div class="right_footer clearfix">
   <dl>
    <dt><em class="icon_img"></em>购物指南</dt>
    <dd><a href="#">怎样购物</a></dd>
    <dd><a href="#">积分政策</a></dd>
    <dd><a href="#">会员优惠</a></dd>
    <dd><a href="#">订单状态</a></dd>
    <dd><a href="#">产品信息</a></dd>
    <dd><a href="#">怎样购物</a></dd>
   </dl>
   <dl>
    <dt><em class="icon_img"></em>配送方式</dt>
    <dd><a href="#">快递资费及送达时间</a></dd>
    <dd><a href="#">快递覆盖地区查询</a></dd>
    <dd><a href="#">验货与签收</a></dd>
    <dd><a href="#">订单状态</a></dd>
    <dd><a href="#">产品信息</a></dd>
    <dd><a href="#">怎样购物</a></dd>
   </dl>
   <dl>
    <dt><em class="icon_img"></em>配送方式</dt>
    <dd><a href="#">货到付款</a></dd>
    <dd><a href="#">支付宝</a></dd>
    <dd><a href="#">财付通</a></dd>
    <dd><a href="#">网银支付</a></dd>
    <dd><a href="#">银联支付</a></dd>
   </dl>
   <dl>
    <dt><em class="icon_img"></em>售后服务</dt>
    <dd><a href="#">退换货原则</a></dd>
    <dd><a href="#">退换货要求与运费规则</a></dd>
    <dd><a href="#">退换货流程</a></dd>
   </dl>
   <dl>
    <dt><em class="icon_img"></em>关于我们</dt>
    <dd><a href="#">关于我们</a></dd>
    <dd><a href="#">友情链接</a></dd>
    <dd><a href="#">媒体报道</a></dd>
    <dd><a href="#">新闻动态</a></dd>
    <dd><a href="#">企业文化</a></dd>
 
   </dl>
  </div>
  <div class="Copyright">
  <p><a href="#">关于我们</a> | <a href="#">隐私申明</a> | <a href="#">成为供应商</a> | <a href="#">茶叶</a> | <a href="#">博客</a> |<a href="#">友情链接</a> | <a href="#">网站地图</a></p>
  <p>Copyright 2010 - 2015 巴山雀舌 四川巴山雀舌茗茶实业有限公司 zuipin.cn All Rights Reserved </p>
  <p>川ICP备10200063号-1</p>
   <a href="#" class="return_img"></a>
 </div>
 </div>
 -->
<!--结束-->
</div>
</body>
<script>
	/**
	 * 单删购物车商品
	 * @return {[type]} [description]
	 */
	function delcart(cart_id){
		//alert(cart_id);
		//$("#c"+cart_id).remove();
		$.ajax({
	 			url:"index.php?r=scart/cartdel",
				data:'cart_id='+cart_id,
				//dataType:'json',
				success:function(msg){
					if(msg==1){
						$("#c"+cart_id).remove();
					}
					else{
						alert('删除失败');
					}
				}
			})
	}
	/**
	 * 结算购物车
	 */
	function checkout(checkout){
		var arr='';
		var items=document.getElementsByName('checkitems');		
		for(i in items){
			if(items[i].checked==true){
				arr+=','+items[i].value;				
			}									
		}
		id=arr.substr(1,arr.length-1);
		if(id==''){
			var str = "你未选中任何商品，请选择后再操作！"; 
		 	alert(str);
		}
		else{
			location.href="index.php?r=orders/selorder&sku_id="+id+'&checkout='+checkout;			
		}
	}
</script>
<script>
	/**
	 * 数量加减
	 */
	//定义一个全局数量
	
	//数量递减
	 function amount_reduce(sku_id){
	 	var buy_num=$("#number"+sku_id).val();
	 	if(buy_num<=1){
	 		buy_num=1;
	 		//alert(buy_num);
	 	}
	 	else{
	 		buy_num=parseInt(buy_num)-1;
	 		$("#number"+sku_id).val(buy_num);
	 	}
	 	price=$("#cp"+sku_id).html();
	 	tot=parseInt(buy_num)*parseInt(price);
	 	$("#x"+sku_id).html(tot);
	 }
	//数量递增
	 function amount_add(sku_id){	
	 var buy_num=$("#number"+sku_id).val(); 	
	 	if(buy_num>=100){
	 		buy_num=100;	 		
	 	}
	 	else{
	 		buy_num=parseInt(buy_num)+1;
	 		num=$("#number"+sku_id).val(buy_num);
	 	}
	 	price=$("#cp"+sku_id).html();
	 	tot=parseInt(buy_num)*parseInt(price);
	 	$("#x"+sku_id).html(tot);	 	 	
	 }
</script>
<script>
/**
 * 点击复选框计算总金额
 */
$('input[type=checkbox][name=checkitems]').click(function(){
	var item=document.getElementsByName('checkitems');		
	var ids=new Array();
	var j=0;
		for(i in item){
			if(item[i].checked==true){
				ids[j]=item[i].value;
				j++;	
			}									
		}
		ids=ids.join(',');
		$.ajax({
 			url:"index.php?r=scart/cartzj",
			data:'ids='+ids,
			dataType:'json',
			success:function(msg){
				if(msg.num==1){
					var zj=0;
					zj=parseInt($("#x"+ids).html());
					//alert($("#x"+ids).html());
					$("#zj").html(zj);
				}
				if(msg.num==0){
					$("#zj").html('0.00');
				}
				if(msg.num!=1&&msg.num!=0){
					var zj=0;
					for($k=0;$k<msg.num;$k++){
						zj+=parseInt($("#x"+msg.infos[$k]).html());						
					}
					$("#zj").html(zj);
				}

			}
		})
	})
//点全选计算总金额
	$("#CheckedAll").click(function () {
		var item=document.getElementsByName('checkitems');		
		var ids=new Array();
		var j=0;
		if (this.checked==false){
			$('input[type=checkbox][name=checkitems]').attr("checked", false);
			$("#zj").html('0.00');
		}
		else{
			for(i=0;i<item.length;i++){
					ids[j]=item[i].value;
					j++;	
			}
			ids=ids.join(',');
			$.ajax({
 			url:"index.php?r=scart/cartzj",
			data:'ids='+ids,
			dataType:'json',
			success:function(msg){
				if(msg.num==1){
					var zj=0;
					zj=parseInt($("#x"+ids).html());
					//alert($("#x"+ids).html());
					$("#zj").html(zj);
				}
				if(msg.num==0){
					$("#zj").html('0.00');
				}
				if(msg.num!=1&&msg.num!=0){
					var zj=0;
					for($k=0;$k<msg.num;$k++){
						zj+=parseInt($("#x"+msg.infos[$k]).html());						
					}
					$("#zj").html(zj);
				}

			}
		})

		}
		
	})				
</script>
</html>
