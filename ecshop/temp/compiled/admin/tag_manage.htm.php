<!-- $Id: tag_manage.htm 14216 2008-03-10 02:27:21Z testyang $ -->

<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

<form method="POST" action="tag_manage.php?act=batch_drop" name="listForm">
<!-- start tag list -->
<div class="list-div" id="listDiv">
<?php endif; ?>

<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox">
      <a href="javascript:listTable.sort('tag_id'); "><?php echo $this->_var['lang']['record_id']; ?></a><?php echo $this->_var['sort_tag_id']; ?>
    </th>
    <th><a href="javascript:listTable.sort('tag_words'); "><?php echo $this->_var['lang']['tag_words']; ?></a><?php echo $this->_var['sort_tag_words']; ?></th>
    <th><a href="javascript:listTable.sort('user_name'); "><?php echo $this->_var['lang']['user_id']; ?></a><?php echo $this->_var['sort_user_name']; ?></th>
    <th><a href="javascript:listTable.sort('goods_name'); "><?php echo $this->_var['lang']['goods_id']; ?></a><?php echo $this->_var['sort_goods_name']; ?></th>
    <th><?php echo $this->_var['lang']['handler']; ?></th>
  </tr>
  <?php $_from = $this->_var['tag_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag');if (count($_from)):
    foreach ($_from AS $this->_var['tag']):
?>
  <tr>
    <td><span><input name="checkboxes[]" type="checkbox" value="<?php echo $this->_var['tag']['tag_id']; ?>"><?php echo $this->_var['tag']['tag_id']; ?></span></td>
    <td class="first-cell"><span onclick="javascript:listTable.edit(this, 'edit_tag_name', <?php echo $this->_var['tag']['tag_id']; ?>)"><?php echo $this->_var['tag']['tag_words']; ?></span></td>
    <td align="left"><span><?php echo $this->_var['tag']['user_name']; ?></span></td>
    <td align="left"><span><a href="../goods.php?id=<?php echo $this->_var['tag']['goods_id']; ?>" target="_blank"><?php echo $this->_var['tag']['goods_name']; ?></a></span></td>
    <td align="center">
      <span>
      <a href="tag_manage.php?act=edit&amp;id=<?php echo $this->_var['tag']['tag_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" border="0" height="16" width="16" /></a>
      <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['tag']['tag_id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>"><img src="images/icon_drop.gif" border="0" height="16" width="16"></a></span>
    </td>
  </tr>
  <?php endforeach; else: ?>
    <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <tr>
    <td colspan="2"><input type="submit" class="button" id="btnSubmit" value="<?php echo $this->_var['lang']['drop_tags']; ?>" disabled="true" /></td>
    <td align="right" nowrap="true" colspan="3"><?php echo $this->fetch('page.htm'); ?></td>
  </tr>
</table>

<?php if ($this->_var['full_page']): ?>
</div>
<!-- end tag list -->
</form>

<script type="text/javascript" language="JavaScript">
  listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
  listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

  <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  
  onload = function()
  {
    // 开始检查订单
    startCheckOrder();
  }
  
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>