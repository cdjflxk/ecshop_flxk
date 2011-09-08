<?php
import("@.Model.VirtualModel");
class IndexAction extends Action {

    public function index() {
       $this->assign('__SuperAdmin__', __SuperAdmin__);
        $this->display();
    }
    
    public function top() {
       $this->assign('__CommonAdmin__', __CommonAdmin__);
        $this->display();
    }
    
    public function body() {
        $this->display();
    }
    
    public function menu() {
    	$this->assign('__SuperAdmin__', __SuperAdmin__);
        $this->display();
    }
    public function bottom() {
        $this->display();
    }
    
    public function pd_lst() {
    	$type = $_GET["type"];
    	if($type == "index"){
    		$this->assign('type', $type);
          	$this->display();  		
    	}else if($type == "virtual"){
    		$this->assign('type', $type);
    		$virtualModel = new VirtualModel();
    		$map = $virtualModel->select(); 
        	$this->assign('virtuals',$map);
          	$this->display();      		
    	}

    }
    
    public function pd_tpe() {
        $this->display();
    }
    
    public function pd_r() {
        $this->display();
    }
    
    public function pd_save() {
    	$virtualModel = new VirtualModel();
    	$id ="";
    	$id = $_POST["id"];
    	//判断是修改还是新增加
    	if($id == ""){
    	  
    	}else{
    		//$condition['id'] = $pid;
    		$virtualModel = M("VirtualModel"); 
			// 根据表单提交的POST数据创建数据对象
			$virtualModel->create();
			$virtualModel->save(); // 根据条件保存修改的数据
    	}
    	
//    	$virtualModel["name"] = $_POST["name"];
//    	$virtualModel["size"] = $_POST["size"];
//    	$virtualModel["connection_count"] = $_POST["connection_count"];
//    	$virtualModel["flow"] = $_POST["flow"];
//    	$virtualModel["market_price"] = $_POST["market_price"];
//    	$virtualModel["discount"] = $_POST["discount"];
//    	$virtualModel["os"] = $_POST["os"];
//    	$virtualModel["script"] = $_POST["script"];
//    	$virtualModel["is_sale"] = $_POST["is_sale"];
//    	$virtualModel["second_category"] = $_POST["second_category"];
//    	$virtualModel["order"] = $_POST["order"];
//    	$virtualModel["short_description"] = $_POST["short_description"];
//    	$virtualModel["domain_count"] = $_POST["domain_count"];
//    	$virtualModel["trial_time"] = $_POST["trial_time"];
//    	$virtualModel["site_count"] = $_POST["site_count"];
//    	$virtualModel["image"] = $_POST["image"];
//    	$virtualModel["free_gift"] = $_POST["free_gift"];
    	
    	redirect("pd_edt?id=1",2,"保存成功,将在2秒钟后自动跳转");
    }
    
    public function pd_edt() {
    	$id = $_GET["id"];
    	if($id != ""){
    		$condition['id'] = $id;
    		$virtualModel = new VirtualModel();
    		$record = $virtualModel->select($condition);
    	}
        $this->assign('id',$id);
        $this->assign('virtual',$record);
        $this->display();   
    }
}

?>