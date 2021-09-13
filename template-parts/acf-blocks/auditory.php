<?php
    $titleAuditory = get_sub_field('titleAuditory');
?>
<section class="auditory">
    <div class="container">
        <?php if( $titleAuditory ) : ?> 
            <div class="col-lg-6 offset-lg-3 text--center auditory__heading">
                <?php echo $titleAuditory; ?> 
            </div>
        <?php endif; ?>
        <?php if( have_rows('auditoryRow') ): ?> 
            <ul class="row auditory__row">
                <?php while( have_rows('auditoryRow') ) : the_row();
                    $imageAuditory = get_sub_field('imageAuditory');
                    $contentAuditory = get_sub_field('contentAuditory');
                ?> 
                    <li class="col-lg-3 auditory__item col-md-6 col-sm-6">
                        <div class="auditory__itemInner">
                            <?php if( !empty( $imageAuditory ) ): ?>
                                <div class="auditory__itemImage">
                                    <img src="<?php echo esc_url($imageAuditory['url']); ?>" alt="<?php echo esc_attr($imageAuditory['alt']); ?>" />
                                </div>
                            <?php endif; ?>
                            <?php if( $contentAuditory ) : ?> 
                                <div class="auditory__itemContent">
                                    <p><?php  echo $contentAuditory ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>