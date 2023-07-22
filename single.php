<?php get_header(); ?>

<?php
// Get the post category
$category = get_the_category();
if ($category) {
    $category_link = get_category_link($category[0]->cat_ID);
    $category_name = $category[0]->cat_name;
}

// Get the post title
$post_title = get_the_title();

// Construct the breadcrumb
$breadcrumb = array(
    "@context" => "https://schema.org",
    "@type" => "BreadcrumbList",
    "itemListElement" => array(
        array(
            "@type" => "ListItem",
            "position" => 1,
            "name" => "Home",
            "item" => get_home_url()
        ),
        array(
            "@type" => "ListItem",
            "position" => 2,
            "name" => $category_name,
            "item" => $category_link
        ),
        array(
            "@type" => "ListItem",
            "position" => 3,
            "name" => $post_title,
            "item" => get_permalink()
        )
    )
);

// Encode the breadcrumb in JSON-LD format
$breadcrumb_json = json_encode($breadcrumb);
?>

<!-- Output the breadcrumb structured data -->
<script type="application/ld+json">
<?php echo $breadcrumb_json; ?>
</script>

<?php get_breadcrumb(); ?>
<article>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</article>

<?php get_footer(); ?>
