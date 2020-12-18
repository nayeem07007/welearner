<?php if (!defined('ABSPATH')) die('Direct access forbidden.');

$options = [
    'evenex_product_cat'=>[
        'type'  => 'icon-v2',
        'label' =>esc_html__('Category icon', 'evenex'),
        'desc'  =>esc_html__('Category icon', 'evenex'),
    ],
    'icon_bg_color' => [
    'type'  => 'rgba-color-picker',
    'value' => 'rgba(255,0,0,0.5)',
    // palette colors array
    'label' => __('Icon Background Color', '{domain}'),
    ]
];