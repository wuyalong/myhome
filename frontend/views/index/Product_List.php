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
<link rel="stylesheet" href="assets/public/css/font-awesome-ie7.min.css">
<![endif]-->
<title>产品列表</title>
</head>

<body>
<!--顶部样式-->
<!--<div id="top">-->
<!--  <div class="top">-->
<!--    <div class="Collection"><em></em><a href="#">收藏我们</a></div>-->
<!--	<div class="hd_top_manu clearfix">-->
<!--	  <ul class="clearfix">-->
<!--	   <li class="hd_menu_tit zhuce" data-addclass="hd_menu_hover">欢迎光临本店！<a href="#" class="red">[请登录]</a> 新用户<a href="#" class="red">[免费注册]</a></li>-->
<!--	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">我的订单</a></li> -->
<!--	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="#">购物车(<b>0</b>)</a> </li>-->
<!--	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">联系我们</a></li>-->
<!--	   <li class="hd_menu_tit list_name" data-addclass="hd_menu_hover"><a href="#" class="hd_menu">客户服务</a>-->
<!--	    <div class="hd_menu_list">-->
<!--		   <ul>-->
<!--		    <li><a href="#">常见问题</a></li>-->
<!--			<li><a href="#">在线退换货</a></li>-->
<!--		    <li><a href="#">在线投诉</a></li>-->
<!--			<li><a href="#">配送范围</a></li>-->
<!--		   </ul>-->
<!--		</div>	   -->
<!--	   </li>-->
<!--	  </ul>-->
<!--	</div>-->
<!--  </div>-->
<!--</div>-->
<!--logo和搜索样式-->
<div id="header"  class="header">
    <div class="logo">
        <a href="#"><img src="public/images/logo.png" /></a>
        <div class="phone">
            免费咨询热线:<span class="telephone">433-8333-123</span>
        </div>
    </div>
    <div class="Search">
        <p><input name="" type="text"  class="text"/><input name="" type="submit" value=""  class="Search_btn"/></p>
        <p class="Words">
            <?php foreach($sorts as $v){?>
                <a href="index.php?r=plist/index&id=<?php echo $v['sort_id']?>"><?php echo $v['sort_name']?></a>
            <?php }?>
        </p>
    </div>
</div>
<!--菜单栏样式-->
<!--导航栏样式-->
<div id="Menu" class="clearfix">
    <div class="Menu_style">

<!--内页样式-->
 <div class="Inside_pages">
    <div class="products">
    <!--当前位置（面包屑）-->
     <div class="Location_link">
     <em></em><a href="#">产品中心</a>  &lt;   <a href="#">家具中心</a>
     </div>
    <!--筛选条件样式-->
      <div class="products_Select marginbottom">
       <div class="Filter">
  <div class="Filter_list clearfix">
   <div class="Filter_title"><span>品牌：</span></div>
   <div class="Filter_Entire"><a href="#">全部</a></div>
   <div class="p_f_name">
    <a href="#" title="莱家/Loacker">莱家/Loacker </a>
	<a href="#" title="">丽芝士/Richeese</a>
	<a href="#" title="白色恋人/SHIROI KOIBITO ">白色恋人/SHIROI KOIBITO </a>
	<a href="#">爱时乐/Astick </a>
	<a href="#">利葡/LiPO </a>
	<a href="#">友谊牌/Tipo </a>
	<a href="#"> 三立/SANRITSU  </a>
	<a href="#"> 皇冠/Danisa </a>
	<a href="#">丹麦蓝罐/Kjeldsens</a>
   </div>
  </div>
  <div class="Filter_list clearfix">
  <div class="Filter_title"><span>风格：</span></div>
  <div class="Filter_Entire"><a href="#">全部</a></div>
  <div class="p_f_name">
  <a href="#">袋装</a><a href="#">盒装</a><a href="#">罐装</a><a href="#">礼盒装</a><a href="#">散装(称重)</a>
  </div>
  </div>
  <div class="Filter_list clearfix">
  <div class="Filter_title"><span>价格：</span></div>
  <div class="Filter_Entire"><a href="#">全部</a></div>
  <div class="p_f_name">
    <a href="#">0-50</a><a href="#">50-150</a><a href="#">150-500</a><a href="#">500-1000</a><a href="#">1000以上</a>
  </div>
  </div>
 </div>
      </div>
      <!--产品列表列表-->
      <div class="products_list marginbottom">
      <div class="Sorted">
  <div class="Sorted_style">
   <a href="#" class="on">综合<i class="icon-angle-down"></i></a>
   <a href="#">销量<i class="icon-angle-down"></i></a>
   <a href="#">价格<i class="icon-angle-down"></i></a>
   <a href="#">新品<i class="icon-angle-down"></i></a>
   </div>
   <!--页数-->
   <div class="s_Paging">
   <span> 1/12</span>
   <a href="#" class="on">&lt;</a>
   <a href="#">&gt;</a>
   </div>
 </div>
 <!--产品列表样式-->
 <div class="p_list  clearfix">
   <ul>
       <?php foreach($arr as $v){?>
    <li class="gl-item">
	<div class="Borders">
	 <div class="img"><a href="index.php?r=pdetail/index&goods_id=<?php echo $v['goods_id']?>"><img src="public/images/<?php echo $v['goods_img'] ?>" style="width:220px;height:220px"/></a></div>
	 <div class="name"><a href="index.php?r=pdetail/index&goods_id=<?php echo $v['goods_id']?>"><?php echo $v['goods_name']?></a></div>
     <div class="Price">商城价：<b>¥<?php echo $v['goods_price']?></b><span>原价：<em><?php echo $v['goods_marketprice']?></em></span></div>
	 <div class="Review">已有<a href="#">2345</a>评论</div>
	 <div class="p-operate">

	  <a href="javascript:void(0)" onclick="join(<?php echo $v['sku_id']?>)" class="p-o-btn Collect"><em></em>收藏</a>
	  <a href="index.php?r=" class="p-o-btn shop_cart"><em></em>加入购物车</a>
	 </div>
	 </div>
	</li>
       <?php }?>

<!--	<li class="gl-item">-->
<!--	<div class="Borders">-->
<!--	 <div class="img"><a href="Product_Detailed.html"><img src="Products/p-1.webp.jpg" style="width:220px;height:220px"/></a></div>-->
<!--	 <div class="name"><a href="Product_Detailed.html">【2015年新茶】巴山雀舌60克毛尖马克罐（绿）</a></div>-->
<!--      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>-->
<!--	 <div class="Review">已有<a href="#">2345</a>评论</div>-->
<!--	 <div class="p-operate">-->
<!--	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>-->
<!--	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>-->
<!--	 </div>-->
<!--	 </div>-->
<!--	</li>-->
<!--	<li class="gl-item">-->
<!--	<div class="Borders">-->
<!--	 <div class="img"><a href="Product_Detailed.html"><img src="Products/p-1.webp.jpg" style="width:220px;height:220px"/></a></div>-->
<!--	 <div class="name"><a href="Product_Detailed.html">【2015年新茶】巴山雀舌60克毛尖马克罐（绿）</a></div>-->
<!--      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>-->
<!--	 <div class="Review">已有<a href="#">2345</a>评论</div>-->
<!--	 <div class="p-operate">-->
<!--	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>-->
<!--	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>-->
<!--	 </div>-->
<!--	 </div>-->
<!--	</li>-->
<!--	<li class="gl-item">-->
<!--	<div class="Borders">-->
<!--	 <div class="img"><a href="#"><img src="Products/p-1.webp.jpg" style="width:220px;height:220px"/></a></div>-->
<!--	 <div class="Price"><b>¥89</b><span>[¥49.01/500g]</span></div>-->
<!--	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>-->
<!--	 <div class="Review">已有<a href="#">2345</a>评论</div>-->
<!--	 <div class="p-operate">-->
<!--	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>-->
<!--	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>-->
<!--	 </div>-->
<!--	 </div>-->
<!--	</li>-->
<!--	<li class="gl-item">-->
<!--	<div class="Borders">-->
<!--	 <div class="img"><a href="#"><img src="Products/p-1.webp.jpg" style="width:220px;height:220px"/></a></div>-->
<!--	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>-->
<!--      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>-->
<!--	 <div class="Review">已有<a href="#">2345</a>评论</div>-->
<!--	 <div class="p-operate">-->
<!--	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>-->
<!--	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>-->
<!--	 </div>-->
<!--	 </div>-->
<!--	</li>-->
<!--	<li class="gl-item">-->
<!--	<div class="Borders">-->
<!--	 <div class="img"><a href="#"><img src="Products/p-3.webp.jpg" style="width:220px;height:220px"/></a></div>-->
<!--	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>-->
<!--      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>-->
<!--	 <div class="Review">已有<a href="#">2345</a>评论</div>-->
<!--	 <div class="p-operate">-->
<!--	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>-->
<!--	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>-->
<!--	 </div>-->
<!--	 </div>-->
<!--	</li>-->
<!--	<li class="gl-item">-->
<!--	<div class="Borders">-->
<!--	 <div class="img"><a href="#"><img src="Products/p-3.webp.jpg" style="width:220px;height:220px"/></a></div>-->
<!--	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>-->
<!--      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>-->
<!--	 <div class="Review">已有<a href="#">2345</a>评论</div>-->
<!--	 <div class="p-operate">-->
<!--	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>-->
<!--	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>-->
<!--	 </div>-->
<!--	 </div>-->
<!--	</li>-->
<!--	<li class="gl-item">-->
<!--	<div class="Borders">-->
<!--	 <div class="img"><a href="#"><img src="Products/p-3.webp.jpg" style="width:220px;height:220px"/></a></div>-->
<!--	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>-->
<!--      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>-->
<!--	 <div class="Review">已有<a href="#">2345</a>评论</div>-->
<!--	 <div class="p-operate">-->
<!--	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>-->
<!--	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>-->
<!--	 </div>-->
<!--	 </div>-->
<!--	</li>-->
<!--	<li class="gl-item">-->
<!--	<div class="Borders">-->
<!--	 <div class="img"><a href="#"><img src="Products/p-3.webp.jpg" style="width:220px;height:220px"/></a></div>-->
<!--	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>-->
<!--      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>-->
<!--	 <div class="Review">已有<a href="#">2345</a>评论</div>-->
<!--	 <div class="p-operate">-->
<!--	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>-->
<!--	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>-->
<!--	 </div>-->
<!--	 </div>-->
<!--	</li>-->
<!--	<li class="gl-item">-->
<!--	<div class="Borders">-->
<!--	 <div class="img"><a href="#"><img src="Products/p-4.webp.jpg" style="width:220px;height:220px"/></a></div>-->
<!--	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>-->
<!--      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>-->
<!--	 <div class="Review">已有<a href="#">2345</a>评论</div>-->
<!--	 <div class="p-operate">-->
<!--	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>-->
<!--	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>-->
<!--	 </div>-->
<!--	 </div>-->
<!--	</li>-->
<!--	<li class="gl-item">-->
<!--	<div class="Borders">-->
<!--	 <div class="img"><a href="#"><img src="Products/p-4.webp.jpg" style="width:220px;height:220px"/></a></div>-->
<!--	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>-->
<!--      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>-->
<!--	 <div class="Review">已有<a href="#">2345</a>评论</div>-->
<!--	 <div class="p-operate">-->
<!--	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>-->
<!--	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>-->
<!--	 </div>-->
<!--	 </div>-->
<!--	</li>-->
<!--	<li class="gl-item">-->
<!--	<div class="Borders">-->
<!--	 <div class="img"><a href="#"><img src="Products/p-4.webp.jpg" style="width:220px;height:220px"/></a></div>-->
<!--	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>-->
<!--      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>-->
<!--	 <div class="Review">已有<a href="#">2345</a>评论</div>-->
<!--	 <div class="p-operate">-->
<!--	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>-->
<!--	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>-->
<!--	 </div>-->
<!--	 </div>-->
<!--	</li>-->
<!--	<li class="gl-item">-->
<!--	<div class="Borders">-->
<!--	 <div class="img"><a href="#"><img src="Products/p-4.webp.jpg" style="width:220px;height:220px"/></a></div>-->
<!--	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>-->
<!--      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>-->
<!--	 <div class="Review">已有<a href="#">2345</a>评论</div>-->
<!--	 <div class="p-operate">-->
<!--	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>-->
<!--	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>-->
<!--	 </div>-->
<!--	 </div>-->
<!--	</li>-->
<!--	<li class="gl-item">-->
<!--	<div class="Borders">-->
<!--	 <div class="img"><a href="#"><img src="Products/p-5.webp.jpg" style="width:220px;height:220px"/></a></div>-->
<!--	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>-->
<!--      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>-->
<!--	 <div class="Review">已有<a href="#">2345</a>评论</div>-->
<!--	 <div class="p-operate">-->
<!--	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>-->
<!--	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>-->
<!--	 </div>-->
<!--	 </div>-->
<!--	</li>-->
<!--	<li class="gl-item">-->
<!--	<div class="Borders">-->
<!--	 <div class="img"><a href="#"><img src="Products/p-5.webp.jpg" style="width:220px;height:220px"/></a></div>-->
<!--	 <div class="name"><a href="#">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a></div>-->
<!--      <div class="Price">商城价：<b>¥89</b><span>原价：<em>123</em></span></div>-->
<!--	 <div class="Review">已有<a href="#">2345</a>评论</div>-->
<!--	 <div class="p-operate">-->
<!--	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>-->
<!--	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>-->
<!--	 </div>-->
<!--	 </div>-->
<!--	</li>-->
</ul>

 </div>
      </div>
      <!--分页样式-->
    <div class="Paging marginbottom">
    
    </div>
    </div>    
      <!--友情链接-->
       <div class="Links">
        <div class="link_title">友情链接</div>
        <div class="link_address"><a href="#">四川茶叶协会</a>  <a href="#">链接地址</a>  <a href="#">链接地址</a>  <a href="#">链接地址 </a>   <a href="#">链接地址</a> <a href="#">链接地址</a> <a href="#">链接地址</a></div>
       </div>
 </div>
 <!--底部样式-->
<!--<div class="footer">-->
<!-- <div class="streak"></div>-->
<!-- <div class="footerbox clearfix">-->
<!--  <div class="left_footer">-->
<!--   <div class="img"><img src="public/images/img_33.png" /></div>-->
<!--   <div class="phone">-->
<!--    <h2>服务咨询电话</h2>-->
<!--    <p class="Numbers">400-3455-334</p>-->
<!--   </div>-->
<!--  </div>-->
<!--  <div class="right_footer">-->
<!--   <dl>-->
<!--    <dt><em class="icon_img"></em>购物指南</dt>-->
<!--    <dd><a href="#">怎样购物</a></dd>-->
<!--    <dd><a href="#">积分政策</a></dd>-->
<!--    <dd><a href="#">会员优惠</a></dd>-->
<!--    <dd><a href="#">订单状态</a></dd>-->
<!--    <dd><a href="#">产品信息</a></dd>-->
<!--    <dd><a href="#">怎样购物</a></dd>-->
<!--   </dl>-->
<!--   <dl>-->
<!--    <dt><em class="icon_img"></em>配送方式</dt>-->
<!--    <dd><a href="#">快递资费及送达时间</a></dd>-->
<!--    <dd><a href="#">快递覆盖地区查询</a></dd>-->
<!--    <dd><a href="#">验货与签收</a></dd>-->
<!--    <dd><a href="#">订单状态</a></dd>-->
<!--    <dd><a href="#">产品信息</a></dd>-->
<!--    <dd><a href="#">怎样购物</a></dd>-->
<!--   </dl>-->
<!--   <dl>-->
<!--    <dt><em class="icon_img"></em>配送方式</dt>-->
<!--    <dd><a href="#">货到付款</a></dd>-->
<!--    <dd><a href="#">支付宝</a></dd>-->
<!--    <dd><a href="#">财付通</a></dd>-->
<!--    <dd><a href="#">网银支付</a></dd>-->
<!--    <dd><a href="#">银联支付</a></dd>-->
<!--   </dl>-->
<!--   <dl>-->
<!--    <dt><em class="icon_img"></em>售后服务</dt>-->
<!--    <dd><a href="#">退换货原则</a></dd>-->
<!--    <dd><a href="#">退换货要求与运费规则</a></dd>-->
<!--    <dd><a href="#">退换货流程</a></dd>-->
<!--   </dl>-->
<!--   <dl>-->
<!--    <dt><em class="icon_img"></em>关于我们</dt>-->
<!--    <dd><a href="#">关于我们</a></dd>-->
<!--    <dd><a href="#">友情链接</a></dd>-->
<!--    <dd><a href="#">媒体报道</a></dd>-->
<!--    <dd><a href="#">新闻动态</a></dd>-->
<!--    <dd><a href="#">企业文化</a></dd>-->
<!-- -->
<!--   </dl>-->
<!--  </div>-->
<!-- </div>-->
<!-- <div class="slogen">-->
<!--  <div class="footerbox clearfix ">-->
<!--  <ul class="wrap">-->
<!--	 <li>-->
<!--	  <a href="#"><img src="public/images/icon_img_02.png" data-bd-imgshare-binded="1"></a>-->
<!--	  <b>正品保证</b>-->
<!--	  <span>正品行货 放心选购</span>-->
<!--	 </li>-->
<!--	 <li><a href="#"><img src="public/images/icon_img_03.png" data-bd-imgshare-binded="2"></a>-->
<!--	  <b>满68元包邮</b>-->
<!--	  <span>购物满68元，免费快递</span>-->
<!--	 </li>-->
<!--	 <li>-->
<!--	  <a href="#"><img src="public/images/icon_img_04.png" data-bd-imgshare-binded="3"></a>-->
<!--	  <b>厂家直供</b>-->
<!--	  <span>价格更低，质量更可靠</span>-->
<!--	 </li>-->
<!--      <li>-->
<!--	  <a href="#"><img src="public/images/icon_img_05.png" data-bd-imgshare-binded="4"></a>-->
<!--	  <b>权威认证</b>-->
<!--	  <span>政府扶持单位，安全保证</span>-->
<!--	 </li>-->
<!--	</ul>-->
<!--  </div>-->
<!-- </div>-->
<!-- <div class="footerbox Copyright">-->
<!--  <p><a href="#">关于我们</a> | <a href="#">隐私申明</a> | <a href="#">成为供应商</a> | <a href="#">茶叶</a> | <a href="#">博客</a> |<a href="#">友情链接</a> | <a href="#">网站地图</a></p>-->
<!--  <p>Copyright 2010 - 2015 巴山雀舌 四川巴山雀舌茗茶实业有限公司 zuipin.cn All Rights Reserved </p>-->
<!--  <p>川ICP备10200063号-1</p>-->
<!--   <a href="#" class="return_img"></a>-->
<!-- </div>-->
<!--</div>-->
<!-- <!--右侧菜单栏购物车样式-->
<!--<div class="fixedBox">-->
<!--  <ul class="fixedBoxList">-->
<!--      <li class="fixeBoxLi user"><a href="#"> <span class="fixeBoxSpan"></span> <strong>用户</strong></a> </li>-->
<!--    <li class="fixeBoxLi cart_bd" style="display:block;" id="cartboxs">-->
<!--		<p class="good_cart">0</p>-->
<!--			<span class="fixeBoxSpan"></span> <strong>购物车</strong>-->
<!--			<div class="cartBox">-->
<!--       		<div class="bjfff"></div><div class="message">购物车内暂无商品，赶紧选购吧</div>    </div></li>-->
<!--    <li class="fixeBoxLi Service "> <span class="fixeBoxSpan"></span> <strong>客服</strong>-->
<!--      <div class="ServiceBox">-->
<!--        <div class="bjfffs"></div>-->
<!--        <dl onclick="javascript:;">-->
<!--		    <dt><img src="public/images/Service1.png"></dt>-->
<!--		       <dd><strong>QQ客服1</strong>-->
<!--		          <p class="p1">9:00-22:00</p>-->
<!--		           <p class="p2"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=123456&amp;site=DGG三端同步&amp;menu=yes">点击交谈</a></p>-->
<!--		          </dd>-->
<!--		        </dl>-->
<!--				<dl onclick="javascript:;">-->
<!--		          <dt><img src="public/images/Service1.png"></dt>-->
<!--		          <dd> <strong>QQ客服1</strong>-->
<!--		            <p class="p1">9:00-22:00</p>-->
<!--		            <p class="p2"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=123456&amp;site=DGG三端同步&amp;menu=yes">点击交谈</a></p>-->
<!--		          </dd>-->
<!--		        </dl>-->
<!--	          </div>-->
<!--     </li>-->
<!--	 <li class="fixeBoxLi code cart_bd " style="display:block;" id="cartboxs">-->
<!--			<span class="fixeBoxSpan"></span> <strong>微信</strong>-->
<!--			<div class="cartBox">-->
<!--       		<div class="bjfff"></div>-->
<!--			<div class="QR_code">-->
<!--			 <p><img src="public/images/erweim.jpg" width="150px" height="150px" style=" margin-top:10px;" /></p>-->
<!--			 <p>微信扫一扫，关注我们</p>-->
<!--			</div>		-->
<!--			</div>-->
<!--			</li>-->
<!---->
<!--    <li class="fixeBoxLi Home"> <a href="./"> <span class="fixeBoxSpan"></span> <strong>收藏</strong> </a> </li>-->
<!--    <li class="fixeBoxLi BackToTop"> <span class="fixeBoxSpan"></span> <strong>返回顶部</strong> </li>-->
<!--  </ul>-->
<!--</div>-->
</body>
</html>
<script>
    function join(id){
        //alert(id)
        $.ajax({
            type:'get',
            url:'index.php?r=plist/add_goods',
            data:'id='+id,
            success:function(msg){
               if(msg==1){
                   alert('收藏成功');
               }

            }
        })


    }
</script>
