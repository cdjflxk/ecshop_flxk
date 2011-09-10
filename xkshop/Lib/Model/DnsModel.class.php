<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of XkEcshop
 *
 * @author Administrator
 */
class VirtualModel extends Model{
	protected $trueTableName = 'xk_dns'; 
        
     protected $_validate = array(
        array('name', 'require', '名称必填！'), //默认情况下用正则进行验证
        array('name', '', '帐号名称已经存在！', 0, 'unique', 1), // 在新增的时候验证name字段是否唯一
    );

    public function __construct(){
            parent::__construct();
            $this->fields = $this->getDbFields();
        }
}

?>
