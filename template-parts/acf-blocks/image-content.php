<?php
    $headingIC = get_sub_field('headingIC');
    $buttonRedIC = get_sub_field('buttonRedIC');
    $buttonBlueIC = get_sub_field('buttonBlueIC');
    $contentIC = get_sub_field('contentIC');
    $imageIC = get_sub_field('imageIC');
?>
<section id="preparat" class="image_content">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/left-imagecontent.png" alt="" class="imageContent__leftDecoration">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/right-imagecontent.png" alt="" class="imageContent__rightDecoration">
    <div class="container">
        <div class="row image-content__row">
            <div class="col-lg-6 image_content__imageWrapper">
                <?php if( !empty( $imageIC ) ): ?>
                    <img src="<?php echo esc_url($imageIC['url']); ?>" alt="<?php echo esc_attr($imageIC['alt']); ?>" class="desktop" />
                    <div class="image_content__buttonsWrapper desktop">
                        <a href="<?php echo esc_url( $buttonRedIC['url'] ); ?>" class="button button-primary"><?php echo esc_html( $buttonRedIC['title'] ); ?></a>
                        <a href="<?php echo esc_url( $buttonBlueIC['url'] ); ?>" class="button button-secondary"><?php echo esc_html( $buttonBlueIC['title'] ); ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <?php if( $contentIC) : ?>
            <div class="col-lg-6 image_content__contentWrapper">
                <?php if( !empty( $imageIC ) ): ?>
                    <img src="<?php echo esc_url($imageIC['url']); ?>" alt="<?php echo esc_attr($imageIC['alt']); ?>" class="mobile" />
                <?php endif; ?>
               <?php echo $contentIC ?>
               <div class="image_content__buttonsWrapper mobile">
                    <a href="<?php echo esc_url( $buttonRedIC['url'] ); ?>" class="button button-primary"><?php echo esc_html( $buttonRedIC['title'] ); ?></a>
                    <a href="<?php echo esc_url( $buttonBlueIC['url'] ); ?>" class="button button-secondary"><?php echo esc_html( $buttonBlueIC['title'] ); ?></a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
