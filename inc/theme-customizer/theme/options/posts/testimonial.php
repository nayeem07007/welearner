<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * metabox options for pages
 */
$options = array(
	'settings_testimonail' => array(
		'title'		 => esc_html__( 'Testimonail settings', 'welearner' ),
		'type'		 => 'box',
		'priority'	 => 'high',
		'options'	 => array(
			'testimonail_client_designation'	 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Designation', 'welearner' ),
            ),
            'testimonail_client_highlisht_text'	 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Highlight Text', 'welearner' ),
			),
			
        ))
                
         );