<section class="section-topic default-padding">
    <div class="container">
        <div class="section-title mb-70px">
            <h2><?php echo esc_html__('Tranding', 'welearner'); ?></h2>
            <a href="" class="btn btn-all btn-transparent-bg p-botton-right position-absolute"><?php echo esc_html__('Show All ', 'welearner'); ?></a>
        </div>
        <div class="disply-course row">
            <?php 
              $arr = [
                'post_type' => 'courses',
                'posts_per_page' => 3
              ];

              $courses = new WP_Query($arr);
            
            ?> 
            <?php if($courses->have_posts()){ 
                 
                 while($courses->have_posts()) : $courses->the_post();
                ?>
            <div class="col-sm-6 col-md-4">
                <div class="curse-loop-content">
                <div class="course-thum">
                    <?php if(has_post_thumbnail()) : ?> 
                    <a href="<?php echo esc_url(get_the_permalink());  ?>">
                      <?php the_post_thumbnail(); ?> 
                    </a>
                    <?php endif; ?> 
                </div>
                <div class="course-meta d-flex">
                    <?php
                     $taxonomies =  wp_get_post_terms(get_the_ID(), 'topic');
                     ?> 
                    <?php if('' != $taxonomies) : ?> 
                        <div class="category">
                            <?php foreach($taxonomies as $tax){ ?> 
                                 <a href="<?php echo esc_url(get_term_link($tax->term_id, 'topic')); ?>"><?php echo esc_html($tax->name); ?></a>
                            <?php } ?> 
                        </div>
                    <?php endif; ?> 
                    <?php 
                    
                    $rating = '';
                    if(defined('FW')) {
                        $rating = fw_get_db_post_option(get_the_ID(), 'rating_course'); 
                    }
                    
                     $max_rating = 5; 
                     $nagitive_rating = $max_rating - $rating;
                     
                    ?> 
                    <div class="rating">
                        <?php for($x = 1; $x <= $rating ; $x++) { ?> 
                           <i class="fas fa-star"></i>  
                        <?php } ?> 
                        <?php for($y = 1; $y <= $nagitive_rating; $y++) { ?> 
                           <i style="color: gray" class="fas fa-star"></i>  
                        <?php } ?> 

                    </div>
                </div>
                <div class="contnet-area">
                    <?php the_title('<h3><a href="'.get_the_permalink().'">', '</a></h3>'); ?>
                    <?php $author_id = get_the_author_meta( 'ID' ); ?> 
                  <div class="user-meta"><?php echo get_avatar($author_id, 40); ?> <?php the_author_meta( 'display_name', $author_id ); ?></div>
                </div>
                <div class="course-footer d-flex">
                    <div class="price">
                        <?php 
                        $price = '';
                        $sell_prince = '';

                         if(defined('FW')) {
                            $price = fw_get_db_post_option(get_the_ID(), 'course_price'); 
                            $sell_price = fw_get_db_post_option(get_the_ID(), 'course_sell_price');
                         }    
                        ?> 
                       <?php if('' != $sell_price) :  ?>  <del>$<?php echo esc_html($sell_price); ?></del> <?php endif; ?> 
                       <?php if('' != $price) :  ?> <span>$<?php echo esc_html($price); ?> </span> <?php endif; ?> 
                    </div>
                    <div class="button">
                        <a href="javascript:void(0)" class="btn btn-wacth-preview"><?php echo esc_html__('Watch Preview', 'welearner') ?> </a>
                    </div>
                </div>
                </div>
                </div>
            <?php endwhile; } else {echo esc_html__('No Course Found', 'welearner'); }; ?>
            
           
        </div>
    </div>
</section>