<?php

class XkControl {

    static private $xkControl = null;
    static private  $plugins = array();

    public function __construct() {
        $this->init();
    }

    public function dispach($action) {
        echo $action;
        list($plugin,$action) = explode('/', $action);
        if($this->checkPlug($plugin)){
            require_once XK_PATH.'/Lib/Plugin/'.$plugin.'/User.class.php';
            $pluginInstance = new $plugin();
            return  $pluginInstance->$action();
        }else{
             Log::Write("the plugin".$plugin."is not registered");
        }
    }

    public function registerPlug($name) {
        $this->checkPlug($name);
    }

    private function init() {
        $handle = opendir(XK_PATH.'/Lib/Plugin');
        if ($handle) {
            while (false !== ($file = readdir($handle))) {
                if($file=='.'||$file=='..'){
                    continue;
                }else{
                     $this->plugins[]  = $file;   
                }
            }
            print_r($this->plugins);
            closedir($handle);
        }
    }

    public function checkPlug($name) {
        if(in_array($name, $this->plugins)){
           return true; 
        }else{
            return false;
        }
    }

    static public function getInstance() {
        if (!empty($xkControl)) {
            return $xkControl;
        } else {
            $xkControl = new XkControl();
            return $xkControl;
        }
    }

}

?>