
    <footer style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/footer.png;">
        <div class="container">
            <?php if( have_rows('footerContact__row', 'option') ): ?>
                <ul class="footerContact__row row">
                    <?php  while( have_rows('footerContact__row', 'option') ) : the_row(); 
                        $footerIconContact = get_sub_field('footerIconContact', 'option');
                        $footerContactContent = get_sub_field('footerContactContent', 'option');
                    ?>
                        <li class="col-lg-4 footerContact__item">
                            <?php if( !empty( $footerIconContact ) ): ?>
                                <div class="footerContact___itemIcon">
                                    <?php echo file_get_contents(esc_url(wp_get_original_image_path($footerIconContact['id']))); ?>           
                                </div>
                            <?php endif;?>
                            <?php if($footerContactContent) : ?>
                                <div class="footerContact__itemContent">
                                    <?php echo $footerContactContent ?>
                                </div>
                            <?php endif;?>
                        </li>
                    <?php endwhile; ?>
                </ul>   
            <?php endif;?>
        </div>
        <section class="footerMenu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 footerMenu__item">
                    <?php echo  the_field('footerContent', 'option'); ?>
                </div>
                <div class="col-lg-4 footerMenu__item">
                    <ul class="footerMenu__itemList">
                        <?php 
                            wp_nav_menu( [
                                'theme_location'  => 'footer-menu-1',
                                'menu'            => 'Меню в подвале 1',
                                'container'       => 'false',
                                'menu_class'      => 'footerMenu__itemList',
                                'menu_id'         => '',
                                'items_wrap'      => '<li class="footerMenu__itemListItem ">%3$s</li>',
                            ] );
                        ?>
                    </ul>
                </div>
                <div class="col-lg-4 footerMenu__item">
                    <ul class="footerMenu__itemList">
                    <?php 
                            wp_nav_menu( [
                                'theme_location'  => 'footer-menu-2',
                                'menu'            => 'Меню в подвале 2',
                                'container'       => 'false',
                                'menu_class'      => 'footerMenu__itemList',
                                'menu_id'         => '',
                                'items_wrap'      => '<li class="footerMenu__itemListItem ">%3$s</li>',
                            ] );
                        ?>
                    </ul>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</footer>
	<?php wp_footer(); ?>
</body>
</html>