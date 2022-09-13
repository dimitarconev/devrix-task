<?php

class Config{

    public function __construct(){
        //Set the google maps API key
        add_filter('acf/fields/google_map/api', array( $this, "setGmapsKey" ));

    }

    public function setGmapsKey(  $api ){
        $api['key'] = 'AIzaSyAxhrKP2nTR9aE-FRMMQ-GQ-03FthtEcaI';
        return $api;
    }    
}


$config = new Config();