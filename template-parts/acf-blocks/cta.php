<?php 
    $contentCTA = get_sub_field('contentCTA');
    $buttonCTA= get_sub_field('buttonCTA');
    $imageCTA = get_sub_field('imageCTA');
?>
<section class="cta">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cta-left.png" alt="" class="cta__leftTopDecoration">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cta-right.png" alt="" class="cta__leftBottomDecoration">
    <div class="container">
        <div class="cta__row row">
        <div class="cta__arrow">
            <svg width="122" height="122" viewBox="0 0 122 122" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.2"
                    d="M48.8075 121.247C52.178 120.987 55.6134 120.534 58.9191 119.95L65.0768 118.848L59.3728 116.385C57.4931 115.607 55.6782 114.7 53.8633 113.793C53.0855 113.404 52.3725 113.015 51.7243 112.691C71.1697 101.736 83.9388 81.5132 84.9759 59.7344C85.1055 56.5583 85.1703 53.5119 85.1703 50.5303C85.1703 49.1043 85.1703 47.7431 85.2351 46.3819C85.2351 45.6689 85.2351 44.9559 85.3 44.3078C85.3 43.9189 85.3 43.5948 85.3648 43.2059L85.4296 41.715C85.4296 41.1965 85.4944 40.7428 85.4944 40.2242L85.6241 38.6686L85.7537 37.113C85.8833 36.0759 86.013 35.0388 86.1426 34.0665C86.7908 29.5293 87.6982 25.705 88.9298 22.3993C89.3187 21.3622 89.6428 20.5196 90.0317 19.8066L90.0965 19.6121C90.2909 19.2881 90.4206 18.8991 90.615 18.5751C90.8743 18.1213 91.0688 17.7324 91.328 17.4083C93.9856 13.26 100.662 9.95428 107.597 9.43574C110.32 9.24128 113.172 9.37092 115.764 10.3432C117.126 10.7969 118.487 12.1581 119.978 12.0933C122.117 12.0285 121.144 9.3061 120.237 8.33383C118.746 6.58375 115.959 6.00039 113.82 5.28739C110.125 4.12067 106.236 3.66694 102.347 3.99103C96.1245 4.50958 90.1613 6.97266 85.6889 10.9914C79.596 16.4361 75.6421 24.5383 73.2438 36.3352C72.6605 39.0575 72.2067 41.8447 71.753 44.567C70.5215 51.8266 69.3548 58.6973 66.6324 65.3736C62.0303 76.7815 53.4744 85.2079 40.5756 91.2359C40.5108 91.2359 40.5108 91.2359 40.446 91.3007C40.446 90.3933 40.446 89.4858 40.446 88.5136C40.3812 86.569 40.3163 84.6893 40.1219 82.8096L39.6033 76.7815L36.5569 82.0318C33.4456 87.4117 28.8436 92.986 22.8155 98.69C17.7597 103.422 11.5372 108.413 3.82387 113.922L0.3237 116.45L4.53687 117.358C14.3244 119.432 22.4914 120.663 30.2696 121.311C36.881 121.7 42.909 121.7 48.8075 121.247Z"
                    fill="#58585B" />
                <path
                    d="M48.484 117.293C51.8545 117.033 55.2898 116.58 58.5956 115.996L64.7533 114.894L59.0493 112.431C57.1696 111.653 55.3547 110.746 53.5398 109.839C52.7619 109.45 52.0489 109.061 51.4008 108.737C70.9758 97.7824 83.7449 77.5593 84.782 55.8453C84.9116 52.6692 84.9764 49.6227 84.9764 46.6411C84.9764 45.2151 84.9764 43.854 85.0413 42.4928C85.0413 41.7798 85.0413 41.0668 85.1061 40.4186C85.1061 40.0297 85.1061 39.7056 85.1709 39.3167L85.2357 37.8259C85.2357 37.3073 85.3005 36.8536 85.3005 36.3351L85.4302 34.7794L85.5598 33.2238C85.6894 32.1867 85.8191 31.1496 85.9487 30.1774C86.5969 25.6401 87.5043 21.8159 88.7359 18.5102C89.1248 17.4731 89.4489 16.6304 89.8378 15.9174L89.9026 15.723C90.0971 15.3989 90.2267 15.01 90.4211 14.6859C90.6804 14.2322 90.8749 13.8433 91.1341 13.5192C93.7269 9.43565 100.403 6.12994 107.339 5.54657C110.061 5.35212 112.913 5.54657 115.506 6.45403C116.867 6.90775 118.228 8.26893 119.719 8.20411C121.858 8.07447 120.886 5.41694 120.043 4.44467C118.552 2.69459 115.765 2.11123 113.626 1.39823C109.931 0.231508 106.042 -0.222218 102.153 0.101872C95.801 0.620415 89.8378 3.08349 85.3653 7.1022C79.2725 12.5469 75.3186 20.6491 72.9203 32.446C72.3369 35.1684 71.8832 37.9555 71.4295 40.6779C70.198 47.9375 69.0312 54.8082 66.3089 61.4844C61.7068 72.8924 53.1508 81.3187 40.2521 87.3468C40.1873 87.3468 40.1873 87.3468 40.1225 87.4116C40.1225 86.5041 40.1225 85.5967 40.1225 84.6244C40.0576 82.6799 39.9928 80.8002 39.7984 78.9204L39.2798 72.8924L36.2334 78.1426C33.1221 83.5225 28.5201 89.0968 22.492 94.8008C17.4362 99.5325 11.2137 104.523 3.50034 110.033L0.000175476 112.561L4.21334 113.468C14.0008 115.543 22.1679 116.774 29.946 117.422C36.5575 117.746 42.5855 117.811 48.484 117.293Z"
                    fill="white" />
                <path
                    d="M4.60215 111.524C11.4728 106.662 18.0195 101.542 23.7882 96.162C29.557 90.7173 34.4832 84.9485 37.9186 79.05C38.0482 80.865 38.1778 82.7447 38.2426 84.5596C38.2426 86.4393 38.2426 88.319 38.1778 90.1987C39.1501 89.8098 40.1224 89.4209 41.0298 89.032C53.3452 83.328 62.8734 75.0313 68.0589 62.1974C71.8831 52.734 72.7906 42.752 74.7999 32.8349C76.6148 23.8252 79.7909 14.6211 86.6616 8.46336C95.3472 0.685213 109.478 -0.351874 119.2 6.12992C110.968 0.685213 94.6342 4.50947 89.4488 12.5469C89.1895 12.9358 88.9302 13.3247 88.7358 13.7784C88.4765 14.1673 88.2821 14.6211 88.0876 15.0748C87.6339 15.9822 87.245 16.8897 86.9209 17.862C85.4949 21.6862 84.6523 25.7697 84.0041 29.9181C83.8744 30.9552 83.7448 31.9923 83.6152 33.0293L83.4207 34.585L83.2911 36.1406C83.2263 36.6591 83.2263 37.1777 83.1614 37.6962L83.0966 39.2519C83.0966 40.2889 83.0318 41.326 83.0318 42.4279C82.967 46.7059 83.0318 51.1135 82.7725 55.7804C81.7355 77.3 68.9663 96.8102 50.234 107.181C49.2617 107.7 48.2246 108.218 47.2523 108.737C49.0024 109.709 50.7525 110.681 52.5674 111.589C54.3823 112.496 56.262 113.339 58.1417 114.181C48.2246 115.996 38.8908 116.126 30.0108 115.413C21.2604 114.7 12.834 113.274 4.60215 111.524Z"
                    fill="#ED135A" />
            </svg>
        </div>
            <?php if( $contentCTA ) : ?> 
            <div class="cta__content col-lg-6">
                <?php echo $contentCTA ?>
                <a href="<?php echo esc_url( $buttonCTA['url'] ); ?>" class="button button-secondary"><?php echo esc_html( $buttonCTA['title'] ); ?></a>
            </div>
            
            <?php endif; ?>
            <?php if( !empty( $imageCTA ) ): ?>
                <div class="cta__image col-lg-6">
                    <img src="<?php echo esc_url($imageCTA['url']); ?>" alt="<?php echo esc_attr($imageCTA['alt']); ?>" />
                </div>
            <?php endif; ?>
        </div>
  
    </div>
</section>