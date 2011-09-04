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
        $this->display();
    }
    public function bottom() {
        $this->display();
    }
}

?>