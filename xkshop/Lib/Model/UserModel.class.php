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
class UserModel extends Model{
	protected $trueTableName = 'xk_user'; 
	
     // check the pwd
    public function checkPwd($name,$pwd) {
  		$condition['name'] = "$name";
        $records = parent::select($condition);
        if(count($records) > 0){
        	$record = $records[0];
        }else{
        	//不存在相应的用户
        	return false;
        }
        
        if($record['pwd'] == $pwd){
            return true;
        }else{
        	//密码错误
            return false;
        }
    }
}

?>
