<?php
/*
 Template Name: Page Prestations
*/
?>

<?php get_header(); ?>

<div class="main-page">
    <div class="page-margin"><img src="<?php echo get_template_directory_uri(); ?>/img/left-blue.png" alt=""></div>
    
    <?php 
    // WP_Query arguments
    $args = array(
        'category_name' => 'prestations',
    );

    // The Query
    $query_presta = new WP_Query( $args );

    
    // The Loop
    if ( $query_presta->have_posts() ) {
        while ( $query_presta->have_posts() ) {
            $query_presta->the_post(); ?>
           
    <div class="main-block">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
    </div>

    <?php	}
    } else {
        // no posts found
    }
    // Restore original Post Data
    wp_reset_postdata();
    ?>

    <div class="page-margin"><img src="<?php echo get_template_directory_uri(); ?>/img/right-blue.png" alt=""></div>
</div>

<?php get_footer();