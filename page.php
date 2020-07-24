<?php get_header(); ?>


<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Post Content
            ============================================= -->
            <div class="postcontent nobottommargin clearfix">

                <?php

                while( have_posts() ){
                    the_post();

                    global $post;
                    $author_ID          =   $post->post_author;
                    $author_URL         =   get_author_posts_url( $author_ID );

                    ?>
                    <div class="single-post nobottommargin">

                        <!-- Single Post
                        ============================================= -->
                        <div class="entry clearfix">

                            <!-- Entry Image
                            ============================================= -->
                            <div class="entry-image">
                                <?php

                                if( has_post_thumbnail() ){
                                    ?>
                                    <div class="entry-image">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php 
                                            the_post_thumbnail( 'full' ); 
                                            ?>
                                        </a>
                                    </div>
                                    <?php
                                }

                                ?>
                            </div><!-- .entry-image end -->

                            <!-- Entry Content
                            ============================================= -->
                            <div class="entry-content notopmargin">

                                <?php 
                                
                                the_content(); 

                                $defaults = array(
                                    'before'           => '<p class="text-center">' . __( 'Pages:', 'udemy' ),
                                    'after'            => '</p>',
                                );

                                wp_link_pages( $defaults );
                                
                                ?>
                                <!-- Post Single - Content End -->

                                <div class="clear"></div>

                            </div>
                        </div><!-- .entry end -->

                        <div class="line"></div>

                        <?php 
                        
                        if( comments_open() || get_comments_number() ){
                            comments_template(); 
                        }
                        
                        ?>
                    </div>
                    <?php
                }

                ?>

            </div><!-- .postcontent end -->

        </div>

    </div>

</section><!-- #content end -->

<?php get_footer(); ?>