<?php
    /* Template Name: Specialist */
?>
<?php get_header(); ?>
<section class="professinals">
        <div class="container">
            <div class="page__heading">Статті для фахівців</div>
            <ul class="professionals-post__list">
            <?php
                $posts = get_posts( array(
                    'numberposts' => 3,
                    'category'    => 0,
                    'orderby'     => 'date',
                    'post_type'   => 'specialist',
                    'suppress_filters' => true,
                ) );
                foreach( $posts as $post ){
                    setup_postdata($post); ?>
                    <li class="professionals-post row">
                        <div class="professionals-post__imageWrapper col-lg-4">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        </div>
                        <div class="professionals-post__contentWrapper col-lg-8">
                                <strong> <?php the_title(); ?></strong>
                                <div class="professionals-post__date"><?php echo get_the_date('n-j-Y'); ?></div>
                                <div class="professionals-post__content"><?php the_excerpt(); ?></div>
                                <a href="<?php echo get_the_permalink(); ?>" class="professionals-post__button">Читать больше </a>
                        </div>
                    </li>
                <?php } wp_reset_postdata(); ?>
            </ul>
        </div>
    </section>
<?php get_footer(); ?>                               
 