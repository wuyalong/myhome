
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 设置模板 </title>
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
<div id="urHere">DouPHP 管理中心<b>></b><strong>设置模板</strong> </div>   <div id="theme" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
   <h3>设置模板</h3>
   <ul class="tab">
    <li><a href="theme.php" class="selected">管理模板</a></li>
    <li><a href="theme.php?rec=install">获取更多模板</a></li>
   </ul>
      <div class="enable">
    <h2>当前启用的模板</h2>
    <p><img src="http://www.weiqing.com/theme/default/images/screenshot.png" width="280" height="175"></p>
    <dl>
     <dt>DouPHP Default</dt>
     <dd>版本：1.0</dd>
     <dd>作者：<a href="http://www.douco.com/" target="_blank">DouCo Co.,Ltd.</a></dd>
     <dd>简介：DouPHP 默认模板</dd>
    </dl>
   </div>
   <div class="themeList">
    <h2>可用模板</h2>
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