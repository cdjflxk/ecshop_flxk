<!-- $Id: sitemap.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<div class="main-div">
<p style="padding: 0 10px"><?php echo $this->_var['lang']['webcollect_notice']; ?></p>
</div>

<?php if ($this->_var['case'] == 0): ?>
<div class="main-div">
<table width="100%" height="100px">
<tr>
    <td align="center"><?php echo $this->_var['msg']; ?></td>
</tr>
<tr>
    <td align="center"><input type="button" value="<?php echo $this->_var['lang']['open_now']; ?>" class="button" onclick="window.open('http://2c.shopex.cn/');"/></td>
</tr>
</table>
</div>
<?php else: ?>
<span style="font-size: 14; font-weight: 900;"><?php echo $this->_var['lang']['opened_title']; ?></span>
<div class="main-div" style="margin-top: 5px;">
<table width="100%">
<tr>
    <td class="label"><?php echo $this->_var['lang']['license_label']; ?></td>
    <td><?php echo $this->_var['lic_code']; ?></td>
</tr>
<tr>
    <td class="label"><?php echo $this->_var['lang']['period']; ?></td>
    <td><?php echo $this->_var['lic_btime']; ?> <?php echo $this->_var['lang']['to']; ?> <?php echo $this->_var['lic_etime']; ?> &nbsp;&nbsp;&nbsp;&nbsp;<?php if ($this->_var['case'] == 2): ?><?php echo $this->_var['lang']['sev_out']; ?><?php endif; ?><?php if ($this->_var['case'] == 1): ?><?php echo $this->_var['out_notice']; ?><?php endif; ?></td>
</tr>
<tr>
    <td class="label"><?php echo $this->_var['lang']['included']; ?></td>
    <td><?php echo $this->_var['col_goods_num']; ?><?php echo $this->_var['lang']['col_goods_num']; ?></td>
</tr>
<tr>
    <td class="label"><?php echo $this->_var['lang']['included_status']; ?></td>
    <td>
      <?php $_from = $this->_var['col_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      <?php echo $this->_var['goods']['se_name']; ?> : <?php echo $this->_var['goods']['se_num']; ?><?php echo $this->_var['lang']['item']; ?><br />
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </td>
</tr>
<tr>
    <td></td>
    <td>
      <?php if ($this->_var['open'] == 0): ?>
      <input type="button" value="<?php echo $this->_var['lang']['open_sev']; ?>" class="button" onclick="self.location='?act=open';"/>
      <?php elseif ($this->_var['open'] == 1): ?>
      <input type="button" value="<?php echo $this->_var['lang']['stop_sev']; ?>" class="button" onclick="stop_sev();"/>
      <?php else: ?>
      <input type="button" value="<?php echo $this->_var['lang']['open_again']; ?>" class="button" onclick="window.open('http://2c.shopex.cn/');"/>
      <?php endif; ?>    
      <?php if ($this->_var['case'] == 1): ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://2c.shopex.cn/" target="_blank"><?php echo $this->_var['lang']['call_pay']; ?></a><?php endif; ?>
    </td>
</tr>
</table>
</div>
<?php endif; ?>
<?php if ($this->_var['site_arr'] != ''): ?>
<span style="font-size: 14; font-weight: 900;"><?php if ($this->_var['site_msg'] == ''): ?><?php echo $this->_var['lang']['support_engine']; ?><?php else: ?><?php echo $this->_var['site_msg']; ?><?php endif; ?></span>
<div class="main-div" style="margin-top: 5px;width: 800px; height:220px;">
<?php $_from = $this->_var['site_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'site');if (count($_from)):
    foreach ($_from AS $this->_var['site']):
?>
<div style="float:left; margin-left:20px; margin-top:10px;">
<a href="<?php echo $this->_var['site']['se_url']; ?>" target="_blank"><img style="margin:10px; border:0; height:40px;" src="<?php echo $this->_var['site']['se_img']; ?>"></a><br />
&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_var['site']['se_url']; ?>" target="_blank"><?php echo $this->_var['site']['se_url']; ?></a>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<?php endif; ?>


<script type="text/javascript" language="JavaScript">
<!--
onload = function()
{
  // 开始检查订单
  startCheckOrder();
}

function stop_sev()
{
  if (confirm(sev_stop))
  {
    self.location='?act=close';
  }
}
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>