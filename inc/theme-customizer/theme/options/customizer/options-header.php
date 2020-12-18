<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: Header
 */

$header_settings = evenex_option('theme_header_default_settings');
$header_id = '';
$header_builder_enable = evenex_option('header_builder_enable');
if($header_builder_enable=='yes'){
    $header_id =   $header_settings['yes']['evenex_header_builder_select'];
}

$options =[
    'header_settings' => [
        'title'		 => esc_html__( 'Header settings', 'evenex' ),

        'options'	 => [
            'header_builder_enable' => [
                'type'			   => 'switch',
                'label'			   => esc_html__( 'Header builder Enable', 'evenex' ),
                'desc'			   => '' ,
                'value'           => 'no',
                'left-choice'	 => [
                    'value'	 => 'yes',
                    'label'	 => esc_html__('Yes', 'evenex'),
                ],
                'right-choice'	 => [
                    'value'	 => 'no',
                    'label'	 => esc_html__('No', 'evenex'),
                ],
            ],

            'theme_header_default_settings' => array(
                'type' => 'multi-picker',
                'picker' => 'header_builder_enable',

                'choices' => array(
                    'yes' => array(
                        'evenex_header_builder_select' =>array(
                            'type'  => 'select',

                            'attr'  => array( 'class' => 'evenex_header_builder_select', 'data-foo' => 'evenex_header_builder_select' ),
                            'label' => __('Header style', 'evenex'),

                            'choices' => evenex_ekit_headers(),

                            'no-validate' => false,
                        ),
                        'edit_header' => array(
                            'type'  => 'html',
                            'value' => '',

                            'label' => __('edit', 'evenex'),
                            'html'  => '<h3 class="header_builder_edit"><a class="evenex_header_builder_edit_link" target="_blank" href='. admin_url( 'post.php?action=elementor&post='.$header_id ). '>'. esc_html('Edit content here.'). '</a><h3>' ,
                        ),
                    ),
                    'no' => array(
                    )
                )
            ),
            'search_show' => [
                'type'			 => 'switch',
                'label'			 => esc_html__( 'Show Search?', 'evenex' ),
                'desc'          => esc_html__('Show or hide the header Search', 'evenex'),
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
            'btn_show' => [
                'type'			 => 'switch',
                'label'			 => esc_html__( 'Show Button?', 'evenex' ),
                'desc'          => esc_html__('Show or hide the header Button', 'evenex'),
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
            'btn_text' => [
                'type'  => 'text',
                'value' => 'Book Tickets',
                'label' => __('Button text', 'evenex'),
            ],
            'btn_url' => [
                'type'  => 'text',
                'value' => '#',
                'label' => __('Button Url', 'evenex'),
            ],
        ], //Options end
    ]
];