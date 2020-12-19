<div class="container tested-client-section text-center">
        <small class="patner-title"><?php echo esc_html__('Trusted by content creators across the world', 'welerner') ?> </small>
        <div class="clinet-logo">
            <?php 
            $client_logo = '';

           if(defined('FW')) {
            $client_logo = fw_get_db_customizer_option('client_logo_uplaod_option');
               
            }
            if(!empty($client_logo)) :
              foreach($client_logo as $logo) : 
            ?> 
            <span>
                <?php echo wp_get_attachment_image($logo['attachment_id'], 'full'); ?> 
            </span> 
            <?php endforeach; endif; ?> 
        </div>
    </div>