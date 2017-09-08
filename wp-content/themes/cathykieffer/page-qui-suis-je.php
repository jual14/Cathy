<?php
/*
 Template Name: Page Moi
*/
?>

<?php
get_header(); ?>

<div class="main-page">
    <div class="page-margin"><img src="<?php echo get_template_directory_uri(); ?>/img/left-purple.png" alt=""></div>
   
    <?php 
    // WP_Query arguments
    $args = array(
        'category_name' => 'qui-suis-je',
    );

    // The Query
    $query_whoiam = new WP_Query( $args );

    // The Loop
    if ( $query_whoiam->have_posts() ) {
        while ( $query_whoiam->have_posts() ) {
            $query_whoiam->the_post(); ?>
           
    <div class="main-block">
        <h2 class=""><?php the_title(); ?></h2>
        <p class=""><?php the_content(); ?></p>
    </div>

    <?php	}
    } else {
        // no posts found
    }
    // Restore original Post Data
    wp_reset_postdata();
    ?>
    
    <div class="page-margin"><img src="<?php echo get_template_directory_uri(); ?>/img/right-purple.png" alt=""></div>
</div>

<?php
get_footer();