<h1 class="page-title">Gallery</h1>
        <div id="thumb-wrap">
            <?php 
                $args = array(
                    'post_type' => 'projects',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => -1
                );
                $the_query = new WP_Query( $args ); 
            ?>

            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
                <div class="projects-thumb init-ani-upfade">
                    <a class="project-link" href="<?php the_permalink(); ?>">
                        <?php
                            $thumbnail_id = get_post_thumbnail_id();
                            $thumbnail_src = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail' );
                            $thumbnail_srcset = wp_get_attachment_image_srcset( $thumbnail_id, 'thumbnail' );
                            $thumbnail_sizes = '(max-width: 500px) 100vw, (max-width: 600px) 50vw, 450px';

                            if ( $thumbnail_src ) :
                        ?>
                    <div class="thumb-image-wrap">
                        <img 
                            src="<?php echo esc_url( $thumbnail_src[0] ); ?>" 
                            srcset="<?php echo esc_attr( $thumbnail_srcset ); ?>" 
                            sizes="<?php echo esc_attr( $thumbnail_sizes ); ?>" 
                            alt="<?php echo esc_attr( get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true ) ); ?>" 
                            loading="lazy">
                            </div>
                        <?php endif; ?>
                        <p class="project-title"><?php the_title(); ?></p>
                    </a>
                </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>