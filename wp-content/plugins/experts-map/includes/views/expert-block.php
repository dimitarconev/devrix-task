<?php
    $experts = new WP_Query( array(

        'post_type' => 'experts',
        'post_status' => 'publish',
        'posts_per_page' => -1,

    ));
?>
<div class="acf-map" data-zoom="16">
    <?php
    if ( $experts->have_posts() ){
        foreach ( $experts->posts as $expert ){
            $location = get_field( 'coordinates', $expert->ID );
            ?>
             <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>">
                <h1><?php echo esc_html( $expert->post_title ); ?></h1>
            </div>
            <?php
        }
    }
    ?>
</div>