<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 自定义导航栏 </title>
<meta name="Copyright" content="Douco Design." />
<link href="css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<script type="text/javascript" src="js/jquery.tab.js"></script>
</head>
<body>
<div id="dcWrap">
    @include('public/common');
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>自定义导航栏</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="addnav.html" class="actionBtn">添加导航</a>自定义导航栏</h3>
        <div class="navList">
     <ul class="tab">
      <li><a href="nav.php" class="selected">主导航</a></li>
      <li><a href="nav.php?type=top">顶部</a></li>
      <li><a href="nav.php?type=bottom">底部</a></li>
     </ul>
     <table width="100%" border="0" cellpadding="10" cellspacing="0" class="tableBasic">
      <tr>
       <th width="113" align="center">导航名称</th>
       <th align="left">链接地址</th>
       <th width="80" align="center">排序</th>
       <th width="120" align="center">操作</th>
      </tr>
            <tr>
       <td> 公司简介</td>
       <td>http://www.weiqing.com/page.php?id=1</td>
       <td align="center">10</td>
       <td align="center"><a href="nav.php?rec=edit&id=1">编辑</a> | <a href="nav.php?rec=del&id=1">删除</a></td>
      </tr>
            <tr>
       <td>- 企业荣誉</td>
       <td>http://www.weiqing.com/page.php?id=2</td>
       <td align="center">10</td>
       <td align="center"><a href="nav.php?rec=edit&id=2">编辑</a> | <a href="nav.php?rec=del&id=2">删除</a></td>
      </tr>
            <tr>
       <td>- 发展历程</td>
       <td>http://www.weiqing.com/page.php?id=3</td>
       <td align="center">20</td>
       <td align="center"><a href="nav.php?rec=edit&id=3">编辑</a> | <a href="nav.php?rec=del&id=3">删除</a></td>
      </tr>
            <tr>
       <td>- 联系我们</td>
       <td>http://www.weiqing.com/page.php?id=4</td>
       <td align="center">30</td>
       <td align="center"><a href="nav.php?rec=edit&id=4">编辑</a> | <a href="nav.php?rec=del&id=4">删除</a></td>
      </tr>
            <tr>
       <td> 产品中心</td>
       <td>http://www.weiqing.com/product_category.php</td>
       <td align="center">20</td>
       <td align="center"><a href="nav.php?rec=edit&id=5">编辑</a> | <a href="nav.php?rec=del&id=5">删除</a></td>
      </tr>
            <tr>
       <td>- 电子数码</td>
       <td>http://www.weiqing.com/product_category.php?id=1</td>
       <td align="center">10</td>
       <td align="center"><a href="nav.php?rec=edit&id=10">编辑</a> | <a href="nav.php?rec=del&id=10">删除</a></td>
      </tr>
            <tr>
       <td>-- 智能手机</td>
       <td>http://www.weiqing.com/product_category.php?id=4</td>
       <td align="center">1</td>
       <td align="center"><a href="nav.php?rec=edit&id=22">编辑</a> | <a href="nav.php?rec=del&id=22">删除</a></td>
      </tr>
            <tr>
       <td>-- 平板电脑</td>
       <td>http://www.weiqing.com/product_category.php?id=5</td>
       <td align="center">2</td>
       <td align="center"><a href="nav.php?rec=edit&id=23">编辑</a> | <a href="nav.php?rec=del&id=23">删除</a></td>
      </tr>
            <tr>
       <td>- 家居百货</td>
       <td>http://www.weiqing.com/product_category.php?id=2</td>
       <td align="center">20</td>
       <td align="center"><a href="nav.php?rec=edit&id=11">编辑</a> | <a href="nav.php?rec=del&id=11">删除</a></td>
      </tr>
            <tr>
       <td>- 母婴用品</td>
       <td>http://www.weiqing.com/product_category.php?id=3</td>
       <td align="center">30</td>
       <td align="center"><a href="nav.php?rec=edit&id=12">编辑</a> | <a href="nav.php?rec=del&id=12">删除</a></td>
      </tr>
            <tr>
       <td> 文章中心</td>
       <td>http://www.weiqing.com/article_category.php</td>
       <td align="center">30</td>
       <td align="center"><a href="nav.php?rec=edit&id=6">编辑</a> | <a href="nav.php?rec=del&id=6">删除</a></td>
      </tr>
            <tr>
       <td>- 公司动态</td>
       <td>http://www.weiqing.com/article_category.php?id=1</td>
       <td align="center">10</td>
       <td align="center"><a href="nav.php?rec=edit&id=13">编辑</a> | <a href="nav.php?rec=del&id=13">删除</a></td>
      </tr>
            <tr>
       <td>- 行业新闻</td>
       <td>http://www.weiqing.com/article_category.php?id=2</td>
       <td align="center">20</td>
       <td align="center"><a href="nav.php?rec=edit&id=14">编辑</a> | <a href="nav.php?rec=del&id=14">删除</a></td>
      </tr>
            <tr>
       <td> 营销网络</td>
       <td>http://www.weiqing.com/page.php?id=6</td>
       <td align="center">40</td>
       <td align="center"><a href="nav.php?rec=edit&id=7">编辑</a> | <a href="nav.php?rec=del&id=7">删除</a></td>
      </tr>
            <tr>
       <td> 企业荣誉</td>
       <td>http://www.weiqing.com/page.php?id=2</td>
       <td align="center">50</td>
       <td align="center"><a href="nav.php?rec=edit&id=15">编辑</a> | <a href="nav.php?rec=del&id=15">删除</a></td>
      </tr>
            <tr>
       <td> 人才招聘</td>
       <td>http://www.weiqing.com/page.php?id=5</td>
       <td align="center">60</td>
       <td align="center"><a href="nav.php?rec=edit&id=8">编辑</a> | <a href="nav.php?rec=del&id=8">删除</a></td>
      </tr>
            <tr>
       <td> 联系我们</td>
       <td>http://www.weiqing.com/page.php?id=4</td>
       <td align="center">70</td>
       <td align="center"><a href="nav.php?rec=edit&id=9">编辑</a> | <a href="nav.php?rec=del&id=9">删除</a></td>
      </tr>
           </table>
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