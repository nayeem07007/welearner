<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * options for wp customizer
 */
$options = array(
    'panel_1' => array(
        'title' => __('Welernar options', 'welearner'),
        'options' => array(

            'header_section' => array(
                'title' => __('Header Section', 'welearner'),
                'options' => array(

                    'heading_title' => array(
                        'type'  => 'text',
                        'value' => 'Discover a new way of learning',
                        'label' => __('Heading title', 'welearner'),
                    ), 
                    'heading_description' => array(
                        'type'  => 'textarea',
                        'label' => __('Heading Description', 'welearner'),
                    ),

                ),
            ),

            'section_2' => array(
                'title' => __('Counter Up section', 'welearner'),
                'options' => array(

                    'counter_one_text' => array(
                        'type' => 'text',
                        'label' => __('Conter one title', 'welearner'),
                    ),
                    'counter_one_count' => array(
                        'type' => 'text',
                        'label' => __('Counter Number', 'welearner'),
                    ),
                    'counter_two_text' => array(
                        'type' => 'text',
                        'label' => __('Conter two title', 'welearner'),
                    ),
                    'counter_two_count' => array(
                        'type' => 'text',
                        'label' => __('Counter two Number', 'welearner'),
                    ),

                    'counter_three_text' => array(
                        'type' => 'text',
                        'label' => __('Conter three title', 'welearner'),
                    ),
                    'counter_three_count' => array(
                        'type' => 'text',
                        'label' => __('Counter three Number', 'welearner'),
                    ),

                ),
            ),
            'section_3' => array(
                'title' => __('Client Logo', 'welearner'),
                'options' => array(

                    'client_logo_uplaod_option' => array(
                        'type'  => 'addable-option',
                        'label' => __('Add Logo', 'welearner'),
                        'option' => array( 'type' => 'upload' ),
                        'add-button-text' => __('Uplaod Logo', 'welearner'),
                        'sortable' => true,
                    ),
                    
                ),
            ),
            'section_4' => array(
                'title' => __('Call to action', 'welearner'),
                'options' => array(

                    'c1_title_text' => array(
                        'type' => 'text',
                        'label' => __('Call one title', 'welearner'),
                    ),
                    'c1_content' => array(
                        'type' => 'text',
                        'label' => __('Call one content ', 'welearner'),
                    ),

                    'c1_content_link' => array(
                        'type' => 'text',
                        'label' => __('Call one link', 'welearner'),
                    ),
                    'c2_title_text' => array(
                        'type' => 'text',
                        'label' => __('Call two title', 'welearner'),
                    ),
                    'c2_content' => array(
                        'type' => 'text',
                        'label' => __('Call two content', 'welearner'),
                    ),

                    'c2_content_link' => array(
                        'type' => 'text',
                        'label' => __('Call two link', 'welearner'),
                    ),
                    
                ),
            ),

        ),
    ),
);
