<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 添加分类 </title>
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
<div id="urHere">DouPHP 管理中心<b>></b><strong>添加分类</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="type" class="actionBtn">商品分类</a>添加分类</h3>
    <form action="addtypeok" method="post">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="80" align="right">分类名称</td>
       <td>
        <input type="text" required name="t_name" size="40" class="inpMain" />
       </td>
      </tr>
      <?php /*<tr>*/ ?>
       <?php /*<td align="right">别名</td>*/ ?>
       <?php /*<td>*/ ?>
        <?php /*<input type="text" name="unique_id" value="" size="40" class="inpMain" />*/ ?>
       <?php /*</td>*/ ?>
      <?php /*</tr>*/ ?>
      <tr>
       <td align="right">上级分类</td>
       <td>
        <select name="t_id">
                <?php foreach($arr as $t): ?>
                     <option value="<?php echo e($t['t_id']); ?>"><?php echo e(str_repeat('-', $t['level']).$t['t_name']); ?></option>
                <?php endforeach; ?>
      </select>
       </td>
      </tr>
      <?php /*<tr>*/ ?>
       <?php /*<td align="right">关键字</td>*/ ?>
       <?php /*<td>*/ ?>
        <?php /*<input type="text" name="keywords" value="" size="40" class="inpMain" />*/ ?>
       <?php /*</td>*/ ?>
      <?php /*</tr>*/ ?>
      <?php /*<tr>*/ ?>
       <?php /*<td align="right">简单描述</td>*/ ?>
       <?php /*<td>*/ ?>
        <?php /*<textarea name="description" cols="60" rows="4" class="textArea"></textarea>*/ ?>
       <?php /*</td>*/ ?>
      <?php /*</tr>*/ ?>
      <?php /*<tr>*/ ?>
       <?php /*<td align="right">排序</td>*/ ?>
       <?php /*<td>*/ ?>
        <?php /*<input type="text" name="sort" value="50" size="5" class="inpMain" />*/ ?>
       <?php /*</td>*/ ?>
      <?php /*</tr>*/ ?>
      <tr>
       <td></td>
       <td>
        <input type="hidden" name="token" value="b9439ae8" />
        <input type="hidden" name="cat_id" value="" />
        <input name="submit" class="btn" type="submit" value="提交" />
       </td>
      </tr>
     </table>
    </form>
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