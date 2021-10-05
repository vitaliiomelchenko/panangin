<?php $poster = get_sub_field('poster'); ?>
<?php $video = get_sub_field('video'); 
    $headingIC = get_sub_field('headingIC');
    ?>

<?php if($video): ?>
<section class="video-block">
    <div class="container">
    <?php if( $headingIC) : ?>
            <div class="image_content__heading text--center">
                <?php echo  $headingIC; ?>
            </div>
        <?php endif; ?>
        <div class="video__wrapper">
            <video id="player" playsinline controls <?php if($poster): ?>poster="<?php echo $poster['url'] ?>"<?php endif; ?>>
                <source src="<?php echo $video['url'] ?>" type="video/mp4" />
            </video>
        </div>
    </div>
</section> 
<script>
  const player = new Plyr('#player');
</script>
<?php endif; ?>