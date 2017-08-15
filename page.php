
<?php get_header(); ?>
<!--content-->
<?php get_template_part('mycontent'); ?>
<?php get_template_part('component/title-page'); ?>
<section class="mbr-section article content12 cid-qshC3CRBMR" id="content12-j" data-rv-view="64">
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
             <?php
// TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
endwhile; //resetting the page loop
wp_reset_query(); //resetting the page query
?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>