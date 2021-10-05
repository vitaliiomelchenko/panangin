<?php get_header(); ?>

    <div class="pop-up active">
        <h2 class="pop-up__title h2">
            <?php printf(_e('Вход для специалистов здравохранения', 'Panangin'))?>
        </h2>
        <h3 class="h3 pop-up__content">
            
            <?php printf(_e('Если Вы являетесь специалистом здравоохранения, в качестве подтверждения нажмите «ВХОД», чтобы начать работу.', 'Panangin'))?>
        </h3>
        
        <div class="pop-up__button__wrapper">
            <a href="<?php echo home_url('/');?>" class="popup-close button button-secondary"><?php printf(_e('Отмена', 'Panangin'))?></a>
            <a href="#popup-enter" class="popup-enter button button-primary"><?php printf(_e('Вход', 'Panangin'))?></a>
        </div>
    </div>

<?php
/* Template Name: Для специалистов*/
?>
<div class="breadcrumbs">
    <div class="container">
        <?php echo do_shortcode('[wpseo_breadcrumb]') ?>
    </div>
</div>
    <?php 
        if(get_locale() == 'uk'){
            $pageTitle = 'Статті для фахівців';
            $readMoreButton = 'Читати далі';

        }
        elseif(get_locale() == 'ru_RU'){
            $pageTitle = 'Статьи для специалистов';
            $readMoreButton = 'Читать больше';
        }
    ?>
    <section class="professinals">
        <div class="container">
            <div class="page__heading"><?php echo $pageTitle; ?></div>
            <ul class="professionals-post__list">
                <?php

$query = new WP_Query('cat=46');

// Цикл
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();?>
		 <li class="professionals-post row">
               <div class="professionals-post__imageWrapper col-lg-4">
                     <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
                 <div class="professionals-post__contentWrapper col-lg-8">
                   <p>
					   <strong><?php the_title(); ?></strong>
					   <p class="professionals-post__date"><?php echo get_the_date('j F Y'); ?></p>
					   <p  class="professionals-post__content"><?php echo the_excerpt(); ?></p>
					   <a href="<?php echo get_the_permalink(); ?>" class="professionals-post__button"><?php echo $readMoreButton; ?></a>
                  </p>
                </div>
         </li>
<?php	}
} else {
	// Постов не найдено
}
// Возвращаем оригинальные данные поста. Сбрасываем $post.
wp_reset_postdata();?>
            </ul>
        </div>
    </section>
<?php get_footer(); ?>