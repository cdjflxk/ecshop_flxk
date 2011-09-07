<?php
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
    	if(type == "index"){
    		$this->assign('type', 'index');
          	$this->display();  		
    	}else if(type == "virtual"){
    		
    	}

    }
    
    public function pd_tpe() {
        $this->display();
    }
    
    public function pd_r() {
        $this->display();
    }
}

?>