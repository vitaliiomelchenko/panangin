<?php
    /* Template Name: Контакти */
?>
<?php get_header(); ?>
<div class="breadcrumbs">
    <div class="container">
        <?php echo do_shortcode('[wpseo_breadcrumb]') ?>
    </div>
</div>
<?php
    $headingContact = get_field('headingContact');
    $contactFormContact = get_field('contactFormContact');
    $contactMapContact = get_field('contactMapContact');
?>
<body>
    <section class="contact">
        <div class="container">
            <?php if( $headingContact ) : ?>
                <div class="page__heading">
                    <?php echo $headingContact ?>
                </div>
            <?php endif; ?>
            <div class="row contact__row">
                <?php if( have_rows('contact_row') ): ?>
                    <div class="col-lg-4 contact__infoWrapper">
                        <?php while( have_rows('contact_row') ) : the_row();
                            $ItemContentContact = get_sub_field('ItemContentContact');
                            $ItemIconContact = get_sub_field('ItemIconContact');
                        ?>
                            <div class="contact__infoItem">
                                    <div class="contact__infoItemIcon">
                                        <?php echo file_get_contents(esc_url(wp_get_original_image_path($ItemIconContact['id']))); ?>
                                    </div>
                                <?php if( $ItemContentContact ) : ?>
                                    <div class="contact__infoItemContent">
                                        <?php echo $ItemContentContact ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php if($contactFormContact) : ?>
                    <div class="col-lg-8 contact__formWrapper">
                        <?php echo  $contactFormContact ?>
                    </div>
                <?php endif; ?>
            </div> 
            <?php if($contactMapContact) : ?>
                <div class="contact__mapWrapper">
                    <?php echo $contactMapContact ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</body>
<?php get_footer(); ?>