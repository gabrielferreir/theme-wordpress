<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="<?php bloginfo('charset'); ?>"
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <meta name="author" content="<?php bloginfo('admin_email'); ?>">
    <meta name="generator" content="Wordpress <?php bloginfo('version'); ?>">
    <?php wp_head(); ?>
</head>
<body>

<?php get_header(); ?>

<section class="primary-introduce">

</section>

<button class="ui-button">TESTE</button>

<?php //get_template_part('sponsors', 'primary'); ?>

<?php get_sidebar(); ?>

<?php get_template_part('posts/posts', 'primary'); ?>

<section class="secundary-introduce">
    <section class="secundary-introduce__wrapper">

    </section>
</section>


<?php get_footer(); ?>

<?php wp_footer(); ?>

</body>
</html>
