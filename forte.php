<html lang="en">
<?php
    /* Template Name: Forte */
?>
<?php get_header('forte'); ?>
<?php
    $forteHeroTitle = get_field('forteHeroTitle');
    $forteHeroImage =  get_field('forteHeroImage');
    $forteHeroButton =  get_field('forteHeroButton');
    
?>
<?php if( $forteHeroTitle || $forteHeroImage) : ?>
 <section class="forte__hero" >
       <div class="container">
        <div class="row">
            <?php if( $forteHeroTitle ) : ?> 
            <div class="col-lg-6 forte__heroContent">
                <?php if($forteHeroTitle) : ?>
                    <h1>
                        <?php echo $forteHeroTitle ?>
                    </h1>
                <?php endif;  ?> 
                <?php if( have_rows('heroContentItem') ):?>
                    <ul style="padding-left: 0;">
                        <?php  while( have_rows('heroContentItem') ) : the_row();
                                $forteHeroContent = get_sub_field('forteHeroContent');
                        ?>
                            <?php if($forteHeroContent) : ?> 
                                <li>
                                    <svg width="25" height="31" viewBox="0 0 25 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4405 6.34781C6.53691 -0.923626 1.48517 1.14299 0.26051 3.7454C-1.57648 7.80209 7.0727 14.0019 2.25059 16.834C8.29736 16.9871 2.02096 10.5576 2.63329 6.04164C3.09254 3.20961 5.77149 2.52074 10.4405 6.34781Z" fill="#CE687F"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4356 5.81202C15.3392 -0.464377 20.4674 0.913368 21.7686 1.67878C25.0599 3.7454 25.4426 7.41939 23.8353 10.481C21.3094 15.2266 14.6503 17.9821 10.5936 22.1919C8.06773 24.7943 6.68999 29.3868 7.14924 30.9941C6.68999 28.2387 7.0727 25.177 9.36894 22.1919C12.5071 18.1352 18.1712 14.0785 20.1613 10.481C21.539 7.95518 21.7686 4.97006 18.7835 3.59232C16.7935 2.75036 13.3491 4.35773 11.4356 5.81202Z" fill="#CE687F"/>
                                    </svg>
                                        <?php echo $forteHeroContent ?> 
                                </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                <?php endif;  ?> 
                <a href="<?php echo esc_url( $forteHeroButton['url'] ); ?>" class="button button--third"><?php echo esc_html( $forteHeroButton['title'] ); ?></a>
            </div>
            <?php endif; ?>
            <?php if( !empty( $forteHeroImage ) ): ?>
                <div class="col-lg-6 hero__imageWrapper">
                    <img src="<?php echo $forteHeroImage['url']; ?>">
                </div>
            <?php endif; ?>
        </div>
    </div>
   </section>
<?php endif ; ?>
<?php 
    $forteBlockTitle = get_field('forteBlockTitle');
?>
<section id="forte-features" class="hero__features">
    <div class="container">
        <?php if($forteBlockTitle) : ?> 
            <div class="col-lg-6 offset-lg-3 text--center auditory__heading">
                <?php echo $forteBlockTitle ?> 
            </div>
        <?php endif ; ?>
        <?php if( have_rows('featuresRow') ): ?>
            <ul class="row hero__features__row">
                <?php while( have_rows('featuresRow') ) : the_row(); 
                     $forteFeaturesImage = get_sub_field('forteFeaturesImage');
                     $forteFeaturesContent = get_sub_field('forteFeaturesContent');
                ?>
                    <li class="col-lg-4 hero__features__item col-md-6 col-sm-6">
                        <div class="hero__features__itemInner">
                            <?php if( !empty( $forteFeaturesImage ) ) : ?> 
                                <div class="hero__features__itemImage">
                                    <img src="<?php echo esc_url($forteFeaturesImage['url']); ?>" alt="<?php echo esc_attr($forteFeaturesImage['alt']); ?>" />
                                </div>
                            <?php endif; ?>
                            <?php if($forteFeaturesContent) : ?>
                                <div class="hero__features_itemContent">
                                    <?php echo $forteFeaturesContent ?> 
                                </div>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>

<?php 
    $forteActionTitle = get_field('forteActionTitle');
    $forteActionImage = get_field('forteActionImage');
    $forteActionContent_1 = get_field('forteActionContent_1');
    $forteActionContent_2 = get_field('forteActionContent_2');
    $forteActionContent_3 = get_field('forteActionContent_3');
    $forteActionContent_4 = get_field('forteActionContent_4');
    $forteActionAdditionalContent = get_field('forteActionAdditionalContent');
?>
   <section id="action" class="action" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/подложка.png); background-repeat: no-repeat;">
        <div class="container">
            <?php if($forteActionTitle) : ?>
                <h1 class="forte__action__title"><?php echo $forteActionTitle ?></h1>
            <?php endif; ?>
            <div class="row  hero__action__row">
                <div class="col-lg-auto hero__action__contentWrapper">
                    <?php if($forteActionContent_1) : ?>
                        <div class="hero__action__content">
                        <?php echo $forteActionContent_1 ?>
                            <svg class="hero__action__content__pseudo__right" width="66" height="38" viewBox="0 0 66 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1.02979C14.5 0.529794 45.4 6.1298 61 32.5298" stroke="#AD004D" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="2 2"/>
                                <circle cx="61.5" cy="33.0298" r="4" fill="#AD004D"/>
                            </svg>                            
                        </div>
                    <?php endif; ?>
                    <?php if($forteActionContent_2) : ?>
                        <div class="hero__action__content">
                        <?php echo $forteActionContent_2 ?>
                            <svg class="hero__action__content__pseudo__right" width="66" height="38" viewBox="0 0 66 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 36.9702C14.5 37.4702 45.4 31.8702 61 5.47021" stroke="#AD004D" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="2 2"/>
                                <circle r="4" transform="matrix(1 0 0 -1 61.5 4.97021)" fill="#AD004D"/>
                            </svg>                            
                        </div>
                    <?php endif; ?>   
                </div>
                <?php if( !empty( $forteActionImage ) ): ?> 
                    <div class="col-lg-4 hero__action__imageWrapper">
                        <img class="hero__action__imageBAck" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/круги.png" alt="">
                        <img src="<?php echo esc_url($forteActionImage['url']); ?>" alt="<?php echo esc_attr($forteActionImage['alt']); ?>" />
                    </div>
                <?php endif; ?> 
                <div class="col-lg-auto  hero__action__contentWrapper">
                    <?php if($forteActionContent_3) : ?>
                        <div class="hero__action__content">
                            <?php echo $forteActionContent_3 ?>                        
                            <svg class="hero__action__content__pseudo__left" width="65" height="38" viewBox="0 0 65 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M64.5 1.02979C51 0.529794 20.1 6.1298 4.5 32.5298" stroke="#AD004D" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="2 2"/>
                                <circle r="4" transform="matrix(-1 0 0 1 4 33.0298)" fill="#AD004D"/>
                            </svg>   
                        </div>
                    <?php endif; ?> 
                    <?php if($forteActionContent_4) : ?>
                        <div class="hero__action__content">
                            <?php echo $forteActionContent_4 ?>
                            <svg class="hero__action__content__pseudo__left" width="65" height="37" viewBox="0 0 65 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M64.5 36C51 36.5 20.1 30.9 4.5 4.49999" stroke="#AD004D" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="2 2"/>
                                <circle cx="4" cy="4" r="4" transform="rotate(-180 4 4)" fill="#AD004D"/>
                            </svg>   
                        </div>
                    <?php endif; ?> 
                </div>
            </div>
            <?php if($forteActionAdditionalContent) : ?>
                <div class="hero__action__additionalContent">
                <?php echo $forteActionAdditionalContent ?>
                    <div class="action-left-top-pseudo">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path d="M33.6096 57.2009C47.9113 56.6115 59.0273 44.5398 58.4379 30.2381C57.8485 15.9364 45.7769 4.8204 31.4751 5.40982C17.1734 5.99923 6.05741 18.0709 6.64683 32.3726C7.23624 46.6743 19.3079 57.7903 33.6096 57.2009Z" fill="#ED135A"/>
                                    <path style="mix-blend-mode:multiply" d="M57.9329 36.4562C56.7323 30.7709 53.6068 25.6739 49.084 22.0257C44.5612 18.3776 38.9182 16.4017 33.1075 16.4317C27.2969 16.4617 21.6745 18.4957 17.1896 22.1904C12.7048 25.885 9.63203 31.014 8.4902 36.7114C8.28867 37.7277 8.15282 38.7559 8.0835 39.7896C9.94385 45.1574 13.5169 49.765 18.2525 52.9031C22.9882 56.0411 28.624 57.5358 34.2923 57.1569C39.9607 56.7781 45.3475 54.5467 49.6234 50.8063C53.8993 47.0659 56.8273 42.0238 57.9568 36.4562H57.9329Z" fill="url(#paint0_radial)"/>
                                    <g style="mix-blend-mode:screen">
                                    <g filter="url(#filter0_f)">
                                    <rect x="4" y="4.86829" width="55.8223" height="53.43" fill="url(#pattern0)"/>
                                    </g>
                                    </g>
                                    <g style="mix-blend-mode:color-dodge" opacity="0.25">
                                    <rect x="4.00049" width="55.8224" height="63.0834" fill="url(#pattern1)"/>
                                    </g>
                                    <path style="mix-blend-mode:screen" opacity="0.75" d="M24.9156 28.2554C20.4578 35.2332 13.7033 38.3912 9.81966 35.313C5.93602 32.2348 6.40652 24.0767 10.8883 17.0989C15.37 10.1211 22.0527 6.95519 25.9603 10.0334C29.8679 13.1116 29.3734 21.2696 24.9156 28.2554Z" fill="url(#paint1_radial)"/>
                                    <g opacity="0.8">
                                    <path d="M15.3487 37.5296H12.0293L14.2101 24.6571H17.5102L20.1156 31.5276L22.8754 24.6571H26.2141L28.144 37.5296H24.8053L23.8596 30.1187L20.7525 37.5296H19.4208L16.4488 30.1187L15.3487 37.5296Z" fill="white"/>
                                    <path d="M36.5977 28.9029H39.6856V36.9892C39.6856 37.7612 39.6084 38.4238 39.454 38.977C39.3125 39.5302 38.9972 40.0578 38.5083 40.5595C37.5949 41.4859 36.3275 41.9491 34.7064 41.9491C33.021 41.9491 31.6765 41.4409 30.6729 40.4244C30.1454 39.8712 29.8302 39.2729 29.7273 38.6296H33.1625C33.3555 39.2215 33.838 39.5174 34.6099 39.5174C35.1889 39.5174 35.6457 39.3566 35.9802 39.0349C36.3919 38.6489 36.5977 38.115 36.5977 37.4331V36.5646C35.8772 37.3237 35.0152 37.7033 34.0117 37.7033C32.6736 37.7033 31.6122 37.298 30.8273 36.4874C30.0296 35.664 29.6308 34.6154 29.6308 33.3417C29.6308 31.9779 30.0554 30.8521 30.9045 29.9644C31.7408 29.0895 32.783 28.652 34.031 28.652C35.0731 28.652 35.9287 29.0316 36.5977 29.7907V28.9029ZM34.7643 31.2188C34.2368 31.2188 33.7801 31.4118 33.3941 31.7978C32.9952 32.2095 32.7958 32.6727 32.7958 33.1873C32.7958 33.7277 32.9952 34.1973 33.3941 34.5961C33.7672 34.9692 34.2304 35.1558 34.7836 35.1558C35.324 35.1558 35.7872 34.9628 36.1732 34.5768C36.5591 34.1908 36.7521 33.7277 36.7521 33.1873C36.7521 32.6598 36.5463 32.1902 36.1346 31.7785C35.7614 31.4053 35.3047 31.2188 34.7643 31.2188Z" fill="white"/>
                                    <path d="M41.2156 30.8794L43.5122 28.2933C44.3357 27.3412 44.7924 26.8009 44.8825 26.6722C45.1784 26.2476 45.3263 25.8359 45.3263 25.4371C45.3263 25.1154 45.2298 24.8581 45.0368 24.6651C44.8439 24.4721 44.5737 24.3756 44.2263 24.3756C43.8403 24.3756 43.538 24.4914 43.3192 24.723C43.1005 24.9417 42.9911 25.2248 42.9911 25.5722H41.37C41.3958 24.7873 41.6659 24.1633 42.1806 23.7001C42.6952 23.2241 43.3514 22.9861 44.1491 22.9861C44.9982 22.9861 45.6737 23.2241 46.1755 23.7001C46.6901 24.1633 46.9475 24.7423 46.9475 25.4371C46.9475 25.9388 46.8252 26.3956 46.5808 26.8073C46.3492 27.2061 46.0147 27.65 45.5772 28.1389L44.3807 29.4899H47.0054V30.8794H41.2156Z" fill="white"/>
                                    <path d="M47.9987 26.2796V25.4516H50.2692V23.294H51.1724V25.4516H53.4429V26.2796H51.1724V28.4372H50.2692V26.2796H47.9987Z" fill="white"/>
                                    </g>
                                    <defs>
                                    <filter id="filter0_f" x="0" y="0.868286" width="63.8223" height="61.43" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                    <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur"/>
                                    </filter>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0" transform="translate(-0.228573 -0.507461) scale(0.0142857 0.0149254)"/>
                                    </pattern>
                                    <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image1" transform="translate(-0.442857 -0.0745177) scale(0.0142857 0.0126414)"/>
                                    </pattern>
                                    <radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(32.96 47.9868) rotate(11.16) scale(30.2079)">
                                    <stop stop-color="#770C51"/>
                                    <stop offset="0.25" stop-color="#7A1255" stop-opacity="0.98"/>
                                    <stop offset="0.43" stop-color="#852563" stop-opacity="0.9"/>
                                    <stop offset="0.58" stop-color="#964479" stop-opacity="0.77"/>
                                    <stop offset="0.72" stop-color="#B07199" stop-opacity="0.58"/>
                                    <stop offset="0.86" stop-color="#D0ABC3" stop-opacity="0.35"/>
                                    <stop offset="0.98" stop-color="#F7F1F5" stop-opacity="0.06"/>
                                    <stop offset="1" stop-color="white" stop-opacity="0"/>
                                    </radialGradient>
                                    <radialGradient id="paint1_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(14.2968 15.6729) rotate(38.264) scale(9.80001 11.8734)">
                                    <stop stop-color="white"/>
                                    <stop offset="0.04" stop-color="#F0F0F0"/>
                                    <stop offset="0.19" stop-color="#B1B1B1"/>
                                    <stop offset="0.35" stop-color="#7B7B7B"/>
                                    <stop offset="0.5" stop-color="#4F4F4F"/>
                                    <stop offset="0.64" stop-color="#2D2D2D"/>
                                    <stop offset="0.77" stop-color="#141414"/>
                                    <stop offset="0.9" stop-color="#050505"/>
                                    <stop offset="1"/>
                                    </radialGradient>
                                    <image id="image0" width="111" height="101" xlink:href="data:image/png;base64,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"/>
                                    <image id="image1" width="133" height="112" xlink:href="data:image/png;base64,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"/>
                                    </defs>
                        </svg>
                    </div>
                    <div class="action-left-bottom-pseudo">
                        <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path d="M33.1734 56.3586C47.2645 55.7778 58.2168 43.884 57.636 29.7929C57.0553 15.7018 45.1614 4.74946 31.0703 5.3302C16.9792 5.91093 6.02693 17.8048 6.60767 31.8959C7.18841 45.987 19.0823 56.9393 33.1734 56.3586Z" fill="#ED135A"/>
                            <path style="mix-blend-mode:multiply" d="M57.1382 35.9192C55.9553 30.3176 52.8758 25.2957 48.4196 21.7013C43.9635 18.1069 38.4035 16.1601 32.6785 16.1897C26.9534 16.2192 21.4138 18.2233 16.995 21.8635C12.5761 25.5037 9.54868 30.5571 8.42367 36.1707C8.2251 37.172 8.09125 38.185 8.02295 39.2035C9.8559 44.4923 13.3763 49.032 18.0422 52.1239C22.7081 55.2158 28.2609 56.6884 33.8458 56.3151C39.4307 55.9418 44.7381 53.7433 48.9511 50.058C53.164 46.3727 56.0489 41.4049 57.1618 35.9192H57.1382Z" fill="url(#paint0_radial)"/>
                            <g style="mix-blend-mode:screen">
                            <g filter="url(#filter0_f)">
                            <rect x="4" y="4.22498" width="55.0002" height="52.6432" fill="url(#pattern0)"/>
                            </g>
                            </g>
                            <g style="mix-blend-mode:color-dodge" opacity="0.25">
                            <rect x="4.00049" width="55.0003" height="62.1544" fill="url(#pattern1)"/>
                            </g>
                            <path style="mix-blend-mode:screen" opacity="0.75" d="M24.6077 27.8394C20.2155 34.7144 13.5605 37.8258 9.73407 34.793C5.90762 31.7601 6.37119 23.7222 10.7869 16.8472C15.2027 9.97212 21.787 6.85282 25.637 9.88569C29.487 12.9186 28.9999 20.9565 24.6077 27.8394Z" fill="url(#paint1_radial)"/>
                            <g opacity="0.8">
                            <path d="M27.0565 20.6033V28.7668L33.3499 20.6033H39.7026L31.8359 29.9839L40.4151 40.4036H33.7655L27.0565 31.8245V40.4036H21.9209V20.6033H27.0565Z" fill="white"/>
                            <path d="M40.7765 25.8341V25.1778H42.5765V23.4673H43.2925V25.1778H45.0925V25.8341H43.2925V27.5446H42.5765V25.8341H40.7765Z" fill="white"/>
                            </g>
                            <defs>
                            <filter id="filter0_f" x="0" y="0.224976" width="63.0002" height="60.6432" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur"/>
                            </filter>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0" transform="translate(-0.228573 -0.507461) scale(0.0142857 0.0149254)"/>
                            </pattern>
                            <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image1" transform="translate(-0.442857 -0.0745177) scale(0.0142857 0.0126414)"/>
                            </pattern>
                            <radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(32.5331 47.28) rotate(11.16) scale(29.763)">
                            <stop stop-color="#770C51"/>
                            <stop offset="0.25" stop-color="#7A1255" stop-opacity="0.98"/>
                            <stop offset="0.43" stop-color="#852563" stop-opacity="0.9"/>
                            <stop offset="0.58" stop-color="#964479" stop-opacity="0.77"/>
                            <stop offset="0.72" stop-color="#B07199" stop-opacity="0.58"/>
                            <stop offset="0.86" stop-color="#D0ABC3" stop-opacity="0.35"/>
                            <stop offset="0.98" stop-color="#F7F1F5" stop-opacity="0.06"/>
                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                            </radialGradient>
                            <radialGradient id="paint1_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(14.1452 15.4421) rotate(38.264) scale(9.65569 11.6985)">
                            <stop stop-color="white"/>
                            <stop offset="0.04" stop-color="#F0F0F0"/>
                            <stop offset="0.19" stop-color="#B1B1B1"/>
                            <stop offset="0.35" stop-color="#7B7B7B"/>
                            <stop offset="0.5" stop-color="#4F4F4F"/>
                            <stop offset="0.64" stop-color="#2D2D2D"/>
                            <stop offset="0.77" stop-color="#141414"/>
                            <stop offset="0.9" stop-color="#050505"/>
                            <stop offset="1"/>
                            </radialGradient>
                            <image id="image0" width="111" height="101" xlink:href="data:image/png;base64,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"/>
                            <image id="image1" width="133" height="112" xlink:href="data:image/png;base64,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"/>
                        </defs>
                        </svg>
                    </div>
                    <div class="action-right-top-pseudo">
                        <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path d="M33.1734 56.3586C47.2645 55.7778 58.2168 43.884 57.636 29.7929C57.0553 15.7018 45.1614 4.74946 31.0703 5.3302C16.9792 5.91093 6.02693 17.8048 6.60767 31.8959C7.18841 45.987 19.0823 56.9393 33.1734 56.3586Z" fill="#ED135A"/>
                            <path style="mix-blend-mode:multiply" d="M57.1382 35.9192C55.9553 30.3176 52.8758 25.2957 48.4196 21.7013C43.9635 18.1069 38.4035 16.1601 32.6785 16.1897C26.9534 16.2192 21.4138 18.2233 16.995 21.8635C12.5761 25.5037 9.54868 30.5571 8.42367 36.1707C8.2251 37.172 8.09125 38.185 8.02295 39.2035C9.8559 44.4923 13.3763 49.032 18.0422 52.1239C22.7081 55.2158 28.2609 56.6884 33.8458 56.3151C39.4307 55.9418 44.7381 53.7433 48.9511 50.058C53.164 46.3727 56.0489 41.4049 57.1618 35.9192H57.1382Z" fill="url(#paint0_radial)"/>
                            <g style="mix-blend-mode:screen">
                            <g filter="url(#filter0_f)">
                            <rect x="4" y="4.22498" width="55.0002" height="52.6432" fill="url(#pattern0)"/>
                            </g>
                            </g>
                            <g style="mix-blend-mode:color-dodge" opacity="0.25">
                            <rect x="4.00049" width="55.0003" height="62.1544" fill="url(#pattern1)"/>
                            </g>
                            <path style="mix-blend-mode:screen" opacity="0.75" d="M24.6077 27.8394C20.2155 34.7144 13.5605 37.8258 9.73407 34.793C5.90762 31.7601 6.37119 23.7222 10.7869 16.8472C15.2027 9.97212 21.787 6.85282 25.637 9.88569C29.487 12.9186 28.9999 20.9565 24.6077 27.8394Z" fill="url(#paint1_radial)"/>
                            <g opacity="0.8">
                            <path d="M27.0565 20.6033V28.7668L33.3499 20.6033H39.7026L31.8359 29.9839L40.4151 40.4036H33.7655L27.0565 31.8245V40.4036H21.9209V20.6033H27.0565Z" fill="white"/>
                            <path d="M40.7765 25.8341V25.1778H42.5765V23.4673H43.2925V25.1778H45.0925V25.8341H43.2925V27.5446H42.5765V25.8341H40.7765Z" fill="white"/>
                            </g>
                            <defs>
                            <filter id="filter0_f" x="0" y="0.224976" width="63.0002" height="60.6432" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur"/>
                            </filter>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0" transform="translate(-0.228573 -0.507461) scale(0.0142857 0.0149254)"/>
                            </pattern>
                            <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image1" transform="translate(-0.442857 -0.0745177) scale(0.0142857 0.0126414)"/>
                            </pattern>
                            <radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(32.5331 47.28) rotate(11.16) scale(29.763)">
                            <stop stop-color="#770C51"/>
                            <stop offset="0.25" stop-color="#7A1255" stop-opacity="0.98"/>
                            <stop offset="0.43" stop-color="#852563" stop-opacity="0.9"/>
                            <stop offset="0.58" stop-color="#964479" stop-opacity="0.77"/>
                            <stop offset="0.72" stop-color="#B07199" stop-opacity="0.58"/>
                            <stop offset="0.86" stop-color="#D0ABC3" stop-opacity="0.35"/>
                            <stop offset="0.98" stop-color="#F7F1F5" stop-opacity="0.06"/>
                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                            </radialGradient>
                            <radialGradient id="paint1_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(14.1452 15.4421) rotate(38.264) scale(9.65569 11.6985)">
                            <stop stop-color="white"/>
                            <stop offset="0.04" stop-color="#F0F0F0"/>
                            <stop offset="0.19" stop-color="#B1B1B1"/>
                            <stop offset="0.35" stop-color="#7B7B7B"/>
                            <stop offset="0.5" stop-color="#4F4F4F"/>
                            <stop offset="0.64" stop-color="#2D2D2D"/>
                            <stop offset="0.77" stop-color="#141414"/>
                            <stop offset="0.9" stop-color="#050505"/>
                            <stop offset="1"/>
                            </radialGradient>
                            <image id="image0" width="111" height="101" xlink:href="data:image/png;base64,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"/>
                            <image id="image1" width="133" height="112" xlink:href="data:image/png;base64,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"/>
                        </defs>
                        </svg>
                    </div>
                    <div class="action-right-bottom-pseudo">
                        <svg width="78" height="80" viewBox="0 0 78 80" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path d="M41.1295 71.7286C59.0635 70.9895 73.0027 55.852 72.2636 37.9179C71.5245 19.9839 56.3869 6.04466 38.4529 6.78378C20.5189 7.5229 6.57964 22.6605 7.31876 40.5945C8.05787 58.5285 23.1955 72.4678 41.1295 71.7286Z" fill="#ED135A"/>
                            <path style="mix-blend-mode:multiply" d="M71.6306 45.7153C70.1251 38.586 66.2058 32.1945 60.5343 27.6198C54.8629 23.0451 47.7866 20.5674 40.5002 20.605C33.2138 20.6426 26.1635 23.1932 20.5395 27.8262C14.9156 32.4592 11.0624 38.8908 9.63061 46.0353C9.37789 47.3097 9.20754 48.599 9.12061 49.8953C11.4534 56.6264 15.9339 62.4042 21.8723 66.3393C27.8107 70.2744 34.8779 72.1486 41.9859 71.6735C49.0939 71.1985 55.8488 68.4004 61.2107 63.71C66.5726 59.0196 70.2443 52.697 71.6606 45.7153H71.6306Z" fill="url(#paint0_radial)"/>
                            <g style="mix-blend-mode:screen">
                            <g filter="url(#filter0_f)">
                            <rect x="4" y="6.10474" width="69.9999" height="67.0001" fill="url(#pattern0)"/>
                            </g>
                            </g>
                            <g style="mix-blend-mode:color-dodge" opacity="0.25">
                            <rect x="4.00049" width="70" height="79.1052" fill="url(#pattern1)"/>
                            </g>
                            <path style="mix-blend-mode:screen" opacity="0.75" d="M30.2275 35.4317C24.6375 44.1817 16.1675 48.1417 11.2975 44.2817C6.42749 40.4217 7.01749 30.1917 12.6375 21.4417C18.2575 12.6917 26.6375 8.72171 31.5375 12.5817C36.4375 16.4417 35.8175 26.6717 30.2275 35.4317Z" fill="url(#paint1_radial)"/>
                            <g opacity="0.8">
                            <path d="M18.2309 47.0612H14.0684L16.803 30.9194H20.9413L24.2084 39.5348L27.6691 30.9194H31.8558L34.2758 47.0612H30.0891L28.9033 37.7682L25.007 47.0612H23.3372L19.6103 37.7682L18.2309 47.0612Z" fill="white"/>
                            <path d="M44.8766 36.2435H48.7487V46.3836C48.7487 47.3516 48.6519 48.1825 48.4583 48.8762C48.2808 49.57 47.8856 50.2315 47.2725 50.8607C46.127 52.0223 44.5378 52.6031 42.505 52.6031C40.3915 52.6031 38.7055 51.9658 37.4471 50.6913C36.7856 49.9975 36.3903 49.2473 36.2612 48.4406H40.5689C40.8109 49.1828 41.416 49.5539 42.384 49.5539C43.11 49.5539 43.6827 49.3522 44.1022 48.9488C44.6185 48.4648 44.8766 47.7953 44.8766 46.9402V45.8512C43.9731 46.8031 42.8922 47.279 41.6338 47.279C39.9559 47.279 38.6248 46.7708 37.6407 45.7544C36.6404 44.7218 36.1402 43.4069 36.1402 41.8097C36.1402 40.0995 36.6726 38.6878 37.7375 37.5746C38.7862 36.4775 40.093 35.9289 41.658 35.9289C42.9648 35.9289 44.0377 36.4049 44.8766 37.3568V36.2435ZM42.5776 39.1476C41.9161 39.1476 41.3433 39.3896 40.8593 39.8736C40.3592 40.3899 40.1091 40.9707 40.1091 41.6161C40.1091 42.2937 40.3592 42.8826 40.8593 43.3827C41.3272 43.8506 41.908 44.0845 42.6018 44.0845C43.2794 44.0845 43.8602 43.8425 44.3442 43.3585C44.8282 42.8745 45.0702 42.2937 45.0702 41.6161C45.0702 40.9546 44.8121 40.3657 44.2958 39.8494C43.8279 39.3815 43.2552 39.1476 42.5776 39.1476Z" fill="white"/>
                            <path d="M50.6674 38.722L53.5472 35.4791C54.5798 34.2852 55.1526 33.6076 55.2655 33.4463C55.6366 32.9139 55.8221 32.3976 55.8221 31.8974C55.8221 31.4941 55.7011 31.1714 55.4591 30.9294C55.2171 30.6874 54.8783 30.5664 54.4427 30.5664C53.9587 30.5664 53.5795 30.7116 53.3052 31.002C53.031 31.2763 52.8938 31.6312 52.8938 32.0669H50.861C50.8932 31.0827 51.2321 30.3002 51.8774 29.7194C52.5228 29.1224 53.3456 28.824 54.3459 28.824C55.4107 28.824 56.2577 29.1224 56.8869 29.7194C57.5323 30.3002 57.8549 31.0262 57.8549 31.8974C57.8549 32.5267 57.7017 33.0994 57.3951 33.6157C57.1047 34.1158 56.6853 34.6724 56.1367 35.2855L54.6363 36.9796H57.9275V38.722H50.6674Z" fill="white"/>
                            <path d="M59.1732 32.9539V31.9157H62.0204V29.2101H63.153V31.9157H66.0001V32.9539H63.153V35.6596H62.0204V32.9539H59.1732Z" fill="white"/>
                            </g>
                            <defs>
                            <filter id="filter0_f" x="0" y="2.10474" width="77.9999" height="75.0001" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur"/>
                            </filter>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0" transform="translate(-0.228573 -0.507461) scale(0.0142857 0.0149254)"/>
                            </pattern>
                            <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image1" transform="translate(-0.442857 -0.0745177) scale(0.0142857 0.0126414)"/>
                            </pattern>
                            <radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(40.3152 60.1744) rotate(11.16) scale(37.88)">
                            <stop stop-color="#770C51"/>
                            <stop offset="0.25" stop-color="#7A1255" stop-opacity="0.98"/>
                            <stop offset="0.43" stop-color="#852563" stop-opacity="0.9"/>
                            <stop offset="0.58" stop-color="#964479" stop-opacity="0.77"/>
                            <stop offset="0.72" stop-color="#B07199" stop-opacity="0.58"/>
                            <stop offset="0.86" stop-color="#D0ABC3" stop-opacity="0.35"/>
                            <stop offset="0.98" stop-color="#F7F1F5" stop-opacity="0.06"/>
                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                            </radialGradient>
                            <radialGradient id="paint1_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(16.9117 19.6535) rotate(38.264) scale(12.289 14.889)">
                            <stop stop-color="white"/>
                            <stop offset="0.04" stop-color="#F0F0F0"/>
                            <stop offset="0.19" stop-color="#B1B1B1"/>
                            <stop offset="0.35" stop-color="#7B7B7B"/>
                            <stop offset="0.5" stop-color="#4F4F4F"/>
                            <stop offset="0.64" stop-color="#2D2D2D"/>
                            <stop offset="0.77" stop-color="#141414"/>
                            <stop offset="0.9" stop-color="#050505"/>
                            <stop offset="1"/>
                            </radialGradient>
                            <image id="image0" width="111" height="101" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG8AAABlCAYAAABDXr0GAAAACXBIWXMAAAsSAAALEgHS3X78AAAOTUlEQVR4Xu2c23LbxrKG/+6eGRCkKFl25Dip7NTKulQu/QDxSySvE/l14gfIrV/Al86VL1yrvC1LTHSgRBKHme59AUBmtGR77YM3iSx8VVMAIYoU8KF7jhCZGQb6CX/qDQPbyyCvxwzyeswgr8cM8nrMIK/HDPJ6zCCvxwzyeswgr8cM8nrMIK/HDPJ6zCCvxwzyeswgr8cM8nrMIK/HDPJ6zCCvxwzyeswgr8cM8nrMIK/HDPJ6zCCvxwzyeswgr8e4T72hR9AHjv9ln6Tpqzz6xLbD7toSEewv8HhUL9ImEREAevr0KaP5mxmA/Pbbb+7Vq1cegD8+Ps4AhJOTk+zk5CQDENpjvi3uxYsX7vnz5/LLL790n0H4cMRuPbTNNyARdX8fPX/+nKfTKe3t7fFoNOL5fC4hBA4hiIiwiDAz82QyAQAsFguMx2M1M1VV3dvbS7PZTGOMWpalLpdLPTw8VDTR2BWgR2l2m+URWmkPHz7ky8tLmc1m7ttvv5WUkgPgsyxz3nvnvXd5ngsRcQihiyRrxaUQQkwpRVWNo9EoppRiSinVdZ1Wq1VaLpd6enqqT5486WQCPZC4dfKIiI6Ojujw8JAAyDfffCMXFxc+hOBjjGE6nQbnXDYajQIRZd77ICI+hOCISLz3DAAioiKSVDWaWc3MlYhUKaUqpVTFGGvnXDUajeq6rmNRFPGbb75JALQt69G4lWyVvE7cDz/8wK9fv3aTycTt7u6GsixHk8lkxMx5CCEnorFzLg8hjJxzmYhkzByyLBMRYQBgZiWiREQVM1dEVBJRkVIqiKhg5iLGWFRVVU4mk6Isy2q1WtWj0aiez+fp8PAwPX361I6OjmxbGzdbI68T99VXX8n+/r47Pz8P0+l0lOd5LiITEdkRkalzbkdEdrIsGzPz2DmXe+8z51wQESciTERgZhWRCKASkRJAAWDVlmVXzGxhZsvuZ4vFonzw4EG5WCzi3/72t4gtjsKtkLcuDoBPKWVZluXOuR0i2vXe72VZtici97z3uyGEKTPvOOdu5DFzCCE0rRZmiIiaWXLOVURUAiiYedWKWhLRtZldE9GVql4R0VVK6TrGuAghLM2sCCFUJycn8fHjxwlbKHDj8tbFHR8f+93d3ZFzbgxgdzQa3XPO3ffe33fOPQgh7IvInnNu13s/cc7lItKlTi8NLCI3aZOZ6zZ1lkRUoBG3JKJrAFeqOjezSzO7UNULVb10zs2J6LqqqlVVVSWA+vHjx6lp/G74gq2x8U760dERAeDFYuGyLMvquh5XVbUXQrhfVdUXKaWHqnqgql+o6n3n3F5KaSelNHbOjUQkOOd8mzKFmck5B2Y2Zk7rAkWkNLOSmZdmtiSiKwBzVb0AcJZS2iGiPMYYzMzFGCXGSFdXV/TixYvKzBJtUQd/o5FHRPTjjz/yo0eP3Hg8HuV5PgFwj5kfeO8fhhAeicgjEfkyhPDAObfvnJs658be+xEzZ845J13IMbOIUJs2TUSUmZWZIxF1pWLmwswKIlq0Ai/M7AzA7ymlmarOVPV3AGcxxsvVarWo67p4+/ZtfXx8nLalESNHR0efes9ng4g4xihEFJxzeV3XUzO7T0QPzewrM/taVb8G8MjMHqaUHpjZnqpOY4wTVc1jjKMYYxZj9Ckl325dV2KMvq5rH2MMKaXQvnekqllKaZRSGsUYM1UNVVWFlJKr65pVFTFGq6pKi6JQEVHnnB4eHtp3332HJ0+ebFzextJmG3U0mUxERPxqtcq999OU0n5K6cA592VK6SsReVTX9YH3fk9Eduq6zkQkiIg454SZiZmpjThq6zuISBd9Ru9bn0pEXV04YuYcQE5EuZnlZjYyswDAmRmpKlTVAGhKKQHQ169f2+HhYY1mEGGjAjcmDwD29/d5tVpJXdeBmXNVnRLRfgjhQUrpoK7rA+fcFyKyH2PcYebcOeeb7NjUb62kLlWCiIiZ4ZyzVizawiJibV2ozOyJyBNRYObQSvNoxLGqwsw0xpgAdCM0aTKZJADa9gE3Wv9tUh6dn58TAOecC1VV5dL04/ZSSvsicl9E9kVkj5l3RGTcinNd3dbJ6qKtE9ju33W8k8mtRGFmIaKusJk1TUqzZGa1mdUppTKlVJpZtVwu6/l8ngComaVPneTnZGMNlp9++klms5k/ODgYe+/vmdmXIvIfzPwdEf1dRL5l5q9F5D4zT7ltnDAzt8Juompd0oeO3RJpzAwi6qIwMXONpqN+RURnZnaiqv8J4B+q+o+U0hszO0kpnQG4ds6Vx8fH6eeff9aPn+nnYyOR19Z3ODg4oKIoOMboRCSrqipn5rGIjJl5zE29lDGzb6OEua3jPibqUz+7lWa7zwQzdx3xBKA2s8KaEZgrAPMY47WZLYuiKMuyjC9fvlSipvP38TP+PGxEHgDMZjOaTqdUliWrqgBwRBSI6Gaskohu0iRzE3G3xX2qfEhsl0bX6knXNmwMQARQmtkegHtEtBdj3CWiCzPLyrL0AMrvv/+enj179tHz/JxsTB4AlGVJKSWq65qdcwxAiOimHuI22jpp7cUFM2N9/39S1utGbuo/ar/XE1FGRGMzmwKYmtkuEe2klCYppZGq+rqu5eLigtpBhn+vyAOAd+/eIc9zOOcQYySgWaLQRgMA/EnU7e16+V/KpLXtjUAAOYAJgImZTcwsb/uHLqUkWZYxmhS7ETYm7/nz53j8+LGJiMUYjYgSmguR2n0lIuVmjBJEZG0E/pOs/0OZ1H5HJzAAGDHzSFVHADIz8ykl55zjq6srevfu3caWUWxMHgALIdhqtTIRSQCiqtZEVAGoANQAIjWdam3lfVDcbVmfev0BceAWatK2IyJnZqGV6czMqSqXZcn7+/u0WCy65Rr/76lzI/LMzIgIx8fHNplMEhFFAJU1440rAAU1MwAlgJqaSVUhom6urrvQH02pH9r/F451dSxx92UAr70kIsKbN28+ep6fm43Ia7HJZKKr1SrleV63neAlgAWA67YsAUyoSV+dvI8K/O9IvC2vfW23ihKRok3j7Y23iUD7JzYpDy9fvrSDg4OkqpVzrlDVBYArAJdmNieiXTSNhYyIXHvHOwDcXmy6S9pdUj8kbu2YMbNR23EXkUhEtYh084EVmr5f9N6rqupsNrODg4ONDZFtUp4BsCzLUl3XtaquVPUawCUzn6vqHoAdNC0+T03EdY0D13i7kUUfkvcpkfQ+2rptYuaam3UvBTOvRGQFYMXMBRFVRVHEEILmeW7Pnj3biDhgs/IAQN+8eZPu379fM3PhnLs2s0siOiOiHVUdU9Nk93i/QDhvo8OhqYeok0T050j8F4UaEXWzD4mZIzNXzLwiooWIXDHzNREtnHMrESnquq6dc+n09HRjQ2PABuV1jRYAOh6P6/l8XsQYF865SzTRlptZhibKpP21blneiJrRGMH7uvC2uBupt4VSI/9mX5qpoi7iChFZENEVM18y84WIXACYp5SuvfdFURT12dlZmk6nG13XsjF5a+ibN2/SwcFBtVwuVymlufc+qKqnpn4TMwM1fb+IpguxQ0SjtSa8oG0N0nvsI/I6gcbMGmPslkqUzLxopZ2LyB9EdCYiZ8x8mVJaqGohIvXDhw/Tr7/+ujFxwIblrUVfms1mcX9/vyjLUszMUdPP4rYtkMwsoun/dd2Irj7MWoFdhDLQBR7RbWldmmyLcrPOpWbmkpmXzDxn5jMROVXVU2Y+NbMzM7vIsuz64uKiBFB777U9hY0J3Kg84EagAYjn5+e0t7fHVVWxiJCqAs28WVTVipo+4ALAPoBdvBfYpVGPdnx0XR6AP0UcNVF3szgJQCkiS2a+IqILZv49pXTCzO+Y+VRE/hCReVEUS+99eXl5GV+9erW+NH4jbFxei6Gpy+Ll5WUJgPI8h4hYSikRUa2qNwuGrJmi2QOwa2Y7RDSmZinDXQIBgNqIAzU3yvqqspKZV6p6LSKXRHTOzDNmPmXmE+fcqaqeqeoVM69ms1n99u3bjUcdsCXy1tNnd2y1Wtl4PFZVjapaicgqpbRg5m6d5T0i2rNmxH8CYExNPXjTyGnNERFBVW/qOQCJmWtVrZi5UNUFM1+Z2QURnTHzH0T0u3Pud1U9A3AZQlicnZ2VJycn66uoN8rGZtLvorvYAATNjRUAjEaj0VhVJ6o6BbDLzHtmtmvNfNuUiKYAxmi6EV3XwhERo4m67vMNgDJzBFBzsxB3RUQLZp6LyCWAC2Y+56bBcpFSmhPRoq7rYjabVWhuMN101AFbJg/4k0BGI9AByNoyDiGMVXUHwI418207zDwxswnaBgyaTr2guQlu5AEwZu5mLm7LuwJwJSJzIpqb2bWZXed5vqqqqtw2ccCWpM111lKooukWKNplCQCqqqq6RsscTbR1JQcwQiPPUTuMBqBr+ICZTVWViKKZRWqfYSCiVYxxyU03YRljXMYYV977wsyq2WwWsWXigC2MvHVuRWEXSQ5NWszQplW8j8zQFnHOiZl1jy53mHNO0TZYqJ1+4qabUNR1XTJz6Zwr5/N5jeaGuXlmb5vEAVsuD7gRCLyX2InsUqpfK92x9WfXu9+1EALwfpRG6f0S+FpE6uvr6xrNQMBNpLXFtk0c0AN5HR+QuC6zK3f9s4D1dSbdkFYnJq2V7nX3cwOwsVmDT9EbeR23JK4XvrXF2naddYl6a7tetlZaR+/krXNL5F3b2/vrJ2t3bbdd2Dq9lncXa0I/SZ9E3cVfTt6/E734D0gDdzPI6zGDvB4zyOsxg7weM8jrMYO8HjPI6zGDvB4zyOsxg7weM8jrMYO8HjPI6zGDvB4zyOsxg7weM8jrMYO8HjPI6zGDvB4zyOsxg7weM8jrMYO8HjPI6zGDvB4zyOsx/wWKX4kBxoECWwAAAABJRU5ErkJggg=="/>
                            <image id="image1" width="133" height="112" xlink:href="data:image/png;base64,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"/>
                            </defs>
                        </svg>
                    </div>
                </div>
            <?php endif; ?> 
        </div>
   </section>
<?php 
    $forteAuditoryTitle = get_field('forteAuditoryTitle');
?>
<section id="forte__auditory" class="forte-auditory"> 
    <div class="container">
        <?php if($forteAuditoryTitle) : ?> 
                <h1 class="forte__auditory__heading"><?php echo $forteAuditoryTitle ?> </h1>
        <?php endif;?>
            <?php if( have_rows('auditoryRow') ): ?> 
                <ul class="row forte-auditory__row">
                    <?php while( have_rows('auditoryRow') ) : the_row(); 
                        $forteAuditoryItemImage = get_sub_field('forteAuditoryItemImage');
                        $forteAuditoryItemContent = get_sub_field('forteAuditoryItemContent');
                    ?> 
                        <li class="col-lg-3 forte-auditory__item col-md-6 col-sm-6">
                            <div class="forte-auditory__itemInner">
                                <?php if( !empty( $forteAuditoryItemImage ) ): ?> ?>
                                    <div class="forte-auditory__itemImage">
                                        <img src="<?php echo esc_url($forteAuditoryItemImage['url']); ?>" alt="<?php echo esc_attr($forteAuditoryItemImage['alt']); ?>" />
                                    </div>
                                <?php endif;?>
                                <?php if($forteAuditoryItemContent) : ?> 
                                    <div class="forte-auditory__itemContent">
                                       <?php echo  $forteAuditoryItemContent ?>
                                    </div>
                                <?php endif;?> 
                            </div>
                        </li>
                    <?php endwhile;?> 
                </ul>
            <?php endif;?> 
    </div>
</section>
<?php
    $forteShemeTitle = get_field('forteShemeTitle');
?>
    <section id="sheme" class="scheme">
        <div class="container">
            <?php if($forteShemeTitle) : ?>
                <h1 class="forte__scheme__heading">
                   <?php echo  $forteShemeTitle ?> 
                </h1>
            <?php endif;?> 
            <?php if( have_rows('schemeRow') ): ?>
                <ul class="row scheme__row">
                    <?php while( have_rows('schemeRow') ) : the_row(); 
                        $forteShemeItemImage = get_sub_field('forteShemeItemImage');
                        $forteShemeItemContent = get_sub_field('forteShemeItemContent');
                    ?> 
                        <li class="col-lg-4 scheme__item">
                            <?php if( !empty( $forteShemeItemImage ) ) : ?>
                                <img class="scheme__itemImage" src="<?php echo esc_url($forteShemeItemImage['url']); ?>" alt="<?php echo esc_attr($forteShemeItemImage['alt']); ?>" />
                            <?php endif;?> 
                            <?php if($forteShemeItemContent) : ?> 
                                <div class="scheme__itemContent">
                                    <?php echo $forteShemeItemContent ?>
                                </div>
                            <?php endif;?> 
                        </li>
                    <?php endwhile;?> 
                </ul>
            <?php endif;?> 
        </div>
   </section>
   <?php 
       $forteCTAcontent = get_field('forteCTAcontent');
       $forteCTAbutton = get_field('forteCTAbutton');
       $forteCTAimage = get_field('forteCTAimage');
   ?> 
   <section class="forte__cta">
        <div class="container">
            <div class="row forte__cta__row">
                <div class="col-lg-auto forte__cta__content">
                   <?php echo $forteCTAcontent ?>
                    <a href="<?php echo esc_url( $forteCTAbutton['url'] ); ?>" class="button button--third"><?php echo esc_html( $forteCTAbutton['title'] ); ?></a>
                </div>
                <div class="col-lg-auto forte__cta__image">
                    <img src="<?php echo esc_url($forteCTAimage['url']); ?>" alt="<?php echo esc_attr($forteCTAimage['alt']); ?>" />
                </div>
            </div>
        </div>
   </section>
  

<?php get_footer('forte'); ?>     