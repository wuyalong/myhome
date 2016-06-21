<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 网站管理员 </title>
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
<div id="urHere">DouPHP 管理中心<b>></b><strong></strong>用户管理</div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3>
        <?php /*<a href="addmanager.html?rec=add" class="actionBtn">添加管理员</a>*/ ?>
        用户管理
    </h3>
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <th width="30" align="center">编号</th>
      <th align="left">用户名称</th>
      <th align="center">密码</th>
      <th align="center">昵称</th>
      <th align="center">电话</th>
      <th align="center">邮箱</th>
      <th align="center">积分</th>
      <th align="center">操作</th>
     </tr>
            <?php foreach($user_arr as $u): ?>
      <tr>
      <td align="center"><?php echo e($u->user_id); ?></td>
      <td><?php echo e($u->user_name); ?></td>
      <td align="center"><?php echo e($u->user_password); ?></td>
      <td align="center"><?php echo e($u->user_nickname); ?></td>
      <td align="center"><?php echo e($u->user_phone); ?></td>
      <td align="center"><?php echo e($u->user_email); ?></td>
      <td align="center"><span onclick="sp(<?php echo e($u->user_id); ?>)" id="s_<?php echo e($u->user_id); ?>"><?php echo e($u->user_score); ?></span>
      <input type="text" value="<?php echo e($u->user_score); ?>" style="display:none;width:50px" id="i_<?php echo e($u->user_id); ?>"  onblur="ob(<?php echo e($u->user_id); ?>)"/>
      </td>
      <td align="center"><a href="addmanager.htnameml?rec=edit&id=1">编辑</a> | <a href="manager.html?rec=del&id=1">删除</a></td>
     </tr>
            <?php endforeach; ?>
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
<script>
    function sp(user_id){
        $("#s_"+user_id).hide();
        $("#i_"+user_id).show().focus();
    }
    function ob(user_id){
        var ptn = /^\d+$/;
        //alert(user_id);
        var s_name = $("#s_"+user_id).html();
        var name = $("#i_"+user_id).val();
        if(!ptn.test(name)){
            alert("请填写数字");
            $("#i_"+user_id).hide();
            $("#s_"+user_id).show().html(s_name);
        }else{
            //alert(name);
            if(s_name == name){
                $("#i_"+user_id).hide();
                $("#s_"+user_id).show().html(name);
            }else{
                $.ajax({
                    type:'get',
                    url:'upscore',
                    data:'user_id='+user_id+'&&score='+name,
                    success:function(){

                    }
                });
                $("#i_"+user_id).hide();
                $("#s_"+user_id).show().html(name);
            }
        }

    }
</script>