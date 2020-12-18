<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: general
 */
$options =[
    'style_settings' => [
            'title'		 => esc_html__( 'Style settings', 'evenex' ),
            'options'	 => [
                'style_body_bg' => [
                    'label'	        => esc_html__( 'Body background', 'evenex' ),
                    'desc'	           => esc_html__( 'Site\'s main background color.', 'evenex' ),
                    'type'	           => 'color-picker',
                    'value' => '#FFFFFF',
                 ],
                'style_primary' => [
                    'label'	        => esc_html__( 'Primary color', 'evenex' ),
                    'desc'	           => esc_html__( 'Site\'s main color.', 'evenex' ),
                    'type'	           => 'color-picker',
                    'value' => '#f94743',
                ],
                'style_secondary' => [
                    'label'	        => esc_html__( 'Secondary color', 'evenex' ),
                    'desc'	           => esc_html__( 'Site\'s secondary color.', 'evenex' ),
                    'type'	           => 'color-picker',
                    'value' => '#ff7c49',
                ],
                'title_color' => [
                    'label'	        => esc_html__( 'Title color', 'evenex' ),
                    'desc'	        => esc_html__( 'title color.', 'evenex' ),
                    'type'	        => 'color-picker',
                    'value' => '#101010',
                ],
                'body_font'    => array(
                    'type' => 'typography-v2',
                    'label' => esc_html__('Body Font', 'evenex'),
                    'desc'  => esc_html__('Choose the typography for the title', 'evenex'),
                    'value' => array(
                        'family' => 'Rubik',
                        'size'  => '16',
                        'font-weight' => '400',
                        'line-height' => '26'
                    ),
                    'components' => array(
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => true,
                        'letter-spacing' => false,
                        'color'          => false,
                        'font-weight'    => true,
                    ),
                ),

                'heading_font_one'	 => [
                    'type'		 => 'typography-v2',
                    'value'		 => [
                        'family'		 => 'Poppins',
                        'size'  => '36',
                        'font-weight' => '700',
                    ],
                    'components' => [
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => false,
                        'letter-spacing' => false,
                        'color'          => false,
                        'font-weight'    => true,
                    ],
                    'label'		 => esc_html__( 'Heading H1', 'evenex' ),
                    'desc'		    => esc_html__( 'This is for heading google fonts', 'evenex' ),
                ],

                'heading_font_two'	 => [
                    'type'		    => 'typography-v2',
                    'value'		 => [
                        'family'		  => 'Poppins',
                        'size'        => '30',
                        'font-weight' => '700',
                    ],
                    'components' => [
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => false,
                        'letter-spacing' => false,
                        'color'          => false,
                        'font-weight'    => true,
                    ],
                    'label'		 => esc_html__( 'Heading H2 Fonts', 'evenex' ),
                    'desc'		    => esc_html__( 'This is for heading google fonts', 'evenex' ),
                ],

                'heading_font_three'	 => [
                    'type'		    => 'typography-v2',
                    'value'		 => [
                        'family'		  => 'Poppins',
                        'size'        => '24',
                        'font-weight' => '700',
                    ],
                    'components' => [
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => false,
                        'letter-spacing' => false,
                        'color'          => false,
                        'font-weight'    => true,
                    ],
                    'label'		 => esc_html__( 'Heading H3 Fonts', 'evenex' ),
                    'desc'		    => esc_html__( 'This is for heading google fonts', 'evenex' ),
                ],
                'heading_font_four'	 => [
                    'type'		    => 'typography-v2',
                    'value'		 => [
                        'family'		  => 'Poppins',
                        'size'        => '18',
                        'font-weight' => '700',
                    ],
                    'components' => [
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => false,
                        'letter-spacing' => false,
                        'color'          => false,
                        'font-weight'    => true,
                    ],
                    'label'		 => esc_html__( 'Heading H4 Fonts', 'evenex' ),
                    'desc'		    => esc_html__( 'This is for heading google fonts', 'evenex' ),
                ],
                'heading_font_five'	 => [
                    'type'		    => 'typography-v2',
                    'value'		 => [
                        'family'		  => 'Poppins',
                        'size'        => '16',
                        'font-weight' => '700',
                    ],
                    'components' => [
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => false,
                        'letter-spacing' => false,
                        'color'          => false,
                        'font-weight'    => true,
                    ],
                    'label'		 => esc_html__( 'Heading H5 Fonts', 'evenex' ),
                    'desc'		    => esc_html__( 'This is for heading google fonts', 'evenex' ),
                ],
                'heading_font_six'	 => [
                    'type'		    => 'typography-v2',
                    'value'		 => [
                        'family'		  => 'Poppins',
                        'size'        => '14',
                        'font-weight' => '700',
                    ],
                    'components' => [
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => false,
                        'letter-spacing' => false,
                        'color'          => false,
                        'font-weight'    => true,
                    ],
                    'label'		 => esc_html__( 'Heading H6 Fonts', 'evenex' ),
                    'desc'		    => esc_html__( 'This is for heading google fonts', 'evenex' ),
                ],
            ],
        ],
    ];