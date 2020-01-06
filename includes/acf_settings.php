<?php
// =====================================================================
// ACF Settings
// =====================================================================
// Register fields and add Advanced Custom Field settings that are
// unique to this theme.
// =====================================================================
if( function_exists('acf_add_local_field_group') ):

  // Content Settings
  acf_add_local_field_group(array(
    'key' => 'group_5cbb893a290e8',
    'title' => 'Content Settings',
    'fields' => array(
      array(
        'key' => 'field_5cbb894aaa709',
        'label' => 'Hide title?',
        'name' => 'hide_title',
        'type' => 'true_false',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 0,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
        ),
      ),
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'side',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));

  // Header Menu Settings
  acf_add_local_field_group(array(
    'key' => 'group_5cd4acec9d976',
    'title' => 'Header Menu Options',
    'fields' => array(
      array(
        'key' => 'field_5cd4acf14294b',
        'label' => 'Menu Addons',
        'name' => 'menu_addons',
        'type' => 'select',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          'button' => 'Button',
          'search_form' => 'Search Form',
        ),
        'default_value' => array(
        ),
        'allow_null' => 1,
        'multiple' => 0,
        'ui' => 0,
        'return_format' => 'value',
        'ajax' => 0,
        'placeholder' => '',
      ),
      array(
        'key' => 'field_5cd4b02bcfac9',
        'label' => 'Button Text',
        'name' => 'button_text',
        'type' => 'text',
        'instructions' => '',
        'required' => 1,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_5cd4acf14294b',
              'operator' => '==',
              'value' => 'Button',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5cd4b024cfac8',
        'label' => 'Button URL',
        'name' => 'button_url',
        'type' => 'url',
        'instructions' => '',
        'required' => 1,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_5cd4acf14294b',
              'operator' => '==',
              'value' => 'Button',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
      ),
      array(
        'key' => 'field_5cd123454294b',
        'label' => 'Menu Alignment',
        'name' => 'menu_alignment',
        'type' => 'select',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          'right_of_title' => 'Right of Title',
          'below_title' => 'Below Title',
        ),
        'default_value' => array(
        ),
        'allow_null' => 1,
        'multiple' => 0,
        'ui' => 0,
        'return_format' => 'value',
        'ajax' => 0,
        'placeholder' => '',
      ),

    ),
    'location' => array(
      array(
        array(
          'param' => 'nav_menu',
          'operator' => '==',
          'value' => 'location/header_menu',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));  
  
endif;