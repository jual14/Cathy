<?php
/*
 Template Name: Page Questions
*/
?>

<?php get_header(); ?>

<div class="main-page">
    <div class="page-margin"><img src="<?php echo get_template_directory_uri(); ?>/img/left-green.png" alt=""></div>
    <div class="main-block">

        <?php 
        // WP_Query arguments
        $args = array(
            'category_name' => 'questions',
            'order'      => 'ASC',
        );

        // The Query
        $query_questions = new WP_Query( $args );

        // The Loop
        if ( $query_questions->have_posts() ) {
            while ( $query_questions->have_posts() ) {
                $query_questions->the_post(); ?>

        <div>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        </div>

        <?php	}
        } else {
            // no posts found
        }
        // Restore original Post Data
        wp_reset_postdata(); ?>

    </div><!-- main-block end    -->
    <div class="page-margin"><img src="<?php echo get_template_directory_uri(); ?>/img/right-green.png" alt=""></div>
</div>

<?php get_footer();