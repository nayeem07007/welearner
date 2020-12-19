<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * metabox options for pages
 */
$options = array(
	'settings_courses' => array(
		'title'		 => esc_html__( 'Course settings', 'welearner' ),
		'type'		 => 'box',
		'priority'	 => 'high',
		'options'	 => array(
			
			'course_price'	 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Course price', 'welearner' ),
			),
			'course_sell_price'	 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Course sell price', 'welearner' ),
            ),
            'taxonomy_bg_color' => array (
                'type'  => 'color-picker',
                'label' => __('Taxonomy Background Color', 'welearner'),
            ),
            'taxonomy__color' => array (
                'type'  => 'color-picker',
                'label' => __('Taxonomy  Color', 'welearner'),
            ),
			'rating_course'	 => array(
                'type'  => 'select',
                'fw-storage' => array(
                    'type' => 'post-meta',
                    'post-meta' => 'fw_option:rating_course',
                ),
                'value' => '5',
                'label' => __('Course Rating', 'welearner'),
                'choices' => array(
                    '' => '---',
                    '1' => __(' 1', 'welearner'),
                    '2' => __(' 2', 'welearner'),
                    '3' => __(' 3', 'welearner'),
                    '4' => __(' 4', 'welearner'),
                    '5' => __(' 5', 'welearner'),
                ),
                /**
                 * Allow save not existing choices
                 * Useful when you use the select to populate it dynamically from js
                 */
                'no-validate' => false,
                    ),
                    ),
                ),
                
         );