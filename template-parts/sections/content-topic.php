<section class="section-topic default-padding">
    <div class="container">
        <div class="section-title mb-70px">
            <h2><?php echo esc_html__('Popular Topics', 'welearner'); ?></h2>
            <a href="" class="btn btn-all solid-bg p-botton-right position-absolute"><?php echo esc_html__('Show All', 'welearner'); ?> </a>
        </div>
        <?php 
         
         $topics = get_terms( array(
            'taxonomy' => 'topic',
            'hide_empty' => false,
            'number'     => 8,
        ) );
        //print_r($topics);
        ?>
        <div class="disply-topic row">

        <?php foreach($topics as $topic) { ?> 

            <?php 
            
             $icon_color = '';
             $icon_image = [];
             $icon_background = '';

             if(defined('FW')){
                $icon_background = (fw_get_db_term_option($topic->term_id, 'topic', 'icon_bg_color') != '') ? fw_get_db_term_option($topic->term_id, 'topic', 'icon_bg_color') : ''; 
                
                $icon_image = fw_get_db_term_option($topic->term_id, 'topic', 'evenex_product_cat');
             }
            
              $style = '';
              if('' != $icon_background) {
                  $style = 'style=background-color:'.$icon_background;
              }
            $icon_id = '';  
            if(array_key_exists('type', $icon_image) && $icon_image != '') {
               if($icon_image['type'] == 'custom-upload') {
                $icon_id = $icon_image['attachment-id'];
               }
            }
            ?> 
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="<?php echo esc_url(get_term_link($topic->slug, 'topic')); ?>" class="welernar-topic-taxonomy">
                    <?php if('' != $icon_id) : ?> 
                        <div class="icon" <?php echo esc_attr($style); ?>>
                            
                            <?php 
                             $icon_url = wp_get_attachment_image_src($icon_id, [56, 57]);
                             //echo wp_get_attachment_image($icon_id, [56, 57]); ?>
                            <img src="<?php echo esc_url($icon_url[0]); ?>" alt="icon">
                        </div>
                    <?php endif; ?> 
                    <div class="topic-taxonomy">
                      <?php echo esc_html($topic->name); ?> 
                    </div>
                </a>
            </div>
        <?php } ?> 
        </div>
    </div>
</section>