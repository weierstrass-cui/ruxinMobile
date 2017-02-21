<?php
/*
Template Name:成功案例
*/
$cateID = $_GET['cat'];
$postID = $_GET['post'] ? $_GET['post'] : get_posts("category=".$cateID."&numberposts=1")[0]->ID;
get_header(); ?>
    <div class="anliList moShow">
        <?php if( $_GET['mocat'] ){
            $posts = get_posts("category=".$_GET['mocat']."&numberposts=99");
        }else{
            $posts = get_posts("category=4&numberposts=4");
        } ?>
        <?php if( $posts ):?>
          <?php foreach( $posts as $index => $post ): setup_postdata( $post ); ?>
            <div class="oneAnli" style="background:url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>) no-repeat;background-size:100% 100%;">
                <div class="anliMask">
                    <div class="shotTitle"><?php echo get_post_meta($post->ID,'短标题',true); ?></div>
                    <h3><?php the_title(); ?></h3>
                    <div class="time"><?php echo get_post_meta($post->ID,'时间',true); ?></div>
                    <a href="<?php bloginfo('home'); ?>/galleryInfo?<?php echo 'post='.$post->ID ?>"><span>了解详情</span></a>
                </div>
            </div>
          <?php endforeach; ?>
        <?php endif ?>
        <a href="javascript://" class="mo-changeCategory"></a>
        <div class="mo-categroy-list">
            <ul>
                <li <?php if($_GET['mocat'] == ''){ echo ' class="active"';} ?>><a href="<?php bloginfo('home'); ?>/gallery">最新</a></li>
                <?php  $categorys = getchild(4); ?>
                <?php if( $categorys ): ?>
                  <?php foreach( $categorys as $index => $item ): ?>
                    <li <?php if($_GET['mocat'] == $item->term_id){ echo ' class="active"';} ?>>
                        <a href="<?php bloginfo('home'); ?>/gallery?<?php echo 'mocat='.$item->term_id; ?>"><?php echo $item->cat_name ?></a>
                    </li>
                  <?php endforeach; ?>
                <?php endif ?>
            </ul>
        </div>
        <script type="text/javascript">
            $(function(){
                $('.mo-changeCategory').click(function(){
                    $('.mo-categroy-list').toggle();
                });
                $('.mo-categroy-list').click(function(){
                    $('.mo-categroy-list').hide();
                });
            });
        </script>
    </div>
<?php get_footer(); ?>
