<?php
import("@.Action.SuperAdmin.VirtualAction");
import("@.Action.SuperAdmin.DnsAction");
import("@.Action.SuperAdmin.TemplateAction");
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
             $virtualAction = new VirtualAction();
             $virtualAction->pd_lst();     		
    	}else if($type == "dns"){
             $dnsAction = new DnsAction();
             $dnsAction->pd_lst();     		
    	}else if($type == "template"){
             $templateAction = new TemplateAction();
             $templateAction->pd_lst();     		
    	}
    }
    
    public function pd_save() {
        $type = $_GET["type"];
        $id = $_POST["id"];
        if($type == "virtual"){
             $virtualAction = new VirtualAction();
             $virtualAction->pd_save($id);     		
    	}else if($type == "dns"){
             $dnsAction = new DnsAction();
             $dnsAction->pd_save($id);                
        }else if($type == "template"){
             $templateAction = new TemplateAction();
             $templateAction->pd_save($id);                
        }
    }
    
    public function pd_edt() {
         $id = $_GET["id"];
         $type = $_GET["type"];
        if($type == "virtual"){
             $virtualAction = new VirtualAction();
             $virtualAction->pd_edt($id);     		
    	} else if($type == "dns"){
             $dnsAction = new DnsAction();
             $dnsAction->pd_edt($id);     		
    	} else if($type == "template"){
             $templateAction = new TemplateAction();
             $templateAction->pd_edt($id);   		
    	}   
    }
    
    public function pd_delete() {
         $id = $_GET["id"];
         $type = $_GET["type"];
        if($type == "virtual"){
             $virtualAction = new VirtualAction();
             $virtualAction->pd_delete($id);     		
    	} else if($type == "dns"){
             $dnsAction = new DnsAction();
             $dnsAction->pd_delete($id);     		
    	} else if($type == "template"){
             $templateAction = new TemplateAction();
             $templateAction->pd_delete($id);   		
    	}   
    }
    
    public function pd_add() {
        $type = $_GET["type"];
        if($type == "virtual"){
             $virtualAction = new VirtualAction();
             $virtualAction->pd_add();     		
    	}else if($type == "dns"){
             $dnsAction = new DnsAction();
             $dnsAction->pd_add();     		
    	}else if($type == "template"){
             $templateAction = new TemplateAction();
             $templateAction->pd_add();     		
    	}
    }
    
    public function user_body() {
        $user = M('User');
        $condition['role_id'] = '2';
        $userList = $user->where($condition)->select(); 
        $this->assign('userList',$userList);
        $this->display();   
    }
}

?>