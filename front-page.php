<?php 

/**
 * template name: Home
 */
?>


<?php get_header(); ?>

    <section class="banner">
      <div class="container">
        <div class="banner__wrapper">
          <h1><?php echo get_field('banner_title') ?> </h1>
          <div class="banner__grid">
            <div class="banner__main">
              <?php

                $args = array(
                  'post_type' => 'blogPost',
                  'posts_per_page' => 1,
                );

                $newQuery = new WP_Query($args)


              ?>

              <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();  ?>  
              <article class="banner__story">
                
                <picture>
                    
                  <source
                    srcset="./img/img-1-sm.webp"
                    media="(max-width:719px)"
                  />
                  <source src=" ./img/img-1.webp" media="(min-width:720px)" />
                  <?php echo get_the_post_thumbnail() ?>
                </picture>
                <div class="banner__story__content">
                  <small><?php echo get_the_date('M-d-Y') ?></small>
                  <h2><?php echo the_title() ?></h2>
                  <p>
                    <?php echo get_the_excerpt() ?>
                  </p>
                  <a href="#">Read More...</a>
                </div>
              </article>
              
              <?php
                  endwhile;
                  else:
                    echo "no available content";
                  endif;
                  wp_reset_postdata();
              ?>

            </div>

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

              <div class="card__sm">
                <?php echo get_the_post_thumbnail() ?>
                <div class="card__sm__content">
                  <small><?php echo get_the_date('M-d-Y') ?> </small>
                  <h3><?php echo the_title() ?></h3>
                  <?php echo get_the_excerpt() ?>
                  <a href="#">Read More...</a>
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
    </section>

    <section class="latest">
      <div class="container">
        <h2><?php echo get_field('latest_title') ?></h2>
        <div class="latest__wrapper">
          <?php

            $args = array(
              'post_type' => 'latestPost',
              'posts_per_page' => 3,
              
            );

            $newQuery = new WP_Query($args)


          ?>

          <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();  ?>
          <div class="card__md">
          <?php echo get_the_post_thumbnail() ?>
            <div class="card__md__content">
              <ul>
                <li><small><?php echo get_the_date('M-d-Y') ?></small>
              </li>
              </ul>
                  <?php
                      $post_tags = get_the_tags();

                      if($post_tags){
                        foreach($post_tags as $tag){
                  ?>
                      <small><?php echo $tag->name ?></small>       
                          
                  <?php    
                        }
                      }
                  ?>
              <h3>
                <?php echo the_title() ?>
              </h3>

              <p>
                <?php echo get_the_excerpt() ?>
              </p>
              <a href="#">Read More...</a>
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
    </section>

    <section class="feature">
      <div class="feature__content">
        <h2><?php echo get_field('feature_title')?> </h2>
        <h3 class="block__header">
            <?php echo get_field('h3_text') ?>
        </h3>
        <p>
        <?php echo get_field('p_text') ?>
        </p>
      </div>

      <div class="container">
        <div class="feature__img">

            <?php
                $image = get_field('feature_img');
                if(!empty($image)):

            ?>
                <img src="<?php echo esc_url($image['url']) ?>" alt="">     


            <?php endif; ?>   

          <picture>
            <source src="<?php echo get_template_directory_uri() ?>./img/img-9-sm.webp" media="(max-width:719px)" />
            <source src="<?php echo get_template_directory_uri() ?>./img/img-9.webp" media="(min-width:720px)" />
            <img src="<?php echo get_template_directory_uri() ?>./img/img-9.webp" alt="blog-img" class="lazy" />
          </picture>
        </div>
      </div>

      <div class="container">
        <div class="feature__wrapper">
          <div class="feature__main">

            <?php

            $args = array(
              'post_type' => 'featurePost',
              'posts_per_page' => 3,
              
            );

            $newQuery = new WP_Query($args)


            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();  ?>
            <article class="card__lg">
            <?php echo get_the_post_thumbnail() ?>
              <div class="card__lg__content">
                <small><?php echo get_the_date('M-d-Y') ?></small>
                <h3>
                  <?php echo get_the_excerpt() ?>
                </h3>
                <p>
                  <?php echo get_the_excerpt() ?>
                </p>
                <a href="#">Read More...</a>
              </div>
            </article>
            <?php
              endwhile;
              else:
                echo "no available content";
              endif;
              wp_reset_postdata();
            ?>
          </div>
          <div class="feature__sidebar">
            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>
            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>

            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>

            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>

            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>

            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
