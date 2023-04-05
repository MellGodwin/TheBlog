<?php get_header() ?>


<div class="theContent">
    <div class="container">
        <div class="theContent__wrapper">
            <div class="theContent__head">
                <h1><?php the_title(); ?></h1>
                <?php echo get_the_post_thumbnail() ?>
                <p><?php echo get_the_time('M-y-D') ?></p>
                <p><?php echo the_content() ?></p>
            </div>
            <div class="theContent_side">

            <div class="banner__sidebar">

                <?php

                $args = array(
                    'post_type' => 'blogPost',
                    'posts_per_page' => 3,
                    'offset'  => 1,
                );

                $newQuery = new WP_Query($args)


                ?>

                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();  ?>

                <div class="theContent__item">
                    <?php echo get_the_post_thumbnail() ?>
                    <div class="theContent__content">
                        <h1><?php the_title(); ?></h1>
                        <p><?php echo get_the_time('M-y-D') ?></p>
                        <?php echo get_the_excerpt() ?>
                    </div>
                </div>

                <?php
                  endwhile;
                  else:
                    echo "no available content";
                  endif;
                  wp_reset_postdata();
                ?>
                

            </div>
        </div>
        
    </div>
</div>

<?php get_footer() ?>