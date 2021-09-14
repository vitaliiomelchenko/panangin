<?php
    $warning = get_sub_field('warning');
?>
<?php if( !empty( $warning ) ): ?>
    <section class="warning">
        <div class="container">
            <img src="<?php echo esc_url($warning['url']); ?>" alt="<?php echo esc_attr($warning['alt']); ?>" />
        </div>
    </section> 
<?php endif; ?>