<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * options for wp customizer
 * section name format: evenex_section_{section name}
 */
$options = array(
    'section_1' => array(
        'title' => __('Unyson Section', '{domain}'),
        'options' => array(

            'option_1' => array(
                'type' => 'text',
                'value' => 'Default Value',
                'label' => __('Unyson Option', '{domain}'),
                'desc' => __('Option Description', '{domain}'),
            ),

        ),
    ),
);