<?php get_header(); ?>

<section class="food py--3">
      <div class="container">
        <div class="food__header flex justify--between align--center">
          <h2>Best Seller</h2>
          <span></span>
          <a href="#">View All</a>
        </div>
      </div>
      <div class="container with--overflow">
        <div class="food__wrapper">
          <div class="food__slider" id="bestseller">
            
          <?php $bestSeller = new WP_Query(array(
                'post_type' => 'foods',
                'meta_query' => array(
                    array(
                        'key' => 'category',
                        'value' => 'Best Seller',
                        'compare' => 'LIKE',
                    )
                )

          ))?>
          <?php if($bestSeller->have_posts()) : while($bestSeller->have_posts()) : $bestSeller->the_post(); ?>
          
          <div class="food__slider__wrapper">
              <div class="inner">
                <figure>
                  <img src="<?php echo get_field('image')?>" alt="" />
                </figure>

                <div class="content bg--accent text--center clr--light">
                <a href="<?php the_permalink() ?>"></a>
                  <h4>
                    <a href="<?php the_permalink()?>">
                        <?php the_title();?>
                        </a>
                  </h4>
                </div>
                <div class="price">
                  <p>Start at <br /><span><?php the_field('price') ?></span></p>
                </div>
              </div>
            </div>
          <?php endwhile; 
            else :
                echo "No more Jollibee for you!";
            endif;
          wp_reset_postdata();
          ?>
        </div>
      </div>
</section>

<section class="food py--3">
      <div class="container">
        <div class="food__header flex justify--between align--center">
          <h2>Chicken Joy</h2>
          <span></span>
          <a href="#">View All</a>
        </div>
      </div>
      <div class="container with--overflow">
        <div class="food__wrapper">
          <div class="food__slider" id="chickenjoy">
            
          <?php $chickenjoy = new WP_Query(array(
                'post_type' => 'foods',
                'meta_query' => array(
                    array(
                        'key' => 'category',
                        'value' => 'Chicken Joy',
                        'compare' => 'LIKE',
                    )
                )

          ))?>
          
          <?php if($chickenjoy->have_posts()) : while($chickenjoy->have_posts()) : $chickenjoy->the_post(); ?>
          
          <div class="food__slider__wrapper">
              <div class="inner">
                <figure>
                  <img src="<?php echo get_field('image')?>" alt="" />
                </figure>

                <div class="content bg--accent text--center clr--light">
                <a href="<?php the_permalink() ?>"></a>
                  <h4>
                    <a href="<?php the_permalink()?>">
                    <?php the_title();?>
                    </a>
                  </h4>
                </div>
                <div class="price">
                  <p>Start at <br /><span><?php the_field('price') ?></span></p>
                </div>
              </div>
            </div>


          
          <?php endwhile; 
            else :
                echo "No more Jollibee for you!";
            endif;
          wp_reset_postdata();
          ?>

        </div>
      </div>
</section>

<section class="food py--3">
      <div class="container">
        <div class="food__header flex justify--between align--center">
          <h2>Yum Burger</h2>
          <span></span>
          <a href="#">View All</a>
        </div>
      </div>
      <div class="container with--overflow">
        <div class="food__wrapper">
          <div class="food__slider" id="burger">
            
          <?php $yumBurger = new WP_Query(array(
                'post_type' => 'foods',
                'meta_query' => array(
                    array(
                        'key' => 'category',
                        'value' => 'Yum Burger',
                        'compare' => 'LIKE',
                    )
                )

          ))?>
          
          <?php if($yumBurger->have_posts()) : while($yumBurger->have_posts()) : $yumBurger->the_post(); ?>
          
          <div class="food__slider__wrapper">
              <div class="inner">
                <figure>
                  <img src="<?php echo get_field('image')?>" alt="" />
                </figure>

                <div class="content bg--accent text--center clr--light">
                <a href="<?php the_permalink() ?>"></a>
                  <h4>
                    <a href="<?php the_permalink()?>">
                        <?php the_title();?>
                    </a>
                  </h4>
                </div>
                <div class="price">
                  <p>Start at <br /><span><?php the_field('price') ?></span></p>
                </div>
              </div>
            </div>

          
          <?php endwhile; 
            else :
                echo "No more Jollibee for you!";
            endif;
          wp_reset_postdata();
          ?>

        </div>
      </div>
</section>

<section class="food py--3">
      <div class="container">
        <div class="food__header flex justify--between align--center">
          <h2>Breakfast</h2>
          <span></span>
          <a href="#">View All</a>
        </div>
      </div>
        <div class="container with--overflow">
            <div class="food__wrapper">
            <div class="food__slider" id="breakfast">
                
            <?php $Breakfast = new WP_Query(array(
                    'post_type' => 'foods',
                    'meta_query' => array(
                        array(
                            'key' => 'category',
                            'value' => 'Breakfast',
                            'compare' => 'LIKE',
                        )
                    )

            ))?>
            
            <?php if($Breakfast->have_posts()) : while($Breakfast->have_posts()) : $Breakfast->the_post(); ?>
            
            <div class="food__slider__wrapper">
                <div class="inner">
                    <figure>
                    <img src="<?php echo get_field('image')?>" alt="" />
                    </figure>

                    <div class="content bg--accent text--center clr--light">
                    <a href="<?php the_permalink() ?>"></a>
                    <h4>
                        <a href="<?php the_permalink()?>">
                        <?php the_title();?>
                        </a>
                    </h4>
                    </div>
                    <div class="price">
                    <p>Start at <br /><span><?php the_field('price') ?></span></p>
                    </div>
                </div>
            </div>
            
            <?php endwhile; 
                else :
                    echo "No more Jollibee for you!";
                endif;
            wp_reset_postdata();
            ?>

            </div>
        </div>
</section>



<?php get_footer(); ?>