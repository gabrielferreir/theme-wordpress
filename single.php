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

<?php while (have_posts()) : the_post() ?>

    <aticle class="posts-primary__post">
        <span class="posts-primary__category"><?php the_category(',') ?></span>
        <h3 class="posts-primary__title"><?php the_title() ?></h3>
        <div class="posts-primary__info">
            <span><?php the_author(); ?></span> |
            <span><?php the_time('d'); ?> de <?php the_time('F'); ?> de <?php the_time('y'); ?></span>
        </div>
        <p>
            <?php the_content(); ?>
        </p>

    </aticle>

    <div>
        <a href="<?php comments_link(); ?>">
            <?php comments_number('Sem comentários', 'Um comentário', '% comentários'); ?>
        </a>

        <?php comments_template(); ?>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>

<?php wp_footer(); ?>

</body>
</html>