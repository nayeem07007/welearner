<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: blog
 */

$options =[
    'blog_settings' => [
        'title'		 => esc_html__( 'Blog settings', 'evenex' ),

        'options'	 => [
            'blog_sidebar' =>[
                'type'  => 'select',

                'label' => esc_html__('Sidebar', 'evenex'),
                'desc'  => esc_html__('Description', 'evenex'),
                'help'  => esc_html__('Help tip', 'evenex'),
                'choices' => array(
                    '1' => esc_html__('No sidebar','evenex'),
                    '2' => esc_html__('Left Sidebar', 'evenex'),
                    '3' => esc_html__('Right Sidebar', 'evenex'),

                 ),
                 'value'          => '1',
                'no-validate' => false,
            ],
        ],
    ]
];