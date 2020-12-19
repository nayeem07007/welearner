<div class="coll-to-action-secton">
    <div class="container">
        <div class="row">

         <?php 
         $c1 = '';
         $c1con = '';
         $c1link = '';
         $c2title = '';
         $c2content = '';
         $c2link = '';
         
         if(defined('FW')) {
             $c1 = fw_get_db_customizer_option('c1_title_text');
             $c1con = fw_get_db_customizer_option('c1_content'); 
             $c1link = fw_get_db_customizer_option('c1_content_link');
             $c2title = fw_get_db_customizer_option('c2_title_text'); 
             $c2content= fw_get_db_customizer_option('c2_content');
             $c2link = fw_get_db_customizer_option('c2_content_link');
         }
         
         ?> 

            <div class="col-sm-6">
                <div class="call-to-action-content text-center" style="background-color:#FFE2E2">
                    <h4><?php echo esc_html($c1); ?> </h4>
                    <p><?php echo esc_html( $c1con); ?> </p>
                    <a href="<?php echo esc_url($c1link); ?>" class="btn btn-call-to-action">Get Join</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="call-to-action-content text-center" style="background-color:#FEE5BD">
                   <h4><?php echo esc_html($c2title); ?> </h4>
                    <p><?php echo esc_html( $c2content); ?> </p>
                    <a href="<?php echo esc_url($c2link); ?>" class="btn btn-call-to-action">Get Join</a>
                </div>
            </div>
        </div>
    </div>
</div>