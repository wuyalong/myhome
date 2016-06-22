<div id="top">
    <div class="top">
        <div class="Collection"><em></em><a href="#">收藏我们</a></div>
        <div class="hd_top_manu clearfix">
            <ul class="clearfix">
                <input type="hidden" value="<?php $session = Yii::$app->session; echo  $session->get('name');?>" id="users"/>

                <li class="hd_menu_tit zhuce" data-addclass="hd_menu_hover"><b style="color:black"><?php $session = Yii::$app->session; echo  $session->get('name');?></b></span>欢迎光临本店！<a href="index.php?r=login/index" class="red">[请登录]</a> 新用户<a href="index.php?r=register/index" class="red">[免费注册]</a></li>
                <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="index.php?r=orders/selorder&checkout=myorder">我的订单</a></li>
                <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="javascript:cart()">购物车(<b><?php $session=yii::$app->session;
                            echo $session->get('num');?></b>)</a> </li>
                <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="">关于我们</a></li>

                </li>
                <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="index.php?r=index/layout">退出</a></li>
            </ul>
        </div>
    </div>
</div>

<?=$content?>

<div class="footer">
    <div class="streak"></div>
    <div class="footerbox clearfix">
        <div class="left_footer">
            <div class="img"><img src="public/images/bottomlogo.jpg" /></div>
            <div class="phone">
                <h2>服务咨询电话</h2>
                <p class="Numbers">600-0000-000</p>
            </div>
        </div>
        <div class="right_footer">
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
    </div>
    <div class="slogen">
        <div class="footerbox clearfix ">
            <ul class="wrap">
                <li>
                    <a href="#"><img src="public/images/icon_img_02.png" data-bd-imgshare-binded="1"></a>
                    <b>正品保证</b>
                    <span>正品行货 放心选购</span>
                </li>
                <li><a href="#"><img src="public/images/icon_img_03.png" data-bd-imgshare-binded="2"></a>
                    <b>满10000元包邮</b>
                    <span>购物满10000元，免费快递</span>
                </li>
                <li>
                    <a href="#"><img src="public/images/icon_img_04.png" data-bd-imgshare-binded="3"></a>
                    <b>厂家直供</b>
                    <span>价格更低，质量更可靠</span>
                </li>
                <li>
                    <a href="#"><img src="public/images/icon_img_05.png" data-bd-imgshare-binded="4"></a>
                    <b>权威认证</b>
                    <span>政府扶持单位，安全保证</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="footerbox Copyright">
        <p><a href="#">关于我们</a> | <a href="#">隐私申明</a> | <a href="#">成为供应商</a> | <a href="#">茶叶</a> | <a href="#">博客</a> |<a href="#">友情链接</a> | <a href="#">网站地图</a></p>
        <p>心巢商城欢迎您的购物</p>
        <p>北京八维研修学院</p>
        <a href="#" class="return_img"></a>
    </div>
</div>
<div class="fixedBox">-->
      <ul class="fixedBoxList">
          <li class="fixeBoxLi user">

    <input type="hidden" value="<?php $session = Yii::$app->session;echo $session->get('id')?>" id="u_id">
                  <a href="javascript:ucenter()" > <span class="fixeBoxSpan"></span> <strong>用户</strong></a>

               </li>
        <li class="fixeBoxLi cart_bd" style="display:block;" id="cartboxs">
    		<p class="good_cart">0</p>
    			<span class="fixeBoxSpan"></span> <strong>购物车</strong>
    			<div class="cartBox">
           		<div class="bjfff"></div><div class="message">购物车内暂无商品，赶紧选购吧</div>    </div></li>
        <li class="fixeBoxLi Service "> <span class="fixeBoxSpan"></span> <strong>客服</strong>
          <div class="ServiceBox">
            <div class="bjfffs"></div>
            <dl onclick="javascript:;">
    		    <dt><img src="public/images/Service1.png"></dt>
    		       <dd><strong>QQ客服1</strong>
    		          <p class="p1">9:00-22:00</p>
    		           <p class="p2"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=123456&amp;site=DGG三端同步&amp;menu=yes">点击交谈</a></p>
    		          </dd>
    		        </dl>
    				<dl onclick="javascript:;">
    		          <dt><img src="public/images/Service1.png"></dt>
    		          <dd> <strong>QQ客服1</strong>
    		            <p class="p1">9:00-22:00</p>
    		            <p class="p2"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=123456&amp;site=DGG三端同步&amp;menu=yes">点击交谈</a></p>
    		          </dd>
    		        </dl>
    	          </div>
         </li>
    	 <li class="fixeBoxLi code cart_bd " style="display:block;" id="cartboxs">
    			<span class="fixeBoxSpan"></span> <strong>微信</strong>
    			<div class="cartBox">
           		<div class="bjfff"></div>
    			<div class="QR_code">
    			 <p><img src="public/images/erweim.jpg" width="150px" height="150px" style=" margin-top:10px;" /></p>
    			 <p>微信扫一扫，关注我们</p>
    			</div>
    			</div>
    			</li>

        <li class="fixeBoxLi Home"> <a href="javascript:collect()> <span class="fixeBoxSpan"></span> <strong>收藏</strong> </a> </li>
        <li class="fixeBoxLi BackToTop"> <span class="fixeBoxSpan"></span> <strong>返回顶部</strong> </li>
      </ul>
    </div>
