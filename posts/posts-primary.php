<div class="ui-s960">

    <?php while (have_posts()) : the_post() ?>

        <div class="ui-card">
            <div class="ui-card-title">
                <?php the_title() ?>
            </div>
            <div class="ui-card-content">
                <?php the_excerpt(); ?>
                <div style="display: flex; justify-content: space-between">
                    <div style="display: flex; padding-top: 16px; align-items: center;">
                        <div class="blue-grey500"
                             style="margin-right: 16px; height: 36px; width: 36px; border-radius: 50%; display: flex; justify-content: center; align-items: center">
                            <span style="font-size: 14px; font-weight: 500;">A</span>
                        </div>
                        <div>
                            <div style="font-size: 14px; text-transform: capitalize; color: rgba(0,0,0,.87);"><?php the_author(); ?></div>
                            <div style="font-size: 14px; text-transform: capitalize; color: rgba(0,0,0,.64);"><?php the_time('d'); ?>
                                de <?php the_time('F'); ?> de <?php the_time('y'); ?></div>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-end;">
                        <a class="ui-button flat" style="color: rgba(0,0,0,.64)" href="<?php the_permalink(); ?>">SAIBA
                            MAIS</a>
                    </div>
                </div>
            </div>
        </div>

        <!--            <aticle class="posts-primary__post">-->
        <!--                <span class="posts-primary__category">--><?php //the_category(',') ?><!--</span>-->
        <!--                <h3 class="posts-primary__title">--><?php //the_title() ?><!--</h3>-->
        <!--                <div class="posts-primary__info">-->
        <!--                    <span>--><?php //the_author(); ?><!--</span> |-->
        <!--                    <span>--><?php //the_time('d'); ?><!-- de --><?php //the_time('F'); ?><!-- de --><?php //the_time('y'); ?><!--</span>-->
        <!--                </div>-->
        <!--                <p>-->
        <!--                    --><?php //the_excerpt(); ?>
        <!--                </p>-->
        <!--                <div class="posts-primary__button-container">-->
        <!--                    <a href="--><?php //the_permalink(); ?><!--" class="posts-primary__read-more">SAIBA MAIS</a>-->
        <!--                </div>-->
        <!---->
        <!--            </aticle>-->

    <?php endwhile; ?>

</div>
