<?php
/**
 * Custom post fields - projects

 */
?>	
<h1 class="project-title"><?php the_title(); ?></h1>

<?php if( get_field('img-1')): $image = get_field('img-1'); ?>
    <div class="hero-image">
        <img src="<?php echo esc_url($image['url']); ?>" 
             alt="<?php echo esc_attr($image['alt']); ?>" />
    </div>
<?php endif; ?>

<?php if( get_field('txt-1')): ?>
    <p class="project-txt"><?php the_field('txt-1'); ?></p>
<?php endif; ?>


<div id="project-thumbs">
    <?php 
    // Loop through fields img-2 ... img-10
    for ($i = 2; $i <= 10; $i++) :
        $field_name = 'img-' . $i;
        $image = get_field($field_name);
        if ($image) : ?>
            <div class="img-frame">
                <img class="clickableImage" 
                     src="<?php echo esc_url($image['url']); ?>" 
                     alt="<?php echo esc_attr($image['alt']); ?>" 
                     data-fullsize="<?php echo esc_url($image['url']); ?>" />
            </div>
        <?php endif;
    endfor;
    ?>
</div>