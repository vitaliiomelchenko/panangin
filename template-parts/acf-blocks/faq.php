<?php 
    $headingFAQ = get_sub_field('headingFAQ');
    $formFAQ = get_sub_field('formFAQ');
    $formImageFAQ = get_sub_field('formImageFAQ');
?>
<section id="faq" class="faq">
    <div class="container">
        <?php if( $headingFAQ ) : ?> 
            <div class="faq__heading">
                <h1><?php echo $headingFAQ ?></h1>
            </div>
        <?php endif; ?> 
        <div class="row">
            <div class="col-lg-4 faq__formWrapper">
                <?php if($formFAQ) : ?>
                    <?php echo $formFAQ ?>
                    <?php if( !empty( $formImageFAQ) ): ?>
                        <div class="faq__formImageWrapper">
                            <img src="<?php echo esc_url($formImageFAQ['url']); ?>" alt="<?php echo esc_attr($formImageFAQ['alt']); ?>" class="faq__formImage">
                        </div>
                    <?php endif; ?> 
                <?php endif; ?> 
            </div>
            <?php $i = 1; 
                $a = 1;
            ?>
            <?php if( have_rows('faq_row') ): ?>
            <div class="col-lg-8">
                <div class="wrapper">
                    <div class="half">
                        <?php while( have_rows('faq_row') ) : the_row(); 
                            $questionFAQ = get_sub_field('questionFAQ');
                            $answerFAQ = get_sub_field('answerFAQ');
                        ?>
                            <div class="tab">
                                <input id="<?php echo $i++?>" type="checkbox" name="tabs">
                                <label for="<?php echo $a++?>">
                                    <?php echo $questionFAQ ?> 
                                </label>
                                <div class="tab-content">
                                    <p>
                                        <?php echo $answerFAQ ?> 
                                    </p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>