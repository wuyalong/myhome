
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 商品分类 </title>
<meta name="Copyright" content="Douco Design." />
<link href="css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
</head>
<body>
<div id="dcWrap">
    <?php echo $__env->make('public/common', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
    <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>商品分类</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="addtype" class="actionBtn add">添加分类</a>商品分类</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
        <th width="120" align="left">分类名称</th>
        <?php /*<th align="left">别名</th>*/ ?>
        <?php /*<th align="left">简单描述</th>*/ ?>
       <?php /*<th width="60" align="center">排序</th>*/ ?>
        <th width="80" align="center">操作</th>
     </tr>
        <?php /*start*/ ?>
        <?php foreach($arr as $type): ?>
     <tr>
        <td align="left"> <a href="#">
            <?php if($type['level'] == 0): ?>
                <?php echo e($type['t_name']); ?>

            <?php elseif($type['level'] == 1): ?>
                - <?php echo e($type['t_name']); ?>

            <?php elseif($type['level'] == 2): ?>
                - - <?php echo e($type['t_name']); ?>

            <?php endif; ?>
            </a></td>
        <?php /*<td>digital</td>*/ ?>
        <?php /*<td>电子产品销售</td>*/ ?>
        <?php /*<td align="center">10</td>*/ ?>
        <td align="center"><a href="#">编辑</a> | <a href="#">删除</a></td>
     </tr>
        <?php endforeach; ?>
        <?php /*end*/ ?>
          </table>
           </div>
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
</body>
</html>