<?php 

$c1 = '';
$c1num = '';
$c2 = '';
$c2num = '';
$c3 = '';
$c3num = '';

if(defined('FW')) {
    $c1 = fw_get_db_customizer_option('counter_one_text');
    $c1num = fw_get_db_customizer_option('counter_one_count'); 
    $c2 = fw_get_db_customizer_option('counter_two_text');
    $c2num = fw_get_db_customizer_option('counter_two_count'); 
    $c3= fw_get_db_customizer_option('counter_three_text');
    $c3num = fw_get_db_customizer_option('counter_three_count');
}

?>

<div class="counter-up-sction">
  <div class="container">
    <div class="row pt-100px">
        <div class="col-sm-3 offset-sm-2">
          <span class="counter"><?php echo esc_html($c1num); ?> </span> <span class="safix">+</span>
          <p class="course-update"><?php echo esc_html($c1); ?> </p>
        </div>
        <div class="col-sm-3">
          <span class="counter"><?php echo esc_html($c2num); ?></span> <span class="safix">+</span>
          <p class="course-update"><?php echo esc_html($c2); ?></p>
        </div>
        <div class="col-sm-3">
          <span class="counter"><?php echo esc_html($c3num); ?></span> <span class="safix">+</span>
          <p class="course-update"><?php echo esc_html($c3); ?></p>
        </div>
    </div>
  </div>
</div>