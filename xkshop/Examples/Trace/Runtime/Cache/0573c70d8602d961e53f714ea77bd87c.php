<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>ThinkPHP示例：页面Trace</title>
<link rel='stylesheet' type='text/css' href='__PUBLIC__/Css/common.css'>
 </head>
 <script language="JavaScript">
 <!--
	function showTrace(){
		document.getElementById('trace_info').innerHTML = document.getElementById('think_page_trace').innerHTML;
		document.getElementById('think_page_trace').innerHTML = '';
	}
 //-->
 </script>
 <body onload="showTrace()">
 <div class="main">
 <h2>ThinkPHP示例之：页面Trace</h2>
调试模式会自动开启页面Trace信息显示，也可以单独设置显示页面Trace。显示效果如下所示~<br/>
页面Trace的模板文件位于：<span style="color:#FF6600">THINK_PATH.'/Tpl/PageTrace.tpl.php'</span>。
<div id="trace_info"></div>
 <table cellpadding=2 cellspacing=2>
 <tr>
 <td></td>
	<td>示例源码<br/>控制器IndexAction类<br/><?php highlight_file(LIB_PATH.'Action/IndexAction.class.php'); ?></td>
 </tr>
 </table>
</div>
 </body>
</html>