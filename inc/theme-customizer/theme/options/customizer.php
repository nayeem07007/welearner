<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * options for wp customizer
 * section name format: evenex_section_{section name}
 */
$options = array(
    'panel_1' => array(
        'title' => __('Welernar options', 'welerner'),
        'options' => array(

            'header_section' => array(
                'title' => __('Header Section', 'welerner'),
                'options' => array(

                    'heading_title' => array(
                        'type'  => 'text',
                        'value' => 'Discover a new way of learning',
                        'label' => __('Heading title', 'welerner'),
                    ), 
                    'heading_description' => array(
                        'type'  => 'textarea',
                        'label' => __('Heading Description', 'welerner'),
                    ),

                ),
            ),

            'section_2' => array(
                'title' => __('Counter Up section', 'welerner'),
                'options' => array(

                    'counter_one_text' => array(
                        'type' => 'text',
                        'label' => __('Conter one title', 'welerner'),
                    ),
                    'counter_one_count' => array(
                        'type' => 'text',
                        'label' => __('Counter Number', 'welerner'),
                    ),
                    'counter_two_text' => array(
                        'type' => 'text',
                        'label' => __('Conter two title', 'welerner'),
                    ),
                    'counter_two_count' => array(
                        'type' => 'text',
                        'label' => __('Counter two Number', 'welerner'),
                    ),

                    'counter_three_text' => array(
                        'type' => 'text',
                        'label' => __('Conter three title', 'welerner'),
                    ),
                    'counter_three_count' => array(
                        'type' => 'text',
                        'label' => __('Counter three Number', 'welerner'),
                    ),

                ),
            ),
            'section_3' => array(
                'title' => __('Client Logo', 'welerner'),
                'options' => array(

                    'client_logo_uplaod_option' => array(
                        'type'  => 'addable-option',
                        'label' => __('Add Logo', 'welerner'),
                        'option' => array( 'type' => 'upload' ),
                        'add-button-text' => __('Uplaod Logo', 'welerner'),
                        'sortable' => true,
                    ),
                    
                ),
            ),
            'section_4' => array(
                'title' => __('Call to action', 'welerner'),
                'options' => array(

                    'c1_title_text' => array(
                        'type' => 'text',
                        'label' => __('Call one title', 'welerner'),
                    ),
                    'c1_content' => array(
                        'type' => 'text',
                        'label' => __('Call one content ', 'welerner'),
                    ),

                    'c1_content_link' => array(
                        'type' => 'text',
                        'label' => __('Call one link', 'welerner'),
                    ),
                    'c2_title_text' => array(
                        'type' => 'text',
                        'label' => __('Call two title', 'welerner'),
                    ),
                    'c2_content' => array(
                        'type' => 'text',
                        'label' => __('Call two content', 'welerner'),
                    ),

                    'c2_content_link' => array(
                        'type' => 'text',
                        'label' => __('Call two link', 'welerner'),
                    ),
                    
                ),
            ),

        ),
    ),
);
