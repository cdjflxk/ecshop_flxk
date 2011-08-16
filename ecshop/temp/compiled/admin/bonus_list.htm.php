<!-- $Id: bonus_list.htm 14216 2008-03-10 02:27:21Z testyang $ -->

<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<form method="POST" action="bonus.php?act=batch&bonus_type=<?php echo $_GET['bonus_type']; ?>" name="listForm">
<!-- start user_bonus list -->
<div class="list-div" id="listDiv">
<?php endif; ?>

  <table cellpadding="3" cellspacing="1">
    <tr>
      <th>
        <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox">
        <a href="javascript:listTable.sort('bonus_id'); "><?php echo $this->_var['lang']['record_id']; ?></a><?php echo $this->_var['sort_bonus_id']; ?></th>
      <?php if ($this->_var['show_bonus_sn']): ?>
      <th><a href="javascript:listTable.sort('bonus_sn'); "><?php echo $this->_var['lang']['bonus_sn']; ?></a><?php echo $this->_var['sort_bonus_sn']; ?></th>
      <?php endif; ?>
      <th><a href="javascript:listTable.sort('type_name'); "><?php echo $this->_var['lang']['bonus_type']; ?></a><?php echo $this->_var['sort_type_name']; ?></th>
      <th><a href="javascript:listTable.sort('order_id'); "><?php echo $this->_var['lang']['order_id']; ?></a><?php echo $this->_var['sort_order_id']; ?></th>
      <th><a href="javascript:listTable.sort('user_id'); "><?php echo $this->_var['lang']['user_id']; ?></a><?php echo $this->_var['sort_user_id']; ?></th>
      <th><a href="javascript:listTable.sort('used_time'); "><?php echo $this->_var['lang']['used_time']; ?></a><?php echo $this->_var['sort_use_time']; ?><?php echo $this->_var['sort_used_time']; ?></th>
      <?php if ($this->_var['show_mail']): ?>
      <th><a href="javascript:listTable.sort('emailed'); "><?php echo $this->_var['lang']['emailed']; ?></a><?php echo $this->_var['sort_emailed']; ?><?php echo $this->_var['sort_emailed']; ?></th>
      <?php endif; ?>
      <th><?php echo $this->_var['lang']['handler']; ?></th>
    </tr>
    <?php $_from = $this->_var['bonus_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bonus');if (count($_from)):
    foreach ($_from AS $this->_var['bonus']):
?>
    <tr>
      <td><span><input value="<?php echo $this->_var['bonus']['bonus_id']; ?>" name="checkboxes[]" type="checkbox"><?php echo $this->_var['bonus']['bonus_id']; ?></span></td>
      <?php if ($this->_var['show_bonus_sn']): ?>
      <td><?php echo $this->_var['bonus']['bonus_sn']; ?></td>
      <?php endif; ?>
      <td><?php echo $this->_var['bonus']['type_name']; ?></td>
      <td><?php echo $this->_var['bonus']['order_sn']; ?></td>
      <td><?php if ($this->_var['bonus']['email']): ?><a href="mailto:<?php echo $this->_var['bonus']['email']; ?>"><?php echo $this->_var['bonus']['user_name']; ?></a><?php else: ?><?php echo $this->_var['bonus']['user_name']; ?><?php endif; ?></td>
      <td align="right"><?php echo $this->_var['bonus']['used_time']; ?></td>
      <?php if ($this->_var['show_mail']): ?>
      <td align="center"><?php echo $this->_var['bonus']['emailed']; ?></td>
      <?php endif; ?>
      <td align="center">
        <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['bonus']['bonus_id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>', 'remove_bonus')"><?php echo $this->_var['lang']['remove']; ?></a>
        <?php if ($this->_var['show_mail'] && $this->_var['bonus']['order_id'] == 0 && $this->_var['bonus']['email']): ?><a href="bonus.php?act=send_mail&bonus_id=<?php echo $this->_var['bonus']['bonus_id']; ?>"><?php echo $this->_var['lang']['send_mail']; ?></a><?php endif; ?></td>
    </tr>
    <?php endforeach; else: ?>
    <tr><td class="no-records" colspan="11"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>

  <table cellpadding="4" cellspacing="0">
    <tr>
      <td><input type="submit" name="drop" id="btnSubmit" value="<?php echo $this->_var['lang']['drop']; ?>" class="button" disabled="true" />
      <?php if ($this->_var['show_mail']): ?><input type="submit" name="mail" id="btnSubmit1" value="<?php echo $this->_var['lang']['send_mail']; ?>" class="button" disabled="true" /><?php endif; ?></td>
      <td align="right"><?php echo $this->fetch('page.htm'); ?></td>
    </tr>
  </table>

<?php if ($this->_var['full_page']): ?>
</div>
<!-- end user_bonus list -->
</form>

<script type="text/javascript" language="JavaScript">
  listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
  listTable.pageCount = <?php echo $this->_var['page_count']; ?>;
  listTable.query = "query_bonus";

  <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

  
  onload = function()
  {
    // 开始检查订单
    startCheckOrder();
    document.forms['listForm'].reset();
  }
  
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>