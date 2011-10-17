<?php
import("@.Pugin.User.Model.UserModel");
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */
class User 
{

    public function isLogin()
    {
    	if(isset($_SESSION['isLogin'])){
    		return $_SESSION['isLogin'];
    	}else{
    		return 'false';
    	}
    }
    
    public function login() {
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        $userModel = new UserModel();
        $isRight = $userModel->checkPwd($username, $pwd);
        if ($isRight) {
            $_SESSION['name'] = $username;
            $_SESSION['isLogin'] = 'true';
            redirect(index);
        } else {
            redirect(loginFail);
        }
    }

    public function loginOut() {
        if (array_key_exists('name', $_SESSION)) {
            unset($_SESSION['name']);
            $_SESSION['isLogin'] = 'false';
        }
        header("Location:{$__Home__}/Index/index");
    }   
}
?>
