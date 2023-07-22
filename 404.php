<?php get_header(); ?>

<main>
    <article>
        <h1>Strona nie znaleziona</h1>
        <p>Przykro nam, ale strona, której szukasz, nie istnieje.</p>
        <p><a href="<?php echo esc_url(home_url('/')); ?>">Kliknij tutaj</a> aby wrócić na stronę główną.</p>
    </article>
</main>

<?php get_footer(); ?>
