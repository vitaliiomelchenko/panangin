<?php get_header(); ?>
<?php
/* Template Name: Для специалистов*/
?>
<body>
    <section class="professinals">
        <div class="container">
            <div class="page__heading">Статті для фахівців</div>
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
					   <a href="<?php echo get_the_permalink(); ?>" class="professionals-post__button">Читать больше </a>
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