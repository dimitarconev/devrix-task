<?php

class assetsLoader{

    public function __construct(){

        add_action( 'wp_enqueue_scripts', array( $this, 'loadIncludes' ) );

    }

    public function loadIncludes(){

        wp_enqueue_style( 'gmap-css', EXPERTS_PLUGIN_URL."assets/css/gmap.css" );
        wp_enqueue_script( 'jquery');
        wp_enqueue_script( 'gmap', "https://maps.googleapis.com/maps/api/js?key=AIzaSyAxhrKP2nTR9aE-FRMMQ-GQ-03FthtEcaI", '1.0.0', true );
        wp_enqueue_script( 'gmap-helper', EXPERTS_PLUGIN_URL."assets/js/gmap-acf-helper.js", array(), '1.0.0', true );

    }

}

$assets = new assetsLoader();