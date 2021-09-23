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
            <div class="col-lg-auto faq__formWrapper">
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
            <div class="col-lg-auto faq__Wrapper">
                <div class="wrapper">
                    <div class="half">
                        <?php while( have_rows('faq_row') ) : the_row(); 
                            $questionFAQ = get_sub_field('questionFAQ');
                            $answerFAQ = get_sub_field('answerFAQ');
                        ?>
<!--                             <div class="b-faq">
								<div class="tab faq__item">
									<input id="<?php echo $i++;?>" type="checkbox" name="tabs">
									<label for="<?php echo $a++;?>">
										<?php echo $questionFAQ ?> 
									</label>
									<a href="#" class="faq__title js-faq-title">
										<div class="faq__spoiler js-faq-rotate"><span class="faq__symbol ">+</span></div> 
										<span class="faq__text"><?php echo $questionFAQ ?> </span>
									</a>
									<div class="tab-content faq__content js-faq-content">
										<p>
											<?php echo $answerFAQ ?> 
										</p>
									</div>
								</div>
							</div> -->
						<div class="b-faq">
							<div class="tab faq__item">
								<a href="" class="faq__title js-faq-title">
									<div class="faq__spoiler js-faq-rotate"><span class="faq__symbol ">+</span></div> 
									<span class="faq__text"><?php echo $questionFAQ ?></span>
								</a>
								<div class="faq__content js-faq-content" style="display: none;">
									<?php echo $answerFAQ ?> 
								</div>
							</div>
						</div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
	
	
		<!-- FAQ SECTION 
			<div class="b-faq">
				<div class="faq__item">
					<a href="#" class="faq__title js-faq-title">
						<div class="faq__spoiler js-faq-rotate"><span class="faq__symbol ">+</span></div> 
						<span class="faq__text">Заголовок не очень длинный</span>
					</a>
					<div class="faq__content js-faq-content">
						Здесь контент<br/>
            Здесь контент<br/>
            Здесь контент<br/>
            Здесь контент<br/>
            Здесь контент<br/>
            Здесь контент<br/>
					</div>
				</div>
			</div>
		<!-- FAQ SECTION END -->
		<!-- FAQ SECTION 
			<div class="b-faq">
				<div class="faq__item">
					<a href="#" class="faq__title js-faq-title">
						<div class="faq__spoiler js-faq-rotate"><span class="faq__symbol ">+</span></div> 
						<span class="faq__text">Заголовок не очень длинный</span>
					</a>
					<div class="faq__content js-faq-content">
						Здесь контент
					</div>
				</div>
			</div>
		<!-- FAQ SECTION END -->
<!-- END -->