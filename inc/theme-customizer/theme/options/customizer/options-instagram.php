<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: general
 */
$options =[
    'instagram_controls' => [
        'title'		 => esc_html__( 'Instagram settings', 'evenex' ),
        'options'	 => [
            'instagram_user_id' => [
                'label'	        => esc_html__( 'User ID', 'evenex' ),
                'type'	           => 'text',
                ],
            'instagram_access_token' => [
                'label'	        => esc_html__( 'Access Token', 'evenex' ),
                'type'	           => 'text',
            ],
        ],
    ],
];