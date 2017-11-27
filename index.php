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
        <h1>年均接触年轻派人群</h1>
        <div class="divider divider-default white" style="width:100%;font-size:26px;margin-top:2rem;">线下20000+，线上6000000+</div>
        <div class="divider divider-default white" style="width:100%;">全面渗透大学生市场、多维度传播、<br />全方位曝光，实现强力转化</div>
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
    <section class="mo-dark mo-wideBox mo-service moShow">
      <div class="container container-wide">
        <h1>如 心 服 务</h1>
        <div class="row ruxinProductsBox" style="margin:3rem 0 0;width:100%;">
            <div class="ruxinOneProduct rotateYImg" style="width:100%;height:265px;">
              <img style="width:100px;height:100px;margin-top:1rem;" data-original="<?php bloginfo('template_url'); ?>/images/xl.png" />
              <div class="ruxinProducts white">
                <h5 class="white" style="font-size:1.6rem;">建立值得信赖和依赖的客户关系</h5>
                “尊重”客户意见<br />“第一时间”相应客户需求<br />“保质、保量、按时”客户交办的各项任务
              </div>
            </div>
            <div class="ruxinOneProduct rotateYImg" style="width:100%;height:265px;">
              <img style="width:100px;height:100px;margin-top:1rem;" data-original="<?php bloginfo('template_url'); ?>/images/zy.png" />
              <div class="ruxinProducts white">
                <h5 class="white" style="font-size:1.6rem;">品质卓越</h5>
                创作品质“持续稳定”<br />创作品质“经常卓越”
              </div>
            </div>
            <div class="ruxinOneProduct rotateYImg" style="width:100%;height:265px;">
              <img style="width:100px;height:100px;margin-top:1rem;" data-original="<?php bloginfo('template_url'); ?>/images/cx.png" />
              <div class="ruxinProducts white">
                <h5 class="white" style="font-size:1.6rem;">不断创新</h5>
                永远不断地向客户<br />提出“具有新鲜创意的解决方案”
              </div>
            </div>
        </div>
      </div>
    </section>
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
