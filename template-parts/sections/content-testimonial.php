<div class="testimonial-section">
    <div class="container">
        <div class="row testimonila-heading-section">
            <div class="col-sm-6">
                <h3><?php echo esc_html__('What our students have to say', 'welearner'); ?> </h3>
            </div>
            <div class="col-sm-6 testimonial-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique placerat ligula, eget blandit ante tincidunt vel
            </div>
        </div>
        <div class="testimonail-content row">
        <?php  $arrs = [
                'post_type' => 'testimonial',
                'posts_per_page' => 3,
              ];

              $testimonial = new WP_Query($arrs); ?> 
           <?php if($testimonial->have_posts()) { 
                while($testimonial->have_posts()) : $testimonial->the_post();
               ?>    
            <div class="col-sm-4">
                <?php if(has_post_thumbnail()) : ?> 
                    <div class="customar-img">
                        <?php the_post_thumbnail('full'); ?> 
                    </div>
                <?php endif; ?> 
                <div class="customar-meta">
                    <?php the_title('<h4>','</h4>'); ?> 

                    <?php 

                    $texti_deg = '';
                    $highlisht_text = '';

                    if(defined('FW')) {
                        $texti_deg = fw_get_db_post_option(get_the_ID(), 'testimonail_client_designation');
                        $highlisht_text = fw_get_db_post_option(get_the_ID(), 'testimonail_client_highlisht_text');
                     }
                    ?> 
                    <?php if('' != $texti_deg) : ?> 
                      <p><?php echo esc_html($texti_deg); ?> </p>
                    <?php endif; ?> 
                </div>
                <div class="customar-say">
                    <?php the_content(); ?> 
                </div>
                <?php if($highlisht_text != ''){ ?> 
                <div class="customar-content-footer">
                    <h4><?php echo wp_kses_post($highlisht_text); ?> </h4>
                </div>
                <?php } ?> 
            </div> 
           <?php endwhile; wp_reset_postdata(); }else echo esc_html__('No testimonial Found', 'welerner'); ?> 
        </div>
    </div>
    <!-- our tested client say-->
</div>

<div class="coll-to-action-secton">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="call-to-action-content text-center" style="background-color:#FFE2E2">
                    <h4>Become an instructor</h4>
                    <p>Top instructors from around the world teach millions of students on Udemy. We provide the tools and skills to teach what you love.</p>
                    <a href="" class="btn btn-call-to-action">Get Join</a>
                </div>
            </div>
        </div>
    </div>
</div>

