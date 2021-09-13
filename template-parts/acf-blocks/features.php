<?php 
    $headingFeatures = get_sub_field('headingFeatures');
    $backgroundFeatures = get_sub_field('backgroundFeatures');
    $buttonRedFeatures = get_sub_field('buttonRedFeatures');
    $buttonBlueFeatures = get_sub_field('buttonBlueFeatures');
?> 
<section class="features">
    <div class="container">
        <?php if( $headingFeatures ) : ?>
            <div class="features__heading">
                <?php echo $headingFeatures ?> 
            </div>
        <?php endif; ?> 
        <?php if( !empty( $backgroundFeatures ) ): ?>
            <div class="features__background"><img src="<?php echo esc_url($backgroundFeatures['url']); ?>" alt="<?php echo esc_attr($backgroundFeatures['alt']); ?>" /></div>
        <?php endif; ?> 
        <div class="features__row row">
            <?php if( have_rows('leftColumn') ):  ?> 
                <ul class="features__itemRow__left col-md-6">
                    <li class="features__imageMobile">
                        <img src="<?php echo esc_url($backgroundFeatures['url']); ?>" alt="<?php echo esc_attr($backgroundFeatures['alt']); ?>" style="width:100%;"/>
                    </li>
                    <?php  while( have_rows('leftColumn') ) : the_row(); 
                        $itemImageLeftColFeatures = get_sub_field('itemImageLeftColFeatures');
                        $itemContentLeftColFeatures = get_sub_field('itemContentLeftColFeatures');
                    ?>
                        <li class="features__item">
                            <?php if( !empty( $itemImageLeftColFeatures ) ): ?>
                                <div class="features__itemImageWrapper">
                                    <?php echo file_get_contents(esc_url(wp_get_original_image_path($itemImageLeftColFeatures['id']))); ?>
                                </div>
                            <?php endif; ?>
                            <?php if( $itemContentLeftColFeatures ) : ?>
                                <div class="features__itemContent">
                                    <p><?php echo $itemContentLeftColFeatures  ?></p>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php endwhile; ?> 
                </ul>
            <?php endif; ?> 
            <?php if( have_rows('rightColumn') ):  ?> 
                <ul class="features__itemRow__right col-md-6">
                    <?php  while( have_rows('rightColumn') ) : the_row(); 
                        $itemImageRightColFeatures = get_sub_field('itemImageRightColFeatures');
                        $itemContentRightColFeatures = get_sub_field('itemContentRightColFeatures');
                    ?>
                        <li class="features__item">
                            <?php if( !empty( $itemImageRightColFeatures ) ): ?>
                                <div class="features__itemImageWrapper">
                                    <?php echo file_get_contents(esc_url(wp_get_original_image_path($itemImageRightColFeatures['id']))); ?>
                                </div>
                            <?php endif; ?>
                            <?php if( $itemContentRightColFeatures ) : ?>
                                <div class="features__itemContent">
                                    <p><?php echo $itemContentRightColFeatures  ?></p>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php endwhile; ?> 
                </ul>
            <?php endif; ?> 
        </div>
    <div class="features__buttonWrapper">
        <a href="<?php echo esc_url( $buttonRedFeatures['url'] ); ?>" class="button button-primary"><?php echo esc_html( $buttonRedFeatures['title'] ); ?></a>
        <a href="<?php echo esc_url( $buttonBlueFeatures['url'] ); ?>" class="button button-secondary"><?php echo esc_html( $buttonBlueFeatures['title'] ); ?></a>
    </div>
</section>