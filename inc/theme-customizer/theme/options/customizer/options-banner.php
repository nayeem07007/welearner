<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: banner
 */


$options = [
    'banner_setting' => [
        'title' => esc_html__('Banner settings', 'evenex'),

        'options' => [
            'page_banner_setting' => [
                'type'        => 'popup',
                'label'       => esc_html__('Page Banner Settings', 'evenex'),
                'popup-title' => esc_html__('Page Banner Settings', 'evenex'),
                'button'      => esc_html__('Edit Page Banner', 'evenex'),
                'size'        => 'medium', // small, medium, large
                'popup-options' => [
                    'page_show_banner' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show banner?', 'evenex' ),
                        'desc'          => esc_html__('Show or hide the banner', 'evenex'),
                        'value'         => 'yes',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'evenex' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'evenex' ),
                        ],
                    ],
                    'page_show_breadcrumb' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show Breadcrumb?', 'evenex' ),
                        'desc'          => esc_html__('Show or hide the Breadcrumb', 'evenex'),
                        'value'         => 'yes',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'evenex' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'evenex' ),
                        ],
                    ],
                    'banner_page_title'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Banner title', 'evenex' ),
                        'value'  => '',
                    ],
                    'banner_page_sub_title'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Banner Sub title', 'evenex' ),
                        'value'  => '',
                    ],
                    'banner_page_title_color' => [
                        'type'  => 'color-picker',
                        'value' => '#101010',
                        'label' => __('Title Color', 'evenex'),
                    ],
                    'banner_page_image'	 => [
                        'label'			 => esc_html__( 'Banner image', 'evenex' ),
                        'type'			 => 'upload',
                        'images_only'	 => true,
                        'files_ext'		 => array( 'jpg', 'png', 'jpeg', 'gif', 'svg' ),
                    ],
                ],
            ],

            'blog_banner_setting' => [
                'type'         => 'popup',
                'label'        => esc_html__('Blog banner settings', 'evenex'),
                'popup-title'  => esc_html__('Blog banner settings', 'evenex'),
                'button'       => esc_html__('Edit Blog Banner', 'evenex'),
                'size'         => 'medium', // small, medium, large
                'popup-options' => [
                    'blog_show_banner' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show banner?', 'evenex' ),
                        'desc'          => esc_html__('Show or hide the banner', 'evenex'),
                        'value'         => 'yes',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'evenex' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'evenex' ),
                        ],
                    ],
                    'blog_show_breadcrumb' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show Breadcrumb?', 'evenex' ),
                        'desc'          => esc_html__('Show or hide the Breadcrumb', 'evenex'),
                        'value'         => 'no',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'evenex' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'evenex' ),
                        ],
                    ],
                    'banner_blog_title'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Banner title', 'evenex' ),
                    ],
                    'banner_blog_sub_title'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Banner Sub title', 'evenex' ),
                        'value'  => '',
                    ],
                    'banner_blog_title_color' => [
                        'type'  => 'color-picker',
                        'value' => '#101010',
                        'label' => __('Title Color', 'evenex'),
                    ],
                    'banner_blog_image'	 =>array(
                        'type'  => 'upload',
                        'label' => esc_html__('Image', 'evenex'),
                        'desc'  => esc_html__('Banner blog image', 'evenex'),
                        'images_only' => true,
                        'files_ext' => array( 'PNG', 'JPEG', 'JPG','GIF'),
                    )

                ],
            ],

            'blog_single_banner_setting' => [
                'type'         => 'popup',
                'label'        => esc_html__('Blog Single banner settings', 'evenex'),
                'popup-title'  => esc_html__('Blog Single banner settings', 'evenex'),
                'button'       => esc_html__('Edit Blog Single Banner', 'evenex'),
                'size'         => 'medium', // small, medium, large
                'popup-options' => [
                    'blog_single_show_banner' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show banner?', 'evenex' ),
                        'desc'          => esc_html__('Show or hide the banner', 'evenex'),
                        'value'         => 'yes',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'evenex' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'evenex' ),
                        ],
                    ],
                    'blog_single_show_breadcrumb' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show Breadcrumb?', 'evenex' ),
                        'desc'          => esc_html__('Show or hide the Breadcrumb', 'evenex'),
                        'value'         => 'no',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'evenex' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'evenex' ),
                        ],
                    ],
                    'banner_single_blog_title'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Banner title', 'evenex' ),
                    ],
                    'banner_single_blog_title_color' => [
                        'type'  => 'color-picker',
                        'value' => '#101010',
                        'label' => __('Title Color', 'evenex'),
                    ],
                    'banner_single_blog_image'	 =>array(
                        'type'  => 'upload',
                        'label' => esc_html__('Image', 'evenex'),
                        'desc'  => esc_html__('Banner blog image', 'evenex'),
                        'images_only' => true,
                        'files_ext' => array( 'PNG', 'JPEG', 'JPG','GIF'),
                    )

                ],
            ],

            'custom_post_banner_settings' => [
                'type'         => 'popup',
                'label'        => esc_html__('Speaker banner settings', 'evenex'),
                'popup-title'  => esc_html__('Speaker banner settings', 'evenex'),
                'button'       => esc_html__('Edit Speaker Post Banner', 'evenex'),
                'size'         => 'medium', // small, medium, large
                'popup-options' => [
                    'custom_post_show_banner' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show banner?', 'evenex' ),
                        'desc'          => esc_html__('Show or hide the banner', 'evenex'),
                        'value'         => 'yes',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'evenex' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'evenex' ),
                        ],
                    ],
                    'custom_post_banner_show_breadcrumb' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show Breadcrumb?', 'evenex' ),
                        'desc'          => esc_html__('Show or hide the Breadcrumb', 'evenex'),
                        'value'         => 'no',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'evenex' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'evenex' ),
                        ],
                    ],
                    'custom_post_banner_title_color' => [
                        'type'  => 'color-picker',
                        'value' => '#101010',
                        'label' => __('Title Color', 'evenex'),
                    ],
                    'custom_post_banner_image'	 =>array(
                        'type'  => 'upload',
                        'label' => esc_html__('Image', 'evenex'),
                        'desc'  => esc_html__('Banner blog image', 'evenex'),
                        'images_only' => true,
                        'files_ext' => array( 'PNG', 'JPEG', 'JPG','GIF'),
                    )

                ],
            ],

        ],
    ],
];