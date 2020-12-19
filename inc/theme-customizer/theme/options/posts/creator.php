<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * metabox options for pages
 */
$options = array(
	'settings_testimonail' => array(
		'title'		 => esc_html__( 'Creator settings', 'welearner' ),
		'type'		 => 'box',
		'priority'	 => 'high',
		'options'	 => array(
			
			'creator_designation'	 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Designation', 'welearner' ),
            ),
            'creator_img_bg'	 => array(
                'type'  => 'rgba-color-picker',
                 'label' => __('Creator Background Color', 'welearner'),
            ),
            
            'creator_social_media_client_designation'	 => array(
                'type' => 'addable-popup',
             
                'label' => __('Creator Social media', 'welearner'),
                'template' => '{{- social_media_title }}',
                'popup-title' => null,
                'size' => 'small', // small, medium, large
                'limit' => 3, // limit the number of popup`s that can be added
                'add-button-text' => __('Add', 'welearner'),
                'sortable' => true,
                'popup-options' => array(
                    'social_media_title' => array(
                        'label' => __('title', 'welearner'),
                        'type' => 'text',
                    ),
                    'social_media_link' => array(
                        'label' => __('Social media link', 'welearner'),
                        'type' => 'text',
                    ),
                    'social_icon' => array(
                        'type'  => 'icon-v2',
                        'label' => __('Label', 'welearner'),
                    ),
                ),
            ),
            
        ))
                
         );