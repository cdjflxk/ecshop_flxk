<?php

import("@.Action.ModelAction.UserModelAction");

class IndexAction extends Action {

    public function index() {
        $this->display();
    }

    public function loginFail() {
        $this->display();
    }

    public function login() {
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        $userModelAction = new UserModelAction();
        $isRight = $userModelAction->checkPwd($username, $pwd);
        if ($isRight) {
            $_SESSION['name'] = $name;
            redirect(index);
        } else {
            redirect(loginFail);
        }
    }

    public function loginOut() {
        if (array_key_exists('name', $_SESSION)) {
            session_start();
            unset($_SESSION['name']);
        }
        $this->redirect('http://localhost/ecshop_flxk/xkshop/index.php/Home/index/index');
    }

}

?>