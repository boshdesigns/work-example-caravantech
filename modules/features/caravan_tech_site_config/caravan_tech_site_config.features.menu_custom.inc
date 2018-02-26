<?php
/**
 * @file
 * caravan_tech_site_config.features.menu_custom.inc
 */

/**
 * Implements hook_menu_default_menu_custom().
 */
function caravan_tech_site_config_menu_default_menu_custom() {
  $menus = array();

  // Exported menu: menu-caravan-tech-footer-menu.
  $menus['menu-caravan-tech-footer-menu'] = array(
    'menu_name' => 'menu-caravan-tech-footer-menu',
    'title' => 'Caravan Tech Footer Menu',
    'description' => 'Extra links to be added to the footer menu',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Caravan Tech Footer Menu');
  t('Extra links to be added to the footer menu');

  return $menus;
}
