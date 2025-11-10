<?php
/**
 * Custom post fields - projects

 */
?>	
<h1 class="project-title"><?php the_title(); ?></h1>
<h2 class="project-details" aria-label="Project by Samuel Joseph Decorator – Professional Painter and Decorator in Bath">Project Details</h2>

<?php if( get_field('img-1')): 
    $image = get_field('img-1'); 
    $alt   = !empty($image['alt']) 
        ? $image['alt'] 
        : 'SJHoney Project Image – ' . get_the_title() . ' (Image 1)';
?>
    <div class="hero-image">
        <img src="<?php echo esc_url($image['url']); ?>" 
             alt="<?php echo esc_attr($alt); ?>" />
    </div>
<?php endif; ?>


<?php if( get_field('txt-1')): ?>
    <p class="project-txt"><?php the_field('txt-1'); ?></p>
<?php endif; ?>

<div id="project-thumbs">
    <?php 
    for ($i = 2; $i <= 10; $i++) :
        $field_name = 'img-' . $i;
        $image = get_field($field_name);
        if ($image) :
            $alt = !empty($image['alt']) 
                ? $image['alt'] 
                : 'SJHoney Project Image – ' . get_the_title() . ' (Image ' . $i . ')';
            ?>
            <div class="img-frame">
                <img class="clickableImage" 
                     src="<?php echo esc_url($image['url']); ?>" 
                     alt="<?php echo esc_attr($alt); ?>"
                     data-fullsize="<?php echo esc_url($image['url']); ?>" />
            </div>
        <?php endif;
    endfor;
    ?>
</div>
