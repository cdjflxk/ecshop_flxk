<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of XkEcshop
 *
 * @author dejie
 */
class IndexModel extends AdvModel{
    
    protected $serializeField = array(
        'info' => array('tname', 'tkeywords', 'tdescription'),
);

    
}

?>
