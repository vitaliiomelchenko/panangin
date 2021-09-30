<?php
/* Template Name: Текст-форте */
?>
<?php get_header(); ?>
<div class="breadcrumbs">
    <div class="container">
        <?php echo do_shortcode('[wpseo_breadcrumb]') ?>
    </div>
</div>
    <section class="instructions">
        <div class="container">
            <div class="text-block-forte">
                <div class="page__heading"></div>
                    <?php the_content(); ?>
            </div>
        </div>
    </section>
    <?php 
       $forteCTAcontent = get_field('forteCTAcontent');
       $forteCTAbutton = get_field('forteCTAbutton');
       $forteCTAimage = get_field('forteCTAimage');
   ?> 
     <?php 
    if( get_locale() == 'uk'){
        $ctaTitle1 = 'Панангін';
        $ctatitle2 = 'Форте';
        $ctaContent = 'Регулярне живлення для сердця';
    }   
    elseif(get_locale() == 'ru_RU'){
        $ctaTitle1 = 'Панангин';
        $ctatitle2 = 'Форте';
        $ctaContent = 'Регулярное питание для сердца';
    }
    ?>
   <section class="forte__cta">
        <div class="container">
            <div class="row forte__cta__row">
                <div class="col-lg-auto forte__cta__content">
                    <h1>
                        <?php echo $ctaTitle1 ?>
                        <span>
                            <svg width="60" height="70" viewBox="0 0 60 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8967 29.1793C11.0084 18.3552 3.34261 21.4426 1.60206 25.2565C-1.17542 31.3223 11.8602 40.4029 4.5647 44.6526C13.6748 44.8342 4.15733 35.3541 5.15722 28.7434C5.78678 24.4574 9.89745 23.4403 16.8967 29.1793Z" fill="#AD004D"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7012 27.932C24.5344 18.3484 32.202 20.3403 34.1464 21.5805C39.0625 24.7375 39.6862 30.2997 37.1915 35.0728C33.376 42.3263 23.5072 46.5355 17.4171 52.9622C13.6383 56.946 11.6206 64.0116 12.3176 66.3793C11.6572 62.17 12.1709 57.4722 15.5828 52.9246C20.2787 46.6483 28.7534 40.5223 31.7251 35.0728C33.8163 31.1641 34.1464 26.6542 29.6339 24.5871C26.699 23.1966 21.6361 25.6395 18.7012 27.932Z" fill="#AD004D"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.5517 14.5874C19.4976 -4.37764 5.50265 -1.37545 1.35319 4.33603C-1.47598 8.25351 0.674192 13.8185 2.86209 19.3103L6.06849 18.1754C5.72898 15.5759 5.72899 13.0497 6.48343 10.8164C8.7845 4.15297 16.1026 3.56717 26.5517 14.5874Z" fill="#AD004D"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.7433 13.7179C37.763 0.264726 49.9741 5.42484 52.9524 7.85747C60.547 14.0496 60.6959 22.9324 55.8562 29.7142C48.5221 40.0345 31.732 44.0888 20.7867 52.5293C15.0907 56.8786 11.1444 64.9505 10.4371 69.7788L9.65527 70C9.6925 63.9553 12.2613 57.4683 17.8084 51.9764C26.4455 43.4254 41.2625 36.017 46.9213 28.2399C50.9792 22.6744 52.1706 15.7082 45.0971 11.2853C40.5552 8.41034 31.8809 10.8798 26.7433 13.7179Z" fill="#AD004D"/>
                                </svg>
                        </span>
                        <?php echo $ctatitle2 ?>
                    </h1>
                    <p>
                    <?php echo $ctaContent ?>
                    </p>
                    <a href="<?php echo esc_url( $forteCTAbutton['url'] ); ?>" class="button button--third"><?php echo esc_html( $forteCTAbutton['title'] ); ?></a>
                </div>
                <div class="col-lg-auto forte__cta__image">
                    <img src="<?php echo esc_url($forteCTAimage['url']); ?>" alt="<?php echo esc_attr($forteCTAimage['alt']); ?>" />
                </div>
            </div>
        </div>
   </section>
<?php get_footer(); ?>