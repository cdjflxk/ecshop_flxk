<?php

class XkControl {
	
	static private $xkControl = null;

    public function dispach($action) {
		
    }
    
    public function registerPlug($name) {
		$this->checkPlug($name);
    }
    
    public function checkPlug($name) {
		
    }
    
    static public function getInstance(){
    	if(!empty($xkControl)){
    		return $xkControl;
    	}else{
    		$xkControl = new XkControl();
    		return  $xkControl;
    	}
    }
}

?>