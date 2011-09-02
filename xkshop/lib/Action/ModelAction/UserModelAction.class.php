<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of XkShopModelAction
 * @author dejie
 */
import("BaseModelAction",dirname(__FILE__));
class UserModelAction extends BaseModelAction {

     // check the pwd
    public function checkPwd($name,$value) {
        $record = parent::queryByName('UserModel', 'name', $value);
        if($record['pwd'] == $value){
            return true;
        }else{
            return false;
        }
    }
}

?>
