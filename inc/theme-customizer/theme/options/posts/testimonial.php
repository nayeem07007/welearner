<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * metabox options for pages
 */
$options = array(
	'settings_testimonail' => array(
		'title'		 => esc_html__( 'Testimonail settings', 'welerner' ),
		'type'		 => 'box',
		'priority'	 => 'high',
		'options'	 => array(
			'testimonail_client_designation'	 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Designation', 'welerner' ),
            ),
            'testimonail_client_highlisht_text'	 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Highlight Text', 'welerner' ),
			),
			
        ))
                
         );