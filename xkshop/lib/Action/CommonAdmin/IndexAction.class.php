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
    
}

?>