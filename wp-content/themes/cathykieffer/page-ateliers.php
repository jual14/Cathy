<?php
/*
 Template Name: Page Ateliers
*/
?>

<?php get_header(); ?>

<div class="main-page">
    <div class="page-margin"><img src="<?php echo get_template_directory_uri(); ?>/img/left-pink.png" alt=""></div>
    <div class="main-block">
    <?php 
    
    $args = array(
        'category_name' => 'ateliers',  
    );

    $query_ateliers = new WP_Query($args);
    
    if ( $query_ateliers->have_posts() ) {
        while ( $query_ateliers->have_posts() ) {
            $query_ateliers->the_post();
            $location = get_field('google_maps');
            $date_event = get_field('date');
            $date_horaires = get_field('horaires');
            $date_adresse = get_field('adresse'); ?>
           
        <div class="main-block-content">
            <div class="main-block-text">
                <h2><?php the_title(); ?></h2>
                <span><?php echo $date_event . " - " . $date_horaires; ?></span>
                <p><?php the_content(); ?></p>
                <span><?php echo $date_adresse; ?></span>
            </div>
            <div class="acf-map">
                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
            </div>
        </div>
    
    <?php	}
    } else { ?>
        <div class="main-block-content"><?php echo "<p class='whithout-article'>Aucun atelier n'est programmé pour le moment.</p>"; ?></div>
        
    <?php }
    // Restore original Post Data
    wp_reset_postdata();
    ?>
    </div><!-- End main-block -->
    
    <div class="page-margin"><img src="<?php echo get_template_directory_uri(); ?>/img/right-pink.png" alt=""></div>
</div>

<?php get_footer();

