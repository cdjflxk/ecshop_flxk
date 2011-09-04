<?php
import("@.Action.ModelAction.UserModelAction");
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
        $userModelAction = new UserModelAction();
        $isRight = $userModelAction->checkPwd($username, $pwd);
        if($isRight){
            redirect(index);
        }else{
            redirect(loginFail);
        }
    }

}

?>