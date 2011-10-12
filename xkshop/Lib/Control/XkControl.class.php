<?php

class XkControl {
	
	private static $xkControl = null;

    public function dispach($action) {
		
    }
    
    public function registerPlug($name) {
		$this->checkPlug($name);
    }
    
    public function checkPlug($name) {
		
    }
    
    public static function getInstance(){
    	if(!empty($xkControl)){
    		return $xkControl;
    	}else{
    		$xkControl = new XkControl();
    		return  $xkControl;
    	}
    }
}

?>