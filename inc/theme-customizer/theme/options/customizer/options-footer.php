<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: general
 */
$footer_settings = evenex_option('theme_header_default_settings');
$footer_id = '';
$footer_builder_enable = evenex_option('header_builder_enable');
if($footer_builder_enable=='yes'){
    $footer_id =   $footer_settings['yes']['evenex_footer_builder_select'];
}

$options =[
    'footer_settings' => [
        'title'		 => esc_html__( 'Footer settings', 'evenex' ),

        'options'	 => [
            'footer_builder_enable' => [
                'type'			   => 'switch',
                'label'			   => esc_html__( 'Footer builder Enable', 'evenex' ),
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

            'theme_footer_default_settings' => array(
                'type' => 'multi-picker',
                'picker' => 'footer_builder_enable',

                'choices' => array(
                    'yes' => array(
                        'evenex_footer_builder_select' =>array(
                            'type'  => 'select',

                            'attr'  => array( 'class' => 'evenex_footer_builder_select', 'data-foo' => 'evenex_footer_builder_select' ),
                            'label' => __('Footer style', 'evenex'),

                            'choices' => evenex_ekit_footers(),

                            'no-validate' => false,
                        ),
                        'edit_footer' => array(
                            'type'  => 'html',
                            'value' => '',

                            'label' => __('edit', 'evenex'),
                            'html'  => '<h3 class="header_builder_edit"><a class="evenex_header_builder_edit_link" target="_blank" href='. admin_url( 'post.php?action=elementor&post='.$footer_id ). '>'. esc_html('Edit content here.'). '</a><h3>' ,
                        ),
                    ),
                    'no' => array(

                    )
                )
            ),
            'footer_bg_color' => [
                'label'	 => esc_html__( 'Footer Background color', 'evenex'),
                'type'	 => 'color-picker',
                'value' => '#101010',
                'desc'	 => esc_html__( 'You can change the footer\'s background color with rgba color or solid color', 'evenex'),
            ],
            'copyright_text' => [
                'label'	 => esc_html__( 'Copyright Text', 'evenex'),
                'type'	 => 'textarea',
                'desc'	 => esc_html__( 'You can change the footer\'s copyright text', 'evenex'),
            ],
        ],
    ]
];