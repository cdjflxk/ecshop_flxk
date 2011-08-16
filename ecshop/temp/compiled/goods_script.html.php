<table width="100%"  border="0" cellspacing="0" cellpadding="0">

  <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_item');if (count($_from)):
    foreach ($_from AS $this->_var['goods_item']):
?>
  <tr>
    <?php $_from = $this->_var['goods_item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
    <td><table width="100%">
      <?php if ($this->_var['need_image']): ?>
      <tr>
        <td align="center"><a href="<?php echo $this->_var['goods_url']; ?><?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><img src="<?php echo $this->_var['url']; ?><?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" border="0" <?php if ($this->_var['thumb_width'] && $this->_var['thumb_height']): ?>width="<?php echo $this->_var['thumb_width']; ?>" height="<?php echo $this->_var['thumb_height']; ?>"<?php endif; ?>></a></td>
      </tr>
      <?php endif; ?>
      <tr>
        <td align="center"><a href="<?php echo $this->_var['goods_url']; ?><?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><?php echo $this->_var['goods']['goods_name']; ?></a><br /><?php echo $this->_var['goods']['goods_price']; ?></td>
      </tr>
    </table></td>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </tr>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

</table>
