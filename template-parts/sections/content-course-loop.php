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

                     $taxonomies_color = '';
                     $taxonomies_bg_color = '';

                     if(defined('FW')) {
                        $taxonomies_color = fw_get_db_post_option(get_the_ID(), 'taxonomy__color');
                        $taxonomies_bg_color = fw_get_db_post_option(get_the_ID(), 'taxonomy_bg_color');
                     }
                     
                      $color_style = '';
                      if('' != $taxonomies_color) {
                        $color_style = 'style=color:'.$taxonomies_color;
                      }
                      $bg_color = '';

                      if('' != $taxonomies_bg_color) {
                         $bg_color = 'style=background:'.$taxonomies_bg_color; 
                      }

                     ?> 
                    <?php if('' != $taxonomies) : ?> 
                        <div class="category" <?php echo esc_attr($bg_color); ?> >
                            <?php foreach($taxonomies as $tax){ ?> 
                                 <a <?php echo esc_attr($color_style); ?>  href="<?php echo esc_url(get_term_link($tax->term_id, 'topic')); ?>"><?php echo esc_html($tax->name); ?></a>
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