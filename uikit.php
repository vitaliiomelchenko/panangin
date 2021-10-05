<?php get_header(); ?>
<?php 
/*
Template Name: UiKit
*/
?>
<div class="breadcrumbs">
    <div class="container">
        <?php echo do_shortcode('[wpseo_breadcrumb]') ?>
    </div>
</div>
<div class="container">
    <a href="#" class="button button-primary" style="margin-bottom: 20px">Кнопка</a>
    <a href="#" class="button button-secondary" style="margin-bottom: 20px">Кнопка</a>
    <a class="blog-button" href="#" style="margin-bottom: 20px" >Читати далі <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.75 7.72559L0.75 7.72559" stroke="#58585B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502" stroke="#58585B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg>
    </a>
        <p class="font-weight-600">
            font-weight-600
        </p>
        <p class="font-weight-700">
            font-weight-700
        </p>
        <p class="font-weight-400">
            font-weight-400
        </p>
        <h1 class="h1">h1</h1>
        <h2 class="h2">h2</h2>
        <h3 class="h3">h3</h3>
        <h4 class="h4">h4</h4>
        <h5 class="h5">h5</h5>
</div>  
    <div class="pop-up">
        <h2 class="pop-up__title h2">
            Вход для специалистов здравохранения
        </h2>
        <h3 class="h3 pop-up__content">
            Если Вы являетесь специалистом здравоохранения, в качестве подтверждения нажмите «ВХОД», чтобы начать работу.
        </h3>
        <div class="pop-up__button__wrapper">
            <a href="#popup-close" class="button button-secondary">Отмена</a>
            <a href="#popup-enter" class="button button-primary">Вход</a>
        </div>
    </div>
<?php get_footer(); ?>