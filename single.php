<?php get_header(); ?>

<?php generate_breadcrumb_structured_data(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<nav aria-label="breadcrumb">
  <ol>
    <li><a href="<?php echo get_home_url(); ?>">Spokojna Głowa</a></li>
    <li><a href="<?php echo get_post_type_archive_link(get_post_type()); ?>">Wpisy</a></li>
    <li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></li>
    <li><?php the_title(); ?></li>
  </ol>
</nav>

<article>
    <header>
        <h1><?php the_title(); ?></h1>
        <p>Tags: 
            <?php
            $posttags = get_the_tags();
            if ($posttags) {
                foreach($posttags as $tag) {
                    echo '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>, '; 
                }
            }
            ?>
        </p>
    </header>

    <section id="intro">
        <h2>Introduction</h2>
        <?php the_content(); ?>
    </section>

    <!-- Add more sections as needed -->

    <footer>
        <!-- Add footer content as needed -->
    </footer>
</article>

<aside>
    <h3>O autorzeee</h3>
    <p><?php the_author_meta('description'); ?></p>
</aside>

<?php endwhile; endif; ?>

<?php get_footer(); ?>