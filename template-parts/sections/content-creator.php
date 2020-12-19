<!-- team section-->
<div class="team-section">
    <div class="container">
        <div class="section-title text-center">
            <h3><?php echo esc_html__('Our Popular Creator', 'welearner') ?> </h3>
            <p><?php echo esc_html('45+ million people are already learning on Welearners', 'welearner') ?> </p>
        </div>
        <div class="team-content row">
        <?php  $createor_arr = [
                'post_type' => 'creator',
                'posts_per_page' => 3,
              ];

              $creator = new WP_Query($createor_arr); ?> 

            <?php if($creator->have_posts()){ 
                 
                 while($creator->have_posts()) : $creator->the_post();

                  $creator_bg_color = '';
                  $create_bg= '';

                  if(defined('FW')) {
                    $creator_bg_color = fw_get_db_post_option(get_the_ID(), 'creator_img_bg');
                  }

                  if('' != $creator_bg_color) {
                      $create_bg = 'style=background:'.$creator_bg_color;
                  }

                ?>   
            <div class="col-sm-4">
                <div class="team-loop-wrapper">

                <div class="team-image" <?php echo esc_attr($create_bg);  ?> >
                    <?php if(has_post_thumbnail()) : ?> <a href="<?php echo esc_url(get_the_permalink()); ?>"><?php  the_post_thumbnail([354, 354]); ?> </a><?php  endif; ?> 
                    <div class="team-social-icon">
                        <?php 
                        
                        $social = '';

                        if(defined('FW')) {
                            $social = fw_get_db_post_option(get_the_ID(), 'creator_social_media_client_designation');
                          }

                         // print_r($socials);
                        ?> 
                        <?php if('' != $social) : ?> 
                        <ul>
                            <?php foreach($social as $link) :  ?> 
                                <li><a href="<?php echo esc_url($link['social_media_link']); ?>"><i class="<?php echo esc_attr($link['social_icon']['icon-class']); ?>"></i></a></li>
                            <?php endforeach; ?> 
                        </ul>
                        <?php endif; ?> 
                    </div> 
                 </div>
                </div>
                <div class="team-meta">
                    <?php 
                    
                     the_title('<h4>', '</h4>');

                      $degnation = '';

                      if(defined('FW')) {
                        $degnation = fw_get_db_post_option(get_the_ID(), 'creator_designation');

                      }
                    
                    if('' != $degnation) : ?> 
                        <small><?php echo esc_html($degnation); ?> </small>
                    <?php endif; ?>     
                    </div>
            </div> 
            <?php endwhile; wp_reset_postdata(); } else echo esc_html__('No Creator Found', 'welearner') ?>  
        </div> <!-- close row-->
    </div>
</div>
