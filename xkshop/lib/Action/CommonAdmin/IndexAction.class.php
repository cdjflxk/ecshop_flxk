<?php

import("@.Model.UserModel");

class IndexAction extends Action {

    public function index() {
        $this->assign('__SuperAdmin__', __SuperAdmin__);
        $this->assign('__Home__', __Home__);
        $this->display();
    }

    public function loginFail() {
        $this->display();
    }
    
    public function login() {
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        $userModel = new UserModel();
        $isRight = $userModel->checkPwd($username, $pwd);
        if ($isRight) {
            $_SESSION['name'] = $username;
            redirect(index);
        } else {
            redirect(loginFail);
        }
    }

    public function loginOut() {
        if (array_key_exists('name', $_SESSION)) {
            unset($_SESSION['name']);
        }
        header("Location:{$__Home__}/Index/index");
    }

}

?>