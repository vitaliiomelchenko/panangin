<?php
    $warning = get_sub_field('warning');
    $warningMobile = get_sub_field('warningMobile');
?>
<?php if( !empty( $warning ) ): ?>
    <section class="warning">
        <div class="container">
            <img class="warning-img" src="<?php echo esc_url($warning['url']); ?>" alt="<?php echo esc_attr($warning['alt']); ?>" />
            <img class="warning-img-mobile" src="<?php echo esc_url($warningMobile['url']); ?>" alt="<?php echo esc_attr($warningMobile['alt']); ?>" />
        </div>
    </section> 
<?php endif; ?>