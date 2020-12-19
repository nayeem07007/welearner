<section class="section-topic default-padding">
    <div class="container">
        <div class="section-title mb-70px">
            <h2><?php echo esc_html__('Top rated', 'welearner'); ?> </h2>
            <a href="" class="btn btn-all btn-transparent-bg p-botton-right position-absolute"><?php echo esc_html__('Show All ', 'welearner'); ?> </a>
        </div>
        <div class="disply-course row">
            <?php  $arr_top = [
                'post_type' => 'courses',
                'posts_per_page' => 3,
                'meta_key' => 'fw_option:rating_course',
                'orderby' => 'meta_value_num',
              ];

              $courses_top = new WP_Query($arr_top); ?> 
            <?php if($courses_top->have_posts()){ 
                 
                 while($courses_top->have_posts()) : $courses_top->the_post();
                  get_template_part('template-parts/sections/content', 'course-loop');
                endwhile; } else {echo esc_html__('No Course Found', 'welearner'); }; ?>
    </div>
  </div>
</div>