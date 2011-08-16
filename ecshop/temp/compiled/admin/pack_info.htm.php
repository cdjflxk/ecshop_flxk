<!-- $Id: pack_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<div class="main-div">
<form method="post" action="pack.php" name="theForm" enctype="multipart/form-data" onsubmit="return validate()">
<table cellspacing="1" cellpadding="3" width="100%">
  <tr>
    <td class="label"><?php echo $this->_var['lang']['pack_name']; ?></td>
    <td><input type="text" name="pack_name" maxlength="60" size = "30" value="<?php echo htmlspecialchars($this->_var['pack']['pack_name']); ?>" /><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <tr>
    <td class="label"><a href="javascript:showNotice('notice_packfee');" title="<?php echo $this->_var['lang']['form_notice']; ?>">
        <img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['pack_fee']; ?></td>
    <td><input type="text" name="pack_fee" maxlength="60" size="30" value="<?php echo $this->_var['pack']['pack_fee']; ?>" /><?php echo $this->_var['lang']['require_field']; ?>
    <br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="notice_packfee"><?php echo $this->_var['lang']['notice_packfee']; ?></span>
    </td>
  </tr>
  <tr>
    <td class="label"><a href="javascript:showNotice('notice_freemoney');" title="<?php echo $this->_var['lang']['form_notice']; ?>">
        <img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['free_money']; ?></td>
    <td><input type="text" name="free_money" maxlength="60" size="30" value="<?php echo $this->_var['pack']['free_money']; ?>" /><?php echo $this->_var['lang']['require_field']; ?>
    <br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="notice_freemoney"><?php echo $this->_var['lang']['notice_freemoney']; ?></span>
    </td>
  </tr>
  <tr>
    <td class="label"><?php if ($this->_var['pack']['pack_img'] != ""): ?><a href="javascript:showNotice('warn_packimg');" title="<?php echo $this->_var['lang']['form_notice']; ?>">
        <img src="images/warning_small.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php endif; ?><?php echo $this->_var['lang']['pack_img']; ?></td>
    <td><input type="file" name="pack_img"  size="45"><?php if ($this->_var['pack']['pack_img'] != ""): ?><input type="button" value="<?php echo $this->_var['lang']['drop_pack_img']; ?>" onclick="if (confirm('<?php echo $this->_var['lang']['confirm_pack_img']; ?>'))location.href='pack.php?act=drop_pack_img&id=<?php echo $this->_var['pack']['pack_id']; ?>'"><?php endif; ?>
    <br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="warn_packimg"><?php echo $this->_var['lang']['warn_packimg']; ?></span>
    </td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['pack_desc']; ?></td>
    <td><textarea  name="pack_desc" cols="60" rows="4"><?php echo htmlspecialchars($this->_var['pack']['pack_desc']); ?></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type="submit" class="button" value="<?php echo $this->_var['lang']['button_submit']; ?>" />
      <input type="reset" class="button" value="<?php echo $this->_var['lang']['button_reset']; ?>" />
        <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
      <input type="hidden" name="id" value="<?php echo $this->_var['pack']['pack_id']; ?>" />
        <input type="hidden" name="old_packname" value="<?php echo $this->_var['pack']['pack_name']; ?>" />
        <input type="hidden" name="old_packimg" value="<?php echo $this->_var['pack']['pack_img']; ?>">
    </td>
  </tr>
</table>
</form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>

<script language="JavaScript">
<!--
document.forms['theForm'].elements['pack_name'].focus();
/**
 * 检查表单输入的数据
 */
function validate()
{
  validator = new Validator("theForm");
  validator.required("pack_name",  no_packname);
  validator.isNumber("pack_fee",   packfee_un_num, 1);
  validator.isNumber("free_money", packmoney_un_num, 1);
  return validator.passed();
}

onload = function()
{
    // 开始检查订单
    startCheckOrder();
}
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>