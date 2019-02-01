<header class="primary-header">
    <h2 class="primary-header__title">Blog</h2>



    <?php get_search_form(); ?>

    <nav class="primary-menu">
        <ul class="primary-menu__list">
            <li><a href="<?= home_url('/'); ?>">Home</a></li>
            <?php wp_list_pages([
                'post_type' => 'page',
                'title_li' => '',
                'sort_column' => 'post_date',
                'sort_order' => 'ASC'
            ]); ?>
<!--            --><?php //wp_list_categories([
//                'taxonomy' => 'category',
//                'title_li' => ''
//            ]); ?>
        </ul>
    </nav>
</header>