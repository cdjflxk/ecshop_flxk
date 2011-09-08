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
	protected $trueTableName = 'xk_virtual'; 
        public function __construct(){
            parent::__construct();
            $this->fields = $this->getDbFields();
        }
}

?>
