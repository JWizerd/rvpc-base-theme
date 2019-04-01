<?php if (have_rows('verdicts', 'options')) : ?>
    <?php while(have_rows('verdicts', 'options')) : the_row(); ?>
        <?php 
            $amount = get_sub_field('amount');
            $desc = get_sub_field('description');
            $title = get_sub_field('title');
            $link = get_sub_field('link');
        ?>

        <div class="item">
            <div class="post-details verdict">
                <h3 class="hm-post-headline">
                    <span class="denim"><?= $amount ?></span>
                </h3>
                <h4>
                    <span><?= $title ?></span>
                </h4>
                <p><?= $desc ?></p>
            </div>
        </div><!-- item -->
    <?php endwhile ?>
<?php endif ?>