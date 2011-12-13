<?php
if(!isset($GLOBALS['_vars'])) $GLOBALS['_vars'] = array(); 
$fields = array();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $cfg_soft_lang; ?>">
<title>采集内容管理</title>
<link href="css/base.css" rel="stylesheet" type="text/css">
<script language="javascript">
//获得选中文件的文件名
function getCheckboxItem()
{
	var allSel="";
	if(document.form1.aids.value) return document.form1.aids.value;
	for(i=0;i<document.form1.aids.length;i++)
	{
		if(document.form1.aids[i].checked)
		{
			if(allSel=="")
				allSel=document.form1.aids[i].value;
			else
				allSel=allSel+"`"+document.form1.aids[i].value;
		}
	}
	return allSel;	
}
function ReSel()
{
	for(i=0;i<document.form1.aids.length;i++)
	{
		if(document.form1.aids[i].checked) document.form1.aids[i].checked = false;
		else document.form1.aids[i].checked = true;
	}
}
function DelSel()
{
	var nid = getCheckboxItem();
	if(nid=="")
	{
		alert("请选择节点!\r\n");
		return ;
	}
	location.href = "co_do.php?dopost=clear&ids="+nid;
}
</script>
</head>
<body background='images/allbg.gif' leftmargin='0' topmargin='0'>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#D6D6D6" align="center">
  <tr align="center" bgcolor="#FBFCE2"> 
    <td width="8%">选择</td>
    <td width="35%">内容标题</td>
    <td width="18%">所属节点</td>
    <td width="18%">获取日期</td>
    <td width="10%">是否下载</td>
    <td width="8%">来源</td>
  </tr>
  <form name='form1'>
  <?php
$atts = array();
$atts['tagname'] = 'datalist';
$blockValue = $this->refObj->GetArcList($atts,$this->refObj,$fields); 
if(is_array($blockValue)){
foreach( $blockValue as $key=>$fields )
{
?>
  <tr align="center" bgcolor="#FFFFFF"> 
    <td><input type='checkbox' name='aids' value='<?php echo $fields['aid']; ?>' class='np'></td>
    <td><a href='co_view.php?aid=<?php echo $fields['aid']; ?>''><?php echo $fields['title']; ?></a></td>
    <td><?php echo $fields['notename']; ?></td>
    <td><?php echo GetDateMk($fields['dtime']); ?></td>
    <td><?php echo IsDownLoad($fields['isdown']); ?></td>
    <td><a href='<?php echo $fields['url']; ?>' target='_blank'>[源网址]</a></td>
  </tr>
 <?php
}
}?>
</form>
  <tr> 
    <td height="28" colspan="6" bgcolor="#FCFDF7">&nbsp;
    <input type="button" name="b7" value="反选" class="coolbg np" style="width:40" onClick="ReSel();">　　　　
    <input type="button" name="b5" value="删除所选网址" class="coolbg np" style="width:100" onClick="DelSel();">　
    </td>
  </tr>
  <tr> 
    <td height="30" colspan="6" bgcolor="#FCFDF7" align="center">
    <?php
$atts = array();
$atts['tagname'] = 'pagelist';
$atts['listsize'] = '5';
 echo $this->refObj->GetPageList($atts,$this->refObj,$fields); 
?>

    </td>
  </tr>
</table>
</body>
</html>