<?php
    $heroText = get_sub_field('heroText');
    $heroImage = get_sub_field('heroImage');
    $heroContentImage = get_sub_field('heroContentImage');
?>

<section class="hero">
    <img class="hero__background" src="<?php echo get_template_directory_uri() . '/assets/images/blocks/hero/hero_bg.jpeg';?>"></img>
    <a href="#" class="hero__arrowLink">
        <img class="hero__arrow" src="<?php echo get_template_directory_uri() . '/assets/images/blocks/hero/hero_arrow.jpeg';?>"></img>
    </a>
    <div class="container">
        <div class="row hero__row">
            <?php if( !empty( $heroImage ) ): ?>
                <div class="col-lg-7 hero__imageWrapper">
                    <img class="hero__image" src="<?php echo esc_url($heroImage['url']); ?>" alt="<?php echo esc_attr($heroImage['alt']); ?>">
                </div>
            <?php endif;?>
            <?php if( $heroText || $heroContentImage) : ?>
                <div class="col-lg-5 hero__contentWrapper">
                    <?php if( $heroText ) : ?>
                        <h1><?php echo $heroText ?></h1>
                    <?php endif;?>
                    <?php if( !empty( $heroContentImage ) ): ?>
                        <img class="hero__ContentImage" src="<?php echo esc_url($heroContentImage['url']); ?>" alt="<?php echo esc_attr($heroContentImage['alt']); ?>">
                    <?php endif;?>
                </div>
            <?php endif;?>
        </div>
    </div>
    <div class="hero__contentHeart">
        <svg width="365" height="256" viewBox="0 0 365 256" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.5" d="M639.235 129.43H288.542L282.833 103.66C282.605 102.292 281.235 101.152 279.636 101.152C278.038 101.152 276.896 102.52 276.668 103.888L267.534 194.426L258.4 47.1029C258.4 45.5065 257.03 44.1382 255.432 44.1382C253.833 44.1382 252.463 45.2785 252.463 46.8749L242.645 162.27L236.251 107.309C236.023 105.713 234.653 104.572 233.054 104.572C231.456 104.572 230.086 105.713 230.086 107.309L227.117 139.921L223.692 131.027C223.235 129.886 222.094 128.974 220.724 128.974H25.2612C24.8045 128.974 24.3479 129.202 23.8912 129.43C10.1905 106.625 2.1985 82.2232 8.13544 59.6459C18.6393 20.1926 54.9459 4.913 86.229 7.42159C114.315 9.70212 144 26.8061 147.425 59.8739C147.654 61.4703 148.795 62.6106 150.394 62.6106C151.992 62.6106 153.362 61.4703 153.362 59.8739C155.874 34.3319 176.653 13.579 206.11 7.64964C229.629 2.86052 263.196 8.56186 280.55 40.2613C292.424 62.1545 291.054 75.3816 291.054 75.6096C290.825 77.206 291.967 78.8024 293.794 79.0304C295.392 79.2585 296.99 78.1182 297.219 76.2938C297.219 75.6096 299.046 61.0142 285.802 37.2966C270.274 8.78991 238.306 -5.12136 204.74 1.72025C178.023 7.19353 157.701 23.8414 150.165 45.9626C140.803 18.1401 112.945 3.77273 86.6857 1.72025C52.6625 -1.0164 13.3873 15.6315 2.19849 58.5056C-20.1792 143.342 135.323 249.386 149.252 255.772C149.709 256 150.165 256 150.622 256C151.079 256 151.535 256 151.992 255.772C158.386 252.807 199.716 224.072 228.259 192.601C229.401 191.233 229.401 189.408 228.031 188.268C226.661 187.128 224.834 187.128 223.692 188.496C197.433 217.459 159.527 244.369 150.622 249.615C140.347 244.141 101.071 217.003 66.3631 182.339C52.6625 168.655 38.5052 152.692 27.3163 135.588H218.212L225.519 154.744C225.975 156.113 227.346 156.797 228.716 156.797C230.086 156.569 231.227 155.428 231.456 154.06L233.054 137.64L239.676 193.513C239.905 195.11 241.046 196.25 242.873 196.25C244.471 196.25 245.841 195.11 245.841 193.513L254.747 89.7489L263.652 232.967C263.652 234.563 265.022 235.931 266.621 235.931C268.219 235.931 269.589 234.791 269.589 233.195L280.778 124.185L282.833 133.763C283.061 135.132 284.432 136.272 285.802 136.272H639.007C640.605 136.272 641.975 134.904 641.975 133.307C642.203 130.799 640.833 129.43 639.235 129.43Z" fill="url(#paint0_linear)"/>
            <defs>
            <linearGradient id="paint0_linear" x1="486" y1="0" x2="486" y2="256" gradientUnits="userSpaceOnUse">
            <stop offset="0.322917" stop-color="white"/>
            <stop offset="1" stop-color="white" stop-opacity="0"/>
            </linearGradient>
            </defs>
        </svg>                            
    </div>
</section>