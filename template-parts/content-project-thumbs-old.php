<h1 class="page-title">Projects</h1>
<div id="thumb-wrap">

<?php 
$args = array(
    'post_type'      => 'projects',
    'orderby'        => 'date',
    'order'          => 'DESC',
    'posts_per_page' => -1
);
$the_query = new WP_Query( $args ); 
?>

<?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
        <div class="projects-thumb fade-in">
            <a class="project-link" href="<?php the_permalink(); ?>">
                
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="thumb-image-wrap">
                        <?php 
                            // Use 'medium' or 'large' for a bigger default size
                            the_post_thumbnail( 'medium', array(
                                'class' => 'thumb-image',
                                'loading' => 'lazy',
                                'alt' => get_the_title() // fallback if alt not set
                            ) ); 
                        ?>
                    </div>
                <?php endif; ?>
                
                <p class="project-title"><?php the_title(); ?></p>
            </a>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p>No projects found.</p>
<?php endif; ?>

</div>
