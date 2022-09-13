<?php

class AcfFieldsCreator{

    public function __construct(){

        add_action('acf/init', array( $this, "registerGmapCustomField" ));

    }

    public function registerGmapCustomField(){
        
        if( function_exists('acf_add_local_field_group') ):

            acf_add_local_field_group(array(
                'key' => 'group_63205fce18450',
                'title' => 'Google coordinates',
                'fields' => array(
                    array(
                        'key' => 'field_63205fd4b45ff',
                        'label' => 'Coordinates',
                        'name' => 'coordinates',
                        'type' => 'google_map',
                        'instructions' => '',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'center_lat' => '',
                        'center_lng' => '',
                        'zoom' => '',
                        'height' => '',
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'experts',
                        ),
                    ),
                ),
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => true,
                'description' => '',
                'show_in_rest' => 0,
            ));
            
            endif;		
    }

}

$acfCreator = new AcfFieldsCreator();