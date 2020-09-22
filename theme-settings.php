<?php
function dsu_form_system_theme_settings_alter(&$form, Drupal\Core\Form\FormStateInterface $form_state)
{

  $form['options']['design']['header_style']['header_option'] = array(
    '#type' => 'select',
    '#title' => 'Select a header style option:',
    '#default_value' => theme_get_setting('header_option'),
    '#options' => array(
      'h_dsu' => '*Header Digital Scholarship Unit (Exclusive)*',
    ),
  );

  // Footer Option
  $form['options']['design']['footer_style']['footer_option'] = array(
    '#type' => 'select',
    '#title' => 'Select a footer style option:',
    '#default_value' => theme_get_setting('footer_option'),
    '#options' => array(
      'none' => 'None',
      'f_dsu' => 'Footer Digital Scholarship Unit (Exclusive)',
      'f_default' => 'Footer Default (1)',
      'f_advanced' => 'Footer Advanced (2)',
      'f_simple' => 'Footer Simple (3)',
      'f_light' => 'Footer Light (4)',
      'f_light_narrow' => 'Footer Light Narrow (5)',
      'f_latest_work' => 'Footer Latest Work (6)',
      'f_contact' => 'Footer Contact Form (7)',
    ),
  );


}

/**
 * Debug function: display any variable to error log
 *
 * @param $thing
 */
if (!function_exists('print_log')) {
    function print_log($thing)
    {
        error_log(print_r($thing, true), 0);
    }
}

/**
 * Debug function: display any variable to current webpage
 * @param $thing
 */
if (!function_exists('logging')) {
    function logging($thing)
    {
        echo "<pre>";
        print_r($thing);
        echo "</pre>";
    }
}
