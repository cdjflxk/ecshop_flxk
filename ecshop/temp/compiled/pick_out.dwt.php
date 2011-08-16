<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />


<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,lefttime.js')); ?>
<script type="text/javascript">
  <?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="block box">
 <div id="ur_here">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>
</div>

<div class="blank"></div>
<div class="block clearfix">
  
  <div class="AreaL">
    
    <?php echo $this->fetch('library/cart.lbi'); ?>
    <?php echo $this->fetch('library/categorys.lbi'); ?>
    <?php echo $this->fetch('library/goods_related.lbi'); ?>
    <?php echo $this->fetch('library/goods_fittings.lbi'); ?>
    <?php echo $this->fetch('library/goods_article.lbi'); ?>
    <?php echo $this->fetch('library/goods_attrlinked.lbi'); ?>
    
    <div class="box">
     <div class="box_1">
      <h3><span><?php echo $this->_var['lang']['your_choice']; ?></span></h3>
      <div class="boxCenterList clearfix">
        <ul>
        <?php $_from = $this->_var['picks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pick');if (count($_from)):
    foreach ($_from AS $this->_var['pick']):
?>
        <li style="word-break:break-all;"><a href="<?php echo $this->_var['pick']['url']; ?>"><?php echo $this->_var['pick']['name']; ?></a></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </ul>
      </div>
     </div>
    </div>
    <div class="blank5"></div>
    
    
    
  </div>
  
  
  <div class="AreaR">
   <div class="box">
   <div class="box_1">
    <h3><span><?php echo $this->_var['lang']['pick_out']; ?></span></h3>
    <div class="boxCenterList">
      <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
      <?php $_from = $this->_var['condition']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'caption');if (count($_from)):
    foreach ($_from AS $this->_var['caption']):
?>
      <tr>
        <td bgcolor="#e5ecfb" style="border-bottom: 1px solid #DADADA">
          <img src="themes/default/images/note.gif" alt="no alt" />&nbsp;&nbsp;<strong class="f_red"><?php echo $this->_var['caption']['name']; ?></strong></td>
      </tr>
      <?php $_from = $this->_var['caption']['cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
      <tr>
        <td bgcolor="#ffffff">&nbsp;&nbsp;<strong><?php echo $this->_var['cat']['cat_name']; ?></strong></td>
      </tr>
      <tr>
        <td bgcolor="#ffffff">&nbsp;&nbsp;
          <?php $_from = $this->_var['cat']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
          &nbsp;&nbsp;<a href="<?php echo $this->_var['list']['url']; ?>" class="f6"><?php echo $this->_var['list']['name']; ?></a>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </td>
      </tr>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>
    </div>
   </div>
  </div>
   <div class="blank5"></div>
   <div class="box">
   <div class="box_1">
    <h3><span><?php echo $this->_var['lang']['search_result']; ?> (<?php echo $this->_var['count']; ?>)</span></h3>
    <div class="boxCenterList clearfix">
     <?php $_from = $this->_var['pickout_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
     <div class="goodsItem">
           <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" /></a><br />
           <p><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_name']; ?></a></p>
					 <a href="javascript:addToCart(<?php echo $this->_var['goods']['id']; ?>)"><img src="themes/default/images/bnt_buy.gif" /></a> <a href="javascript:collect(<?php echo $this->_var['goods']['id']; ?>)"><img src="themes/default/images/bnt_coll.gif" /></a>
           <font class="f1">
           <?php if ($this->_var['goods']['promote_price'] != ""): ?>
          <?php echo $this->_var['lang']['promote_price']; ?><?php echo $this->_var['goods']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['lang']['shop_price']; ?><?php echo $this->_var['goods']['shop_price']; ?>
          <?php endif; ?>
           </font>
        </div>
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     <?php if ($this->_var['count'] > 5): ?>
     <div class="more f_r" style="clear:both;"><a href="<?php echo $this->_var['url']; ?>"><img src="themes/default/images/more.gif" /></a></div>
     <?php endif; ?>
    </div>
   </div>
  </div>

  </div>
  
</div>
<div class="blank"></div>

<div class="block">
  <div class="box">
   <div class="helpTitBg clearfix">
    <?php echo $this->fetch('library/help.lbi'); ?>
   </div>
  </div>
</div>
<div class="blank"></div>


<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="links clearfix">
    <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['txt_links']): ?>
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    [<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>]
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
  </div>
 </div>
</div>
<?php endif; ?>

<div class="blank"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var gmt_end_time = "<?php echo empty($this->_var['group_buy']['gmt_end_date']) ? '0' : $this->_var['group_buy']['gmt_end_date']; ?>";
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";


onload = function()
{
  try
  {
    onload_leftTime();
  }
  catch (e)
  {}
}

</script>
</html>
