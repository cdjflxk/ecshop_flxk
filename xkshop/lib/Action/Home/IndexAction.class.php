<?php
import("@.Action.ModelAction.IndexModelAction");
class IndexAction extends Action {

    public function index() {
        $indexModelAction = new IndexModelAction();
        $map = $indexModelAction->queryAllToMap();
        $this->assign('title', $map['title']);
        $this->assign('keywords', $map['keywords']);
        $this->assign('description', $map['description']);
        $this->assign('phone', $map['phone']);
        $this->display();
    }

    public function dns() {
        $this->display();
    }

    public function virtual() {
        $this->display();
    }

    public function email() {
        $this->display();
    }

    public function vps() {
        $this->display();
    }

    public function shop() {
        $this->display();
    }

    public function site() {
        $this->display();
    }

    public function helpcenter() {
        $this->display();
    }

    public function business() {
        $this->display();
    }
    
    public function login() {
        
        $this->display();
    }

}

?>