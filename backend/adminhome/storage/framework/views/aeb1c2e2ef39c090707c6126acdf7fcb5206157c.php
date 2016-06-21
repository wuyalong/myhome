
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 商品列表 </title>
<meta name="Copyright" content="Douco Design." />
<link href="css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<script type="text/javascript" src="js/jquery.autotextarea.js"></script>
</head>
<body>
<div id="dcWrap">
    <?php echo $__env->make('public/common', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>订单列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3>
            <?php /*<a href="addproduct" class="actionBtn add">添加商品</a> */ ?>
            订单列表</h3>
    <div class="filter">
    <form action="order_sou" method="post">
     <?php /*<select name="t_id" id="t_id">*/ ?>
      <?php /*<option value="0">未分类</option>*/ ?>
         <?php /*<?php foreach($type as $t): ?>*/ ?>
            <?php /*<option value="<?php echo e($t['t_id']); ?>"><?php echo e(str_repeat('-', $t['level']).$t['t_name']); ?></option>*/ ?>
         <?php /*<?php endforeach; ?>*/ ?>
      <?php /*</select>*/ ?>
        请输入商品名称：
     <input name="goods_name" type="text" class="inpMain" value="" size="20" />
        请输入收货人：
        <input name="address_name" type="text" class="inpMain" value="" size="20" />
     <input class="btnGray" type="submit" value="筛选" />
    </form>
    <span>
    <a class="btnGray" href="product.php?rec=re_thumb">更新商品缩略图</a>
        <a class="btnGray" href="product.php?rec=sort">开始筛选首页商品</a>
    </span>
    </div>
        <div id="list">
    <form name="action" method="post" action="product.php?rec=action">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
        <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
        <th width="22" align="center">编号</th>
          <th align="left">商品图片</th>
        <th align="left">商品规格</th>
        <th align="left">购买时间</th>
        <th align="left">快递方式</th>
        <th align="left">支付方式</th>
        <th align="left">购买数量</th>
        <th align="left">商品总价</th>
        <th align="left">订单状态</th>
        <th align="left">收货人</th>
        <th align="left">收货地址</th>
        <th align="left">收货电话</th>
        <th width="80" align="center">操作</th>
      </tr>
        <?php /*开始*/ ?>
        <?php foreach($arr as $v): ?>
        <tr>
        <td align="center"><input type="checkbox" name="checkbox[]" value="<?php echo e($v->order_id); ?>" /></td>
        <td align="center"><?php echo e($v->order_id); ?></td>
        <td style="width:200px"><img src="../../../frontend/web/public/images/<?php echo e($v->sku_img); ?>" alt="该图片在前台yii框架中" width="90px"/></td>
        <td style="width:200px"><a href="#"><?php echo e($v->goods_name); ?>,<?php echo e($v->sku_color); ?>,<?php echo e($v->sku_size); ?></a></td>
        <td style="width:200px"><a href="#"><?php echo e($v->sku_addtime); ?></a></td>
        <td style="width:200px"><a href="#"><?php echo e($v->order_state); ?></a></td>
        <td style="width:200px"><a href="#"><?php echo e($v->order_ways); ?></a></td>
        <td style="width:200px"><a href="#"><?php echo e($v->order_numbers); ?></a></td>
        <td style="width:200px"><a href="#">
                <?php if($v->order_status == '1'): ?>
                未发货(<a href="javascript:;" onclick="dou(<?php echo e($v->order_id); ?>)">点击发货</a>)
                <?php elseif($v->order_status == '2'): ?>
                已发货
                <?php elseif($v->order_status == '3'): ?>
                已退款
                <?php elseif($v->order_status == '4'): ?>
                已收货
                <?php endif; ?>
            </a></td>
        <td style="width:200px"><a href="#">错误<?php echo e($v->order_total); ?></a></td>
        <td style="width:200px"><a href="#"><?php echo e($v->address_name); ?></a></td>
        <td style="width:200px"><a href="#"><?php echo e($v->address_place); ?></a></td>
        <td style="width:200px"><a href="#"><?php echo e($v->address_phone); ?></a></td>
        <td align="center">
                  <?php /*<a href="product.php?rec=edit&id=15">编辑</a> | */ ?>
            <a href="orderdel?order_id=<?php echo e($v->order_id); ?>">删除</a>
        </td>
      </tr>
        <?php endforeach; ?>
        <?php /*停*/ ?>

          </table>
    <div class="action">
     <select name="action" onchange="douAction()">
      <option value="0">请选择...</option>
      <option value="del_all">删除</option>
      <option value="category_move">移动分类至</option>
     </select>
     <select name="new_cat_id" style="display:none">
      <option value="0">未分类</option>
                  <option value="1"> 电子数码</option>
                        <option value="4">- 智能手机</option>
                        <option value="5">- 平板电脑</option>
                        <option value="2"> 家居百货</option>
                        <option value="3"> 母婴用品</option>
                 </select>
     <input name="submit" class="btn" type="submit" value="执行" />
    </div>
    </form>
    </div>
    <div class="clear"></div>
    <div class="pager">总计 15 个记录，共 1 页，当前第 1 页 | <a href="order?page=1">第一页</a> <a href="order?page=<?php echo e($up); ?>">上一页</a>
        <a href="order?page=<?php echo e($down); ?>">下一页</a> <a href="order?page=<?php echo e($last); ?>">最末页</a></div>               </div>
 </div>
 <div class="clear"></div>
<div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
  <ul>
   版权所有 © 2013-2015 漳州豆壳网络科技有限公司，并保留所有权利。
  </ul>
 </div>
</div><!-- dcFooter 结束 -->
<div class="clear"></div> </div>
<script type="text/javascript">

onload = function()
{
 document.forms['action'].reset();
}

function douAction()
{
 var frm = document.forms['action'];
 frm.elements['new_cat_id'].style.display = frm.elements['action'].value == 'category_move' ? '' : 'none';
}

</script>
</body>
</html>
<script>
    function dou(order_id){
        $.ajax({
            type:'get',
            url:'uporder',
            data:'order_id='+order_id,
            success:function(msg){
                //alert(msg);
                //history.go(n)
                window.location.reload()
            }
        })
    }

</script>
