
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 首页幻灯广告 </title>
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
<div id="urHere">DouPHP 管理中心<b>></b><strong>首页幻灯广告</strong> </div>   <div class="mainBox imgModule">
    <h3>首页幻灯广告</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
    <tr>
       <th>添加幻灯</th>
       <th>幻灯列表</th>
     </tr>
     <tr>
      <td width="350" valign="top">
       <form action="show.php?rec=insert" method="post" enctype="multipart/form-data">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableOnebor">
         <tr>
          <td><b>幻灯名称</b>
<input type="text" name="show_name" value="" size="20" class="inpMain" />
          </td>
         </tr>
         <tr>
          <td><b>幻灯图片</b>
           <input type="file" name="show_img" class="inpFlie" />          </td>
         </tr>
         <tr>
          <td><b>链接地址</b>
           <input type="text" name="show_link" value="" size="40" class="inpMain" />
          </td>
         </tr>
         <tr>
          <td><b>排序</b>
<input type="text" name="sort" value="50" size="20" class="inpMain" />
          </td>
         </tr>
         <tr>
          <td>
                      <input type="hidden" name="token" value="79db104d" />
           <input name="submit" class="btn" type="submit" value="提交" />
          </td>
         </tr>
        </table>
       </form>
      </td>
      <td valign="top">
       <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableOnebor">
        <tr>
         <td width="100">幻灯名称</td>
         <td></td>
         <td width="50" align="center">排序</td>
         <td width="80" align="center">操作</td>
        </tr>
                <tr>
         <td><a href="http://www.weiqing.com/data/slide/20130514acunau.jpg" target="_blank"><img src="http://www.weiqing.com/data/slide/thumb/20130514acunau_thumb.jpg" width="100" /></a></td>
         <td>广告图片01</td>
         <td align="center">1</td>
         <td align="center"><a href="editshow.html?id=1">编辑</a> | <a href="delshow.htmlid=1">删除</a></td>
        </tr>
                <tr>
         <td><a href="http://www.weiqing.com/data/slide/20130514rjzqdt.jpg" target="_blank"><img src="http://www.weiqing.com/data/slide/thumb/20130514rjzqdt_thumb.jpg" width="100" /></a></td>
         <td>广告图片02</td>
         <td align="center">2</td>
         <td align="center"><a href="editshow.html?id=2">编辑</a> | <a href="delshow.htmlid=2">删除</a></td>
        </tr>
                <tr>
         <td><a href="http://www.weiqing.com/data/slide/20130514xxsctt.jpg" target="_blank"><img src="http://www.weiqing.com/data/slide/thumb/20130514xxsctt_thumb.jpg" width="100" /></a></td>
         <td>广告图片03</td>
         <td align="center">3</td>
         <td align="center"><a href="editshow.html?id=3">编辑</a> | <a href="delshow.htmlid=3">删除</a></td>
        </tr>
                <tr>
         <td><a href="http://www.weiqing.com/data/slide/20130523hiqafl.jpg" target="_blank"><img src="http://www.weiqing.com/data/slide/thumb/20130523hiqafl_thumb.jpg" width="100" /></a></td>
         <td>广告图片04</td>
         <td align="center">4</td>
         <td align="center"><a href="editshow.html?id=4">编辑</a> | <a href="delshow.htmlid=4">删除</a></td>
        </tr>
               </table>
      </td>
     </tr>
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