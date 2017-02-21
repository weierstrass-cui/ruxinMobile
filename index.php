<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage 如心
 * @since 如心2017
 */

get_header(); ?>
    <!-- 平台资源 -->
    <section class="mo-dark mo-wideBox moShow">
      <!-- <a href="#contacts" data-waypoint-to="#contacts" class="locate fa-map-marker"><span>找到我们</span></a> -->
      <div class="well-1 container container-wide">
        <h1>平 台 资 源</h1>
        <div class="divider divider-default white">全面渗透大学生市场、多维度传播、<br />全方位曝光，实现强力转化</div>
        <!-- Owl Carousel -->
        <div class="mo-owl-carousel">
          <?php $posts = get_posts("category=13&numberposts=4"); ?>
            <?php if( $posts ):?>
              <?php foreach( $posts as $index => $post ): setup_postdata( $post ); ?>
                <div class="owl-item">
                  <!-- Blockquote -->
                  <blockquote class="quote">
                    <!-- <p class="cite">Male from United States</p> -->
                    <div class="quoteImgBox">
                      <img data-original="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>" alt="<?php the_title(); ?>">
                      <span></span>
                    </div>
                    <div class="h5">
                      <?php the_title(); ?><br />
                      <?php echo get_post_meta($post->ID,'简介',true); ?>
                    </div>
                  </blockquote>
                  <!-- END Blockquote -->
                </div>
              <?php endforeach; ?>
            <?php endif ?>
        </div>
      </div>
    </section>
    <!-- END 平台资源-->

    <!-- 服务体系 -->
    <section class="mo-dark mo-wideBox mo-service moShow">
      <div class="container container-wide">
        <h1>服 务 体 系</h1>
        <div class="divider divider-default white">提供优秀品牌策划、文案撰写、创意设计<br />及全方位的活动落地执行</div>
        <div class="swiper-container swiper-slider">
          <div class="swiper-wrapper">
            <?php  $categorys = get_posts("category=3&numberposts=6"); ?>
            <?php if( $categorys ):?>
              <?php foreach( $categorys as $index => $post ): ?>
                <div class="swiper-slide">
                  <h3 class="white"><?php the_title(); ?></h3>
                  <p><?php echo get_post_meta($post->ID,'手机简介',true); ?></p>
                </div>
              <?php endforeach; ?>
            <?php endif ?>
          </div>
        </div>
      </div>
    </section>
    <!-- END 服务体系-->
    <!-- 成功案例 -->
    <section class="mo-dark mo-light-border mo-wideBox mo-gallery moShow">
      <div class="container container-wide">
        <h1 class="white">成 功 案 例</h1>
        <div class="divider divider-light white">一对一定制服务，展现品牌最大价值，<br />满足并超越客户的期望 </div>
        <div class="swiper-container swiper-slider">
          <div class="swiper-wrapper">
            <?php  $categorys = get_posts("category=4&numberposts=4"); ?>
            <?php if( $categorys ):?>
              <?php foreach( $categorys as $index => $post ): ?>
                <?php if( get_post_meta($post->ID,'手机首页图',true) ){ ?>
                  <div class="swiper-slide" data-slide-bg="<?php echo get_post_meta($post->ID,'手机首页图',true); ?>">
                <?php }else{ ?>
                  <div class="swiper-slide" data-slide-bg="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>">
                <?php } ?>
                  <span></span>
                  <p><a href="<?php bloginfo('home'); ?>/gallery?<?php echo 'post='.$post->ID ?>">了解详情</a></p>
                </div>
              <?php endforeach; ?>
            <?php endif ?>
          </div>
        </div>
      </div>
    </section>
    <!-- END 成功案例-->
    <!-- 关于我们 -->
    <section class="mo-dark mo-light-border mo-wideBox mo-home-about moShow">
      <img data-original="<?php bloginfo('template_url'); ?>/images/aboutBanner.jpg" />
      <h1>关 于 我 们</h1>
      <p>
        <?php echo get_post_meta('54','简介',true); ?>
      </p>
    </section>
    <!-- END 关于我们-->
<?php get_footer(); ?>
