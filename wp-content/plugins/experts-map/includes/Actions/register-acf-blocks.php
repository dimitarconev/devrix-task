<?php

class blockBuilder{

    public function __construct(){

        add_action('acf/init', array( $this, 'registerBlocks') );

    }

    public function registerBlocks(){

        if( function_exists('acf_register_block_type') ) {

            acf_register_block_type(array(
                'name'              => 'experts-map',
                'title'             => 'Experts Map',
                'description'       => 'A block that lists Experts on the map',
                'mode'              => 'preview',
                'supports'          => array(
                    'align' => true,
                    'mode' => false,
                    'jsx' => true
                ),
                'render_template' => EXPERTS_PLUGIN_DIR.'/includes/views/expert-block.php',
            ));
        }

    }

}

$blockBuilder = new blockBuilder();