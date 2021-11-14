<?php
/**
 * Template Name: Portfolio
 */

get_header();


?>

<?php $loop = new WP_Query( array( 'post_type' => 'portfolio_item', 'posts_per_page' => 100 ) ); ?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>

<?php endwhile; ?>


<?php

get_footer();

?>