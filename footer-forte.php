<?php 
    $forteFooter = get_field('forteFooter','option');
?>
<section class="forte__footer">
        <div class="container">
           <?php echo $forteFooter ?> 
            <a href="https://levelmedia.com.ua/" class="forte__info">
                Created by Level Media
            </div>
        </div>
   </section>
   <?php wp_footer(); ?>