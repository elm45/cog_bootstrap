<?php

/**
 * @file
 * Theme settings form for Cog Bootstrap theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function cog_bootstrap_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['cog_bootstrap'] = [
    '#type' => 'details',
    '#title' => t('Cog Bootstrap'),
    '#open' => TRUE,
  ];

  $form['cog_bootstrap']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
