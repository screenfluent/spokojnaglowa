<?php get_header(); ?>

<article>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
    <?php endwhile; endif; ?>
</article>

<?php get_footer(); ?>
