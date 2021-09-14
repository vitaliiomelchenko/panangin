<?php
    $headingIC = get_sub_field('headingIC');
    $buttonRedIC = get_sub_field('buttonRedIC');
    $buttonBlueIC = get_sub_field('buttonBlueIC');
    $contentIC = get_sub_field('contentIC');
    $imageIC = get_sub_field('imageIC');
?>
<section class="image_content">
        <div class="container">
            <?php if( $headingIC) : ?>
                <div class="image_content__heading text--center">
                    <?php echo  $headingIC; ?>
                </div>
            <?php endif; ?>
            <div class="row image-content__row">
                <div class="col-lg-6 image_content__imageWrapper">
                <?php if( !empty( $imageIC ) ): ?>
                    <img src="<?php echo esc_url($imageIC['url']); ?>" alt="<?php echo esc_attr($imageIC['alt']); ?>" />
                    <div class="image_content__buttonsWrapper">
                        <a href="<?php echo esc_url( $buttonRedIC['url'] ); ?>" class="button button-primary"><?php echo esc_html( $buttonRedIC['title'] ); ?></a>
                        <a href="<?php echo esc_url( $buttonBlueIC['url'] ); ?>" class="button button-secondary"><?php echo esc_html( $buttonBlueIC['title'] ); ?></a>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if( $contentIC) : ?>
                <div class="col-lg-6 image_content__contentWrapper">
                   <?php echo $contentIC ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>