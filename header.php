<header class="primary-header">
    <h2 class="primary-header__title">Blog</h2>


    <?php get_search_form(); ?>

    <nav class="primary-menu">
        <ul class="primary-menu__list">
<!--            <li><a href="--><?//= home_url('/'); ?><!--">Home</a></li>-->
            <?php
            wp_nav_menu([
                'theme_location' => 'twmenu-principal',
                'container' => 'ul',
                'menu_class' => 'primary-menu__list'
            ]);
?>
        </ul>
    </nav>
</header>