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
<div id="urHere">DouPHP 管理中心<b>></b><strong>添加商品</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="product.html" class="actionBtn">商品列表</a>添加商品</h3>
    <form action="addproductok" method="post" enctype="multipart/form-data">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="90" align="right">商品名称</td>
       <td>
        <input type="text" value="天堂柜" placeholder="不能为空" required oninvalid="setCustomValidity('请填写商品名称');" oninput="setCustomValidity('');" name="goods_name" value="" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">商品分类</td>
       <td>
        <select name="sort_id">
        <?php foreach($types as $t): ?>
                <option value="<?php echo e($t->sort_id); ?>"><?php echo e($t->sort_name); ?></option>
        <?php endforeach; ?>
        </select>
       </td>
      </tr>
      <tr>
       <td align="right">商品价格</td>
       <td>
        <input type="text"  pattern="[0-9]{1,}" required oninvalid="setCustomValidity('请按照格式填写');" name="goods_price" value="9000" size="40" class="inpMain" />
       </td>
      </tr>
         <tr>
             <td align="right">商品货号</td>
             <td>
                 <input type="text" required oninvalid="setCustomValidity('请填写商品货号');" name="goods_num" value="EC009007" size="40" class="inpMain" />
             </td>
         </tr>
         <tr>
       <td align="right" valign="top">商品描述</td>
       <td>
        <!-- KindEditor -->

			<link rel="stylesheet" href="js/kindeditor/themes/default/default.css" />
			<link rel="stylesheet" href="js/kindeditor/plugins/code/prettify.css" />
			<script charset="utf-8" src="js/kindeditor/kindeditor.js"></script>
			<script charset="utf-8" src="js/kindeditor/lang/zh_CN.js"></script>
			<script charset="utf-8" src="js/kindeditor/plugins/code/prettify.js"></script>
        <script>
					KindEditor.ready(function(K) {
						var editor1 = K.create('textarea[name="content"]', {
							cssPath : 'js/kindeditor/plugins/code/prettify.css',
							uploadJson : 'js/kindeditor/php/upload_json.php',
							fileManagerJson : 'js/kindeditor/php/file_manager_json.php',
							allowFileManager : true,
							afterCreate : function() {
								var self = this;
								K.ctrl(document, 13, function() {
									self.sync();
									K('form[name=example]')[0].submit();
								});
								K.ctrl(self.edit.doc, 13, function() {
									self.sync();
									K('form[name=example]')[0].submit();
								});
							}
						});
						prettyPrint();
					});
			</script>
        <!-- /KindEditor -->
        <textarea id="content" required name="goods_desc" style="width:500px;height:100px;" class="textArea"></textarea>
       </td>
      </tr>
      <tr>
       <td align="right">商品图</td>
       <td>
        <input type="file" required name="goods_img" size="38" class="inpFlie" />
        <img src="images/icon_no.png"></td>
      </tr>
      <tr>
       <td align="right">是否热卖</td>
       <td>
           <select name="goods_hot">
               <option value="1">是</option>
               <option value="0"> 否</option>
           </select>
       </td>
      </tr>
         <tr>
             <td align="right">是否精品</td>
             <td>
                 <select name="goods_good">
                     <option value="1">是</option>
                     <option value="0"> 否</option>
                 </select>
             </td>
         </tr>
         <tr>
             <td align="right">是否新品</td>
             <td>
                 <select name="goods_new">
                     <option value="1">是</option>
                     <option value="0"> 否</option>
                 </select>
             </td>
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
