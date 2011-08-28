<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>ThinkPHP示例：表单提交验证</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/common.css" /><script type="text/javascript" src="__PUBLIC__/Js/Base.js"></script><script type="text/javascript" src="__PUBLIC__/Js/prototype.js"></script><script type="text/javascript" src="__PUBLIC__/Js/mootools.js"></script><script type="text/javascript" src="__PUBLIC__/Js/Ajax/ThinkAjax.js"></script>
 </head>
 <body><script language="JavaScript">
 <!--
	function add(){
		ThinkAjax.sendForm('form1','__URL__/insert',complete,'result');
	}

	function complete(data,status){
		if (status==1)
		{
		// 更新列表
		$('list').innerHTML +=
		'<div class="result" style=\'font-weight:normal;background:#A6FF4D\'><div style="border-bottom:1px dotted silver">'+data.title+'  ['+data.email+data.create_time+']</div><div class="content">'+data.content+'</div></div>';
		}
	}
	function checkTitle(){
		ThinkAjax.send('__URL__/checkTitle','ajax=1&title='+$('title').value,'','result');
	}
	function fleshVerify(){
	//重载验证码
	var timenow = new Date().getTime();
	document.getElementById('verifyImg').src= '__URL__/verify/'+timenow;
	}
 //-->
 </script>
 <div class="main">
 <h2>ThinkPHP示例之：表单提交验证</h2>
本示例是表单提交验证处理，提交的时候增加了验证码？防止机器人添加数据。

   <form id="form1" method='post' action="__URL__/insert">
 <table cellpadding=2 cellspacing=2>
  <tr>
	<td colspan="2"><div id="result" class="none result" style="font-family:微软雅黑,Tahoma;letter-spacing:2px"></div></td>
 </tr>

 <tr>
	<td class="tRight" width="12%">标题：</td>
	<td class="tLeft" ><input type="text" name="title" id="title" style="height:23px" class="large bLeft"> <input type="button" value="检 查" class="small button" onClick="checkTitle()"></td>
 </tr>
  <tr>
	<td class="tRight" >邮箱：</td>
	<td class="tLeft" ><input type="text" name="email" style="height:23px" class="huge bLeft"></td>
 </tr>
 <tr>
	<td class="tRight tTop" >内容：</td>
	<td><textarea name="content" class="huge bLeft" rows="8" cols="25"></textarea></td>
 </tr>
  <tr>
	<td class="tRight tTop" >验证码：</td>
	<td><input name="verify" type="text" style="height:23px; width:60px;"  />&nbsp;<img id="verifyImg" SRC="__URL__/verify/" BORDER="0" ALT="" align="absmiddle">&nbsp;<a href="javascript:fleshVerify()">刷新验证码</a></td>
 </tr>
 <tr>
	<td><input type="hidden" name="ajax" value="1"></td>
	<td><input type="button" onClick="add()" class="button" value="提 交"> <input type="reset" class="button" value="清 空"></td>
 </tr>

 <tr>
 <td></td>
	<td><hr></td>
 </tr>
  <tr>
  <td></td>
	<td> <div id="list" >
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><div class="result" style='font-weight:normal;<?php if(($odd)  ==  "1"): ?>background:#ECECFF<?php endif; ?>'><div style="border-bottom:1px dotted silver"><?php echo ($vo["title"]); ?>  [<?php echo ($vo["email"]); ?> <?php echo (date('Y-m-d H:i:s',$vo["create_time"])); ?>]</div>
	<div class="content"><?php echo (nl2br($vo["content"])); ?></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div></td>
  </tr>
 <tr>
 <td></td>
	<td><hr> 示例源码<br/>控制器IndexAction类<br/><?php highlight_file(LIB_PATH.'Action/IndexAction.class.php'); ?><br/>模型FormModel类<br/><?php highlight_file(LIB_PATH.'Model/FormModel.class.php'); ?></td>
 </tr>
 </table>
   </form>
</div>
 </body>
</html>