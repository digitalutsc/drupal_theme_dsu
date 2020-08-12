<?php
function dsu_form_system_theme_settings_alter(&$form, Drupal\Core\Form\FormStateInterface $form_state)
{
  print_log(dsu_form_system_theme_settings_alter);

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
    ),
  );


}


/**
 * Debug function: display any variable to error log
 *
 * @param $thing
 */
function print_log($thing)
{
  error_log(print_r($thing, true), 0);
}

/**
 * Debug function: display any variable to current webpage
 * @param $thing
 */
function logging($thing)
{
  echo "<pre>";
  print_r($thing);
  echo "</pre>";
}
