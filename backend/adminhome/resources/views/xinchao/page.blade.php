
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 单页面列表 </title>
<meta name="Copyright" content="Douco Design." />
<link href="css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
</head>
<body>
<div id="dcWrap">
    @include('public/common');
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>单页面列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="addpage.html" class="actionBtn">添加单页面</a>单页面列表</h3>
        <div class="page">
           <dl>
        <dt><strong>公司简介</strong><p>about</p></dt>
        <dd><a href="page.php?rec=edit&id=1">编辑</a> | <a href="page.php?rec=del&id=1">删除</a></dd>
      </dl>
           <dl class="child1">
        <dt><strong>企业荣誉</strong><p>honor</p></dt>
        <dd><a href="page.php?rec=edit&id=2">编辑</a> | <a href="page.php?rec=del&id=2">删除</a></dd>
      </dl>
           <dl class="child1">
        <dt><strong>发展历程</strong><p>history</p></dt>
        <dd><a href="page.php?rec=edit&id=3">编辑</a> | <a href="page.php?rec=del&id=3">删除</a></dd>
      </dl>
           <dl class="child1">
        <dt><strong>联系我们</strong><p>contact</p></dt>
        <dd><a href="page.php?rec=edit&id=4">编辑</a> | <a href="page.php?rec=del&id=4">删除</a></dd>
      </dl>
           <dl>
        <dt><strong>人才招聘</strong><p>job</p></dt>
        <dd><a href="page.php?rec=edit&id=5">编辑</a> | <a href="page.php?rec=del&id=5">删除</a></dd>
      </dl>
           <dl>
        <dt><strong>营销网络</strong><p>market</p></dt>
        <dd><a href="page.php?rec=edit&id=6">编辑</a> | <a href="page.php?rec=del&id=6">删除</a></dd>
      </dl>
         </div>
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