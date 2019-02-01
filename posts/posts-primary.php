<div class="posts-primary">

    <section class="posts-primary__wrapper">

        <?php while (have_posts()) : the_post() ?>

            <aticle class="posts-primary__post">
                <span class="posts-primary__category"><?php the_category(',') ?></span>
                <h3 class="posts-primary__title"><?php the_title() ?></h3>
                <div class="posts-primary__info">
                    <span><?php the_author(); ?></span> |
                    <span><?php the_time('d'); ?> de <?php the_time('F'); ?> de <?php the_time('y'); ?></span>
                </div>
                <p>
                    <?php the_excerpt(); ?>
                </p>
                <div class="posts-primary__button-container">
                    <a href="<?php the_permalink(); ?>" class="posts-primary__read-more">SAIBA MAIS</a>
                </div>

            </aticle>

        <?php endwhile; ?>

    </section>

</div>
