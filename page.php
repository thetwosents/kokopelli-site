<?php get_header(); ?>
<main id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-content" itemprop="mainContentOfPage">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
<?php the_content(); ?>
</div>
</article>
<?php endwhile; endif; ?>

</main>

<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBE9ikpCz88OCjs-f9bjJjyiYmWYOoR-_Q&callback=initMap&v=weekly"
      defer
    ></script>
<?php get_footer(); ?>