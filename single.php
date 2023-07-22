<?php get_header(); ?>

<?php generate_breadcrumb_structured_data(); ?>

<nav aria-label="breadcrumb">
  <ol>
    <li><a href="<?php echo get_home_url(); ?>">Spokojna Głowa</a></li>
    <li><a href="<?php echo get_post_type_archive_link(get_post_type()); ?>">Wpisy</a></li>
    <li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></li>
    <li><?php the_title(); ?></li>
  </ol>
</nav>

<article>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</article>

<?php get_footer(); ?>
