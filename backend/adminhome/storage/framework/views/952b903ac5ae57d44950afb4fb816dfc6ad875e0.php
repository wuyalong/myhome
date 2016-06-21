<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 添加商品 </title>
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
<div id="urHere">DouPHP 管理中心<b>></b><strong>添加SKU</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="goods_list" class="actionBtn">商品列表</a>添加SKU</h3>
    <form action="gaddskuok" method="post" enctype="multipart/form-data">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="90" align="right">颜色</td>
       <td>
        <input type="text" value="绚丽黑" placeholder="不能为空" required oninvalid="setCustomValidity('请填写颜色');" oninput="setCustomValidity('');" name="sku_color" size="80" class="inpMain" />
       </td>
      </tr>
      <?php /*<tr>*/ ?>
       <?php /*<td align="right">商品分类</td>*/ ?>
       <?php /*<td>*/ ?>
        <?php /*<select name="sort_id">*/ ?>
        <?php /*<?php foreach($types as $t): ?>*/ ?>
                <?php /*<option value="<?php echo e($t->sort_id); ?>"><?php echo e($t->sort_name); ?></option>*/ ?>
        <?php /*<?php endforeach; ?>*/ ?>
        <?php /*</select>*/ ?>
       <?php /*</td>*/ ?>
      <?php /*</tr>*/ ?>
      <tr>
       <td align="right">商品大小</td>
       <td>
           <select name="sku_size" id="sku_size">
               <?php for($i=1.0; $i<=3.0; $i=$i+0.1): ?>
               <option value="<?php echo e($i); ?>米"><?php echo e($i); ?>米</option>
               <?php endfor; ?>
           </select>
       </td>
      </tr>

           <input type="hidden" name="goods_id" value="<?php echo e($goods_id); ?>"/>

         <tr>
             <td align="right">本店商品价格</td>
             <td>
                 <input type="text" pattern="[0-9]{1,}" required name="sku_price" value="4321" size="40" class="inpMain" />
             </td>
         </tr>
         <tr>
             <td align="right">市场价格</td>
             <td>
                 <input type="text" pattern="[0-9]{1,}" required name="sku_marketprice" value="5678" size="40" class="inpMain" />
             </td>
         </tr>
         <tr>
             <td align="right">该商品数量</td>
             <td>
                 <input type="text" pattern="[0-9]{1,}" required name="sku_num" value="125" size="40" class="inpMain" />
             </td>
         </tr>
      <tr>
       <td align="right">商品附图</td>
       <td>
        <input type="file" required name="sku_img" size="38" class="inpFlie" />
        <img src="images/icon_no.png"></td>
      </tr>
      <tr>
       <td></td>
       <td>

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




