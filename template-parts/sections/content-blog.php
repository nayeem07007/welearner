<section class="blog-section">
    <div class="container">
        <div class="section-title mb-70px mt-5">
                <h2>Learning <br> Support features</h2>
        </div>
        <div class="blog-content row">
        <?php 
          
           $arrs_post = [
                'post_type' => 'post',
                'posts_per_page' => 3,
              ];

              $blog_post = new WP_Query($arrs_post); ?> 
          <?php if($blog_post->have_posts()){  
             
             while($blog_post->have_posts()) : $blog_post->the_post();
            
            ?> 
                <div class="col-sm-4">
                    <?php if(has_post_thumbnail(  )) :  ?> 
                    <div class="blog-img">
                        <a href="<?php echo esc_url(get_the_permalink()); ?>">
                           <?php the_post_thumbanil('post-image'); ?> 
                        </a>
                    </div>
                    <?php endif; ?> 
                    <div class="blog-content">
                        <?php the_title('<h4>', '</h4>'); ?> 
                        <a href="<?php echo esc_url(get_the_permalink()); ?>"><?php echo esc_html__('Read Blog', 'welearner') ?> </a>
                    </div>
                </div>
          <?php endwhile; wp_reset_postdata(); }else echo esc_html__('No post found', 'welearner') ?> 
        </div>
    </div>
</section>
<!--  coll to action -->