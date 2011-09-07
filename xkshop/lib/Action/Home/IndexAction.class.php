<?php
import("@.Action.ModelAction.IndexModelAction");
import("@.Model.VirtualModel");
class IndexAction extends Action {

    public function index() {
        $indexModelAction = new IndexModelAction();
        $map = $indexModelAction->queryAllToSigleMap();
        $this->assign('title', $map['title']);
        $this->assign('keywords', $map['keywords']);
        $this->assign('description', $map['description']);
        $this->assign('phone', $map['phone']);
        $this->assign('__CommonAdmin__', __CommonAdmin__);
        $this->display();
    }

    public function dns() {
        $this->display();
    }

    public function virtual() {
        $virtualModel = new VirtualModel();
        $map = $virtualModel->select(); 
        $this->assign('virtuals',$map);
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