<?php
import("@.Model.VirtualModel");
import("@.Model.UserModel");
class IndexAction extends Action {

    public function index() {
    	$operation = $_GET["operation"];
    	if(empty($operation)){
	        $indexModel = new IndexModel();
	        $map = $indexModel->select();
	        $this->assign('sessionName', $_SESSION['name']);
	        $this->assign('title', $map['title']);
	        $this->assign('keywords', $map['keywords']);
	        $this->assign('description', $map['description']);
	        $this->assign('phone', $map['phone']);
	        $this->assign('__CommonAdmin__', __CommonAdmin__);
	        $this->display();    		
    	}

        
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
    public function register() {
        $this->display();
    }
     public function registerAdd() {
        $userModel = new UserModel();
        $userModel->create();
        $userModel->add();   	  	
        redirect("index",2,"保存成功,将在2秒钟后自动跳转");
    }
}

?>