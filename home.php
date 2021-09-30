
<?php get_header(); ?>
<div class="breadcrumbs">
    <div class="container">
        <?php echo do_shortcode('[wpseo_breadcrumb]') ?>
    </div>
</div>
<?php 
    if( get_locale() == 'uk'){
        $blogTitle = 'Корисні поради';

    }   
    elseif(get_locale() == 'ru_RU'){
        $blogTitle = 'Полезные советы';

    }
    ?>
<section>
    <div class="page__heading"><?php echo $blogTitle ?></div>
        <div class="container">
            <ul class="row blog__row">

                <?php 
				$postsPerPage = 6;
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'posts_per_page' => $postsPerPage,
					'category__not_in' => array('48','46'),
					'paged' => $paged
                );    
                $query = new WP_Query( $args ); ?>
                    <?php if ( $query->have_posts() ) : ?>
	                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <li class=" blog__item col-lg-4 col-md-6 col-sm-6">
                                <div class="blog__itemInner">
                                    <div class="blog__itemImageWrapper">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                    </div>
                                    <div class="blog__itemContent">
                                        <h5>
                                            <?php the_title(); ?>
                                        </h5>
                                        <a class="blog-button" href="<?php echo get_the_permalink(); ?>">Читати далі <svg width="17" height="15"
                                                viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.75 7.72559L0.75 7.72559" stroke="#58585B" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502" stroke="#58585B"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                <p><?php esc_html_e( 'Нет постов по вашим критериям.' ); ?></p>
            <?php endif; ?>                
        </ul>
        <div class="pagination">
			<?php
			$amount = $query->found_posts;
			$args = [
                                        'base'         => '/korisni-poradi/page/%#%',
                                        'format'       => '',
                                        'total'        => ceil($amount / $postsPerPage),
                                        'current'      => max(1, get_query_var('paged')),
                                        'show_all'     => False,
                                        'end_size'     => 1,
                                        'mid_size'     => 2,
                                        'prev_next'    => true,
                                        'next_text'    => __('<svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.2757 5.43734C17.5098 5.20322 17.5098 4.82364 17.2757 4.58952L13.4605 0.774351C13.2264 0.540234 12.8468 0.540234 12.6127 0.774351C12.3786 1.00847 12.3786 1.38805 12.6127 1.62217L16.004 5.01343L12.6127 8.40469C12.3786 8.63881 12.3786 9.01839 12.6127 9.2525C12.8468 9.48662 13.2264 9.48662 13.4605 9.2525L17.2757 5.43734ZM0.865234 5.61292L16.8518 5.61292L16.8518 4.41393L0.865234 4.41393L0.865234 5.61292Z" fill="#80a9d1"/>
                                        </svg>
                                        
                    '),
                                        'type'         => 'plain',
                                    ];
                                    
                                    echo paginate_links( $args );
			?></div>
    </div>
</section>
<?php get_footer(); ?>