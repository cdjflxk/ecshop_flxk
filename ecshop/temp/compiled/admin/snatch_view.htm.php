<!-- $Id: snatch_view.htm 14216 2008-03-10 02:27:21Z testyang $ -->

<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<div class="list-div">
    <table width="100%" cellpadding="3" cellspacing="1">
      <tr>
        <th colspan="8"><strong><?php echo $this->_var['info']['snatch_name']; ?> </strong></th>
      </tr>
      <tr>
        <td><strong><?php echo $this->_var['lang']['start_time']; ?>: </strong></td><td colspan="3"><?php echo $this->_var['info']['start_time']; ?></td>
        <td><strong><?php echo $this->_var['lang']['end_time']; ?>: </strong></td><td colspan="3"><?php echo $this->_var['info']['end_time']; ?></td>
      </tr>
      <?php if ($this->_var['result']): ?>
      <tr>
        <td align="left"><strong><?php echo $this->_var['lang']['bid_user']; ?>: </strong></td><td><?php echo $this->_var['result']['user_name']; ?></td>
        <td><strong><?php echo $this->_var['lang']['email']; ?>: </strong></td><td><?php echo $this->_var['result']['email']; ?></td>
        <td><strong><?php echo $this->_var['lang']['bid_time']; ?>: </strong></td><td><?php echo $this->_var['result']['bid_time']; ?></td>
        <td><strong><?php echo $this->_var['lang']['min_union_price']; ?>: </strong></td><td><?php echo $this->_var['result']['bid_price']; ?></td>
      </tr>
      <?php endif; ?>
    </table>
</div>

<form method="post" action="" name="listForm">
<div class="list-div" id="listDiv">
<?php endif; ?>

<table cellpadding="3" cellspacing="1">
    <tr>
      <th><a href="javascript:listTable.sort('log_id');"><?php echo $this->_var['lang']['record_id']; ?></a><?php echo $this->_var['sort_snatch_id']; ?></th>
      <th><a href="javascript:listTable.sort('user_name');"><?php echo $this->_var['lang']['bid_user']; ?></a><?php echo $this->_var['sort_user_name']; ?></th>
      <th><a href="javascript:listTable.sort('bid_time');"><?php echo $this->_var['lang']['bid_time']; ?></a><?php echo $this->_var['sort_bid_time']; ?></th>
      <th><a href="javascript:listTable.sort('bid_price');"><?php echo $this->_var['lang']['bid_price']; ?></a><?php echo $this->_var['sort_bid_price']; ?></th>
    </tr>
    <?php $_from = $this->_var['bid_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bid');if (count($_from)):
    foreach ($_from AS $this->_var['bid']):
?>
    <tr>
      <td align="center"><?php echo $this->_var['bid']['log_id']; ?></td>
      <td class="first-cell"><?php echo $this->_var['bid']['user_name']; ?></td>
      <td align="right"><?php echo $this->_var['bid']['bid_time']; ?></td>
      <td align="right"><?php echo $this->_var['bid']['bid_price']; ?></td>
    </tr>
    <?php endforeach; else: ?>
    <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <tr>
      <td align="right" nowrap="true" colspan="8"><?php echo $this->fetch('page.htm'); ?></td>
    </tr>
</table>

<?php if ($this->_var['full_page']): ?>
</div>
</form>

<script type="text/javascript" language="JavaScript">
  listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
  listTable.pageCount = <?php echo $this->_var['page_count']; ?>;
  listTable.query = "query_bid";

  <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

  
  onload = function()
  {
    startCheckOrder();  // 开始检查订单
  }
  
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>