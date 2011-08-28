<?php if (!defined('THINK_PATH')) exit();?>
<!--头部部分-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blog By ThinkPHP <?php echo (THINK_VERSION); ?></title>
<link href="../Public/css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../Public/js/common.js" /></script>
<script type="text/javascript" src="__PUBLIC__/Js/Base.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/prototype.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/mootools.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/Ajax/ThinkAjax.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/UbbEditor.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/Form/CheckForm.js"></script>
<script language="JavaScript">
<!--
//指定当前组模块URL地址
var URL = '__URL__';
var APP	 =	 '__APP__';
var PUBLIC = '__PUBLIC__';
ThinkAjax.updateTip = '<IMG SRC="../Public/images/loading2.gif" WIDTH="16" HEIGHT="16" BORDER="0" ALT="loading..." align="absmiddle"> 数据处理中...';
//-->
</script>
</head>

<body>
<div id="header">
    <div id="innerHeader">
      <div id="blogLogo"></div>
      <div class="blog-header">
        <div class="blog-title"><IMG SRC="../Public/images/logo.png"  style="border:1px solid gray" BORDER="0" ALT="" align="absmiddle"> <a href="http://thinkphp.cn">ThinkPHP</a></div>
        <div class="blog-desc">PHP最佳实践框架  [ Blog示例程序]</div>
      </div>
      <div id="menu">
        <ul>
        <li><a href="__APP__">日志首页</a></li>
        <li><a href="__APP__/Blog/add">撰写日志</a></li>
        <li><a href="http://thinkphp.cn">官方网站</a></li>
        </ul>
      </div>
    </div>
</div>

<!--中间部分-->

<div id="mainWrapper">
    <div id="content" class="content">

        <div id="innerContent">
            <SCRIPT LANGUAGE="JavaScript">
                <!--
                function addRow(){
                    curFileNum++;
                    rowsnum++;
                    var row=tbl.insertRow(-1);
                    //var td = arow.insertCell();
                    var cell = document.createElement("td");
                    cell.innerHTML='<div class="impBtn  fLeft" ><INPUT TYPE="file" id="file'+curFileNum+'" name="file'+ curFileNum +'" class="file  huge"></div><div class="fLeft hMargin"><IMG SRC="../Public/images/del.gif"  style="cursor:hand" onfocus="javascript:getObject(this)" onclick="deleteRow();" WIDTH="20" HEIGHT="20" BORDER="0" ALT="删除" align="absmiddle"></div> ';
                    cell.align="center"
                    row.appendChild(cell);
                    //addFileForm.num.value=rowsnum;
                }
                function deleteRow(){
                    if(tbl.rows.length>0){
                        tbl.deleteRow(rindex); //删除当前行
                        rowsnum--;
                    }else{
                        return;
                    }
                    rindex="";
                }
                function getObject(obj){
                    rindex=obj.parentElement.parentElement.rowIndex;/*当前行对象*/
                }

                function uploading(msg){
                    $('result').style.display = 'block';
                    $('result').innerHTML = '<IMG SRC="../Public/images/ajaxloading.gif" WIDTH="16" HEIGHT="16" BORDER="0" ALT="" align="absmiddle"> 文件上传中～';
                    return true;
                }
                function save(){
                    if ($('file1').value)
                    {
                        $('#form1').uploading();
                        $('upload').submit();
                    }else{
                      document.getElementById('editor').value = KE.html('editor');
                       ThinkAjax.sendForm('form1','__URL__/insert/',doComplete,'result');
                    }
                }
                function selectCategory(){
                    var result= PopModalWindow('__APP__/Category/treeSelect/',268,360);
                    if(typeof(result) == "undefined") return;
                    $('categoryName').value=result[0][0];
                    $('categoryId').value=result[0][1];
                }
                function uploadComplete(){
                    document.getElementById('editor').value = KE.html('editor');
                    ThinkAjax.sendForm('form1','__URL__/insert/',doComplete,'result');
                    $('upload').reset();
                }
                function doComplete(data,status){
                    if (status==1)
                    {
                        window.location.href='__URL__';
                        $('form1').reset();
                        $('upload').reset();
                        fleshVerify();
                    }
                }
                //-->
            </SCRIPT>
            <div class="commentbox">
                <TABLE cellpadding=3 cellspacing=3 width="680px" >
                    <TR>
                        <TD colspan="2"><div class="block-title"><H5><IMG SRC="../Public/images/modify.gif" WIDTH="20" HEIGHT="23" BORDER="0" ALT="" align="absmiddle"> 发表新的日志</H5></div>
                        </TD>
                    </TR>
                    <TR>
                        <TD colspan="2">
                            <form METHOD=POST id="form1" >
                                <TABLE cellpadding=3 cellspacing=3 style="font-size:14px">
                                    <TR>
                                        <TD colspan="2"><div id="result" class="result none"></div></TD>
                                    </TR>
                                    <TR>
                                        <TD class="tRight tTop" width="20%">标题：</TD>
                                        <TD class="tLeft"><INPUT TYPE="text" class="huge text" check='Require' warning="标题不能为空" NAME="title"></TD>
                                    </TR>
                                    <TR>
                                        <TD class="tRight tTop" >类别：</TD>
                                        <TD class="tLeft">
                                            <SELECT NAME="categoryId" class="medium text">
                                                <?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): ++$i;$mod = ($i % 2 )?><OPTION VALUE="<?php echo ($cate["id"]); ?>"><?php echo ($cate["title"]); ?><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </SELECT>
                                        </TD>
                                    </TR>
                                    <TR>
                                        <TD class="tRight tTop" >日志：</TD>
                                        <TD class="tLeft"><script type="text/javascript" src="__ROOT__/Public/Js/KindEditor/kindeditor.js"></script><script type="text/javascript"> KE.show({ id : 'editor'  ,urlType : "absolute"});</script><textarea id="editor" style="width:550px;height:245px" name="content" ></textarea></TD>
                                    </TR>
                                    <TR>
                                        <TD class="tRight tTop" >标签：</TD>
                                        <TD class="tLeft"><INPUT TYPE="text" class="huge text"  NAME="tags"> <span style="color:gray">用空格隔开多个标签</span></TD>
                                    </TR>
                                    <TR>
                                        <TD ></TD>
                                        <TD class="center">
                                            <div style="width:85%;color:gray">
                                                <INPUT TYPE="hidden" name="ajax" value="1">
                                                <div class="fLeft hMargin"><img id="verifyImg" src="__URL__/verify" align="absmiddle"> <INPUT TYPE="text" NAME="verify" class="text small"> 输入验证码 [ <A HREF="javascript:fleshVerify()">看不清？</A> ] </div>
                                                <div class="fLeft hMargin"><INPUT TYPE="reset" class="submit small"  value="重 置" ></div>
                                                <div class="fLeft hMargin"><INPUT TYPE="button" id="submit" value="发表日志" onclick="save()" class="submit small"></div>
                                            </div></TD>
                                    </TR>
                                </TABLE>
                            </form>

                            <form id="upload" METHOD=POST action="__URL__/upload/" onsubmit="return CheckForm(this);" enctype="multipart/form-data" target="iframeUpload">
                                <TABLE cellpadding=3 cellspacing=3 style="font-size:14px">
                                    <TR>
                                        <TD class="tRight tTop">附件：</TD>
                                        <TD class="tLeft tTop"><INPUT TYPE="hidden" name="ajax" value="1">
                                            <iframe name="iframeUpload" src="" width="350" height="35" frameborder=0  SCROLLING="no" style="display:none;" ></iframe>
                                            <INPUT TYPE="hidden" name="_uploadFileResult" value="result">
                                            <INPUT TYPE="hidden" name="_uploadFormId" value="upload">
                                            <INPUT TYPE="hidden" name="_uploadFileSize" value="-1">
                                            <INPUT TYPE="hidden" name="_uploadResponse" value="uploadComplete">
                                            <INPUT TYPE="hidden" name="_uploadFileVerify" value="<?php echo ($verify); ?>">
                                            <INPUT TYPE="hidden" name="_uploadFileType" value="jpeg,jpg,gif,png,doc,rar,zip,mp3,wav,flv,rm,asf">
                                            <INPUT TYPE="hidden" name="_uploadSavePath" value="<?php echo APP_PATH.'/../'.'Public/Uploads/';?>" >
                                            <INPUT TYPE="button" value="增 加" onclick="addRow();" class="submit small">
	                                        <INPUT TYPE="submit" value="上 传" onclick="uploading();" class="small submit" />
                                            <TABLE id='tbl' style="clear:both"></TABLE>
                                        </TD>
                                    </TR>
                                </TABLE>
                            </form>
                        </TD>
                    </TR>
                </TABLE>
            </div>
        </div>


        <SCRIPT LANGUAGE="JavaScript">
            <!--
            var curFileNum = 0;
            var rowsnum=0;  //记录行数
            var rindex="";       //列索引
            var tbl	=	$('tbl');
            addRow();
            //-->
        </SCRIPT>
<!-- 版权信息区域 -->
<div id="footer" class="footer" >
    <div id="innerFooter">Powered by ThinkPHP <?php echo constant("THINK_VERSION");?>| Template designed by <a target="_blank" href="http://www.topthink.com.cn">TopThink</a></div>
</div>
</body>
</html>