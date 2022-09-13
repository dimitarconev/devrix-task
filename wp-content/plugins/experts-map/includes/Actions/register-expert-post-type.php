<?php

class ExpertPostType{

    public function __construct(){

        add_action( 'init', array( $this, 'createExpertsPostType' ) );

    }

    public function createExpertsPostType(){

        register_post_type( 'experts',
        array(
            'labels' => array(
                'name' => __( 'Experts' ),
                'singular_name' => __( 'Expert' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'experts'),
            'show_in_rest' => true,
            'supports' => array( "title" )
  
        )
    );
    }

}

$expert = new ExpertPostType();
