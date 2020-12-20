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
                 
                get_template_part('template-parts/sections/content', 'course-loop');

                endwhile;
                 
               } else {
                   echo esc_html__('No Course Found', 'welearner'); 
                }; 
                
                ?>
        
        </div>
        </div>
  
</section>