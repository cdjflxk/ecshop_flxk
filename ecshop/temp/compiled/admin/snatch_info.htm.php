<!-- $Id: snatch_info.htm 16992 2010-01-19 08:45:49Z wangleisvn $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js,validator.js')); ?>
<script type="text/javascript" src="../js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../js/calendar/calendar.css" rel="stylesheet" type="text/css" />
<div class="main-div">
<form method="post" action="snatch.php" name="theForm" onsubmit="return validate()">
<table cellspacing="1" cellpadding="3" width="100%">
  <tr>
    <td class="label"><?php echo $this->_var['lang']['snatch_name']; ?></td>
    <td><input type="text" name="snatch_name" maxlength="60" size="40" value="<?php echo $this->_var['snatch']['snatch_name']; ?>" /><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <tr>
    <td align="right"><?php echo $this->_var['lang']['keywords']; ?></td>
    <td><input type="text" name="keywords" size="30" />
    <input type="button" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" onclick="searchGoods()"></td>
  </tr>
  <tr>
    <td class="label"><a href="javascript:showNotice('noticegoodsid');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['goodsid']; ?></td>
    <td>
        <select name="goods_id" onchange="javascript:change_good_products();">
        <?php echo $this->_var['snatch']['option']; ?>
        </select>
        <select name="product_id" <?php if ($this->_var['snatch']['product_id'] <= 0): ?>style="display:none"<?php endif; ?>>
        <?php echo $this->html_options(array('options'=>$this->_var['good_products_select'],'selected'=>$this->_var['snatch']['product_id'])); ?>
        </select>
        <?php echo $this->_var['lang']['require_field']; ?>
     <br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticegoodsid"><?php echo $this->_var['lang']['notice_goodsid']; ?></span></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['start_time']; ?></td>
    <td>
      <input type="text" name="start_time" maxlength="60" size="40" value="<?php echo $this->_var['snatch']['start_time']; ?>" readonly="readonly" id="start_time_id" />
      <input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('start_time_id', '%Y-%m-%d %H:%M', '24', false, 'selbtn1');" value="<?php echo $this->_var['lang']['btn_select']; ?>" class="button"/>
      <?php echo $this->_var['lang']['require_field']; ?>
    </td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['end_time']; ?></td>
    <td>
      <input type="text" name="end_time" maxlength="60" size="40" value="<?php echo $this->_var['snatch']['end_time']; ?>"  readonly="readonly" id ="end_time_id" />
      <input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('end_time_id', '%Y-%m-%d %H:%M', '24', false, 'selbtn1');" value="<?php echo $this->_var['lang']['btn_select']; ?>" class="button"/>
      <?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <tr>
    <td class="label"><a href="javascript:showNotice('noticeminPrice');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['min_price']; ?></td>
    <td><input type="text" name="start_price" maxlength="60" size="20" value="<?php echo $this->_var['snatch']['start_price']; ?>" /><?php echo $this->_var['lang']['require_field']; ?><br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticeminPrice"><?php echo $this->_var['lang']['notice_min_price']; ?></span></td>
  </tr>
   <tr>
    <td class="label"><a href="javascript:showNotice('noticemaxPrice');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['max_price']; ?></td>
    <td><input type="text" name="end_price" maxlength="60" size="20" value="<?php echo $this->_var['snatch']['end_price']; ?>" /><?php echo $this->_var['lang']['require_field']; ?><br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticemaxPrice"><?php echo $this->_var['lang']['notice_max_price']; ?></span></td>
  </tr>
  <tr>
    <td class="label"><a href="javascript:showNotice('noticePrice');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['price']; ?></td>
    <td><input type="text" name="max_price" maxlength="60" size="20" value="<?php echo $this->_var['snatch']['max_price']; ?>" /><?php echo $this->_var['lang']['require_field']; ?><br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticePrice"><?php echo $this->_var['lang']['notice_price']; ?></span></td>
  </tr>
  <tr>
    <td class="label"><a href="javascript:showNotice('noticeintegral');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['integral']; ?></td>
    <td><input type="text" name="cost_points" maxlength="60" size="20" value="<?php echo $this->_var['snatch']['cost_points']; ?>" /><?php echo $this->_var['lang']['require_field']; ?><br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticeintegral"><?php echo $this->_var['lang']['notice_integral']; ?></span></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['desc']; ?></td>
    <td><textarea  name="desc" cols="60" rows="4"  ><?php echo $this->_var['snatch']['act_desc']; ?></textarea></td>
  </tr>

  <tr>
    <td colspan="2" align="center">
      <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
      <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
      <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
      <input type="hidden" name="id" value="<?php echo $this->_var['snatch']['act_id']; ?>" />
    </td>
  </tr>
</table>
</form>
</div>
<script language="JavaScript">
<!--

var display_yes = (Browser.isIE) ? 'block' : 'table-row-group';

document.forms['theForm'].elements['snatch_name'].focus();
onload = function()
{
  // 开始检查订单
  startCheckOrder();
}

/**
 * 检查表单输入的数据
 */
function validate()
{
  validator = new Validator("theForm");
  validator.required("snatch_name",  no_name);
  validator.required("desc",         no_desc);
  validator.isNullOption("goods_id", no_goods_id);
  validator.isTime("start_time", invalid_starttime, true);
  validator.isTime("end_time", invalid_endtime, true);
  validator.gt("end_time", "start_time", invalid_gt);
  validator.gt("end_price", "start_price", invalid_price);
  validator.isNumber("start_price", invalid_min_price, true);
  validator.isNumber("max_price", invalid_max_price, true);
  validator.isInt("cost_points", invalid_integral, true);

  if (document.forms['theForm'].elements['act'] == "insert")
  {
      validator.required("password", no_password);
  }

  return validator.passed();
}

function searchGoods()
{
  var filter = new Object;
  filter.keyword = document.forms['theForm'].elements['keywords'].value;

  Ajax.call('snatch.php?is_ajax=1&act=search_goods', filter, searchGoodsResponse, 'GET', 'JSON');
}

function searchGoodsResponse(result)
{
  var frm = document.forms['theForm'];
  var sel = frm.elements['goods_id'];
  var sp = frm.elements['product_id'];

  if (result.error == 0)
  {
    /* 清除 options */
    sel.length = 0;
    sp.length = 0;

    /* 创建 options */
    var goods = result.content.goods;
    if (goods.length)
    {
      for (i = 0; i < goods.length; i++)
      {
          var opt = document.createElement("OPTION");
          opt.value = goods[i].goods_id;
          opt.text  = goods[i].goods_name;
          sel.options.add(opt);
      }
    }
    else
    {
      var opt = document.createElement("OPTION");
      opt.value = 0;
      opt.text  = search_is_null;
      sel.options.add(opt);
    }

    /* 创建 product options */
    var products = result.content.products;
    if (products.length)
    {
      sp.style.display = display_yes;

      for (i = 0; i < products.length; i++)
      {
        var p_opt = document.createElement("OPTION");
        p_opt.value = products[i].product_id;
        p_opt.text  = products[i].goods_attr_str;
        sp.options.add(p_opt);
      }
    }
    else
    {
      sp.style.display = 'none';

      var p_opt = document.createElement("OPTION");
      p_opt.value = 0;
      p_opt.text  = search_is_null;
      sp.options.add(p_opt);
    }
  }

  if (result.message.length > 0)
  {
    alert(result.message);
  }
}

function change_good_products()
{
  var filter = new Object;
  filter.goods_id = document.forms['theForm'].elements['goods_id'].value;

  Ajax.call('snatch.php?is_ajax=1&act=search_products', filter, searchProductsResponse, 'GET', 'JSON');
}

function searchProductsResponse(result)
{
  var frm = document.forms['theForm'];
  var sp = frm.elements['product_id'];

  if (result.error == 0)
  {
    /* 清除 options */
    sp.length = 0;

    /* 创建 product options */
    var products = result.content.products;
    if (products.length)
    {
      sp.style.display = display_yes;

      for (i = 0; i < products.length; i++)
      {
        var p_opt = document.createElement("OPTION");
        p_opt.value = products[i].product_id;
        p_opt.text  = products[i].goods_attr_str;
        sp.options.add(p_opt);
      }
    }
    else
    {
      sp.style.display = 'none';

      var p_opt = document.createElement("OPTION");
      p_opt.value = 0;
      p_opt.text  = search_is_null;
      sp.options.add(p_opt);
    }
  }

  if (result.message.length > 0)
  {
    alert(result.message);
  }
}
//-->

</script>
<?php echo $this->fetch('pagefooter.htm'); ?>