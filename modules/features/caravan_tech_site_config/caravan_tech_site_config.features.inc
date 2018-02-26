<?php
/**
 * @file
 * caravan_tech_site_config.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function caravan_tech_site_config_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_image_default_styles().
 */
function caravan_tech_site_config_image_default_styles() {
  $styles = array();

  // Exported image style: caravan_tech___homepage_slideshow_1024x320.
  $styles['caravan_tech___homepage_slideshow_1024x320'] = array(
    'label' => 'Caravan Tech - Homepage Slideshow 1024x320',
    'effects' => array(
      13 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 1024,
          'height' => 320,
          'upscale' => TRUE,
        ),
        'weight' => 0,
      ),
    ),
  );

  // Exported image style: caravan_tech___homepage_slideshow_1280x400.
  $styles['caravan_tech___homepage_slideshow_1280x400'] = array(
    'label' => 'Caravan Tech - Homepage Slideshow 1280x400',
    'effects' => array(
      14 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 1280,
          'height' => 400,
          'upscale' => TRUE,
        ),
        'weight' => 0,
      ),
    ),
  );

  // Exported image style: caravan_tech___homepage_slideshow_1440x450.
  $styles['caravan_tech___homepage_slideshow_1440x450'] = array(
    'label' => 'Caravan Tech - Homepage Slideshow 1440x450',
    'effects' => array(
      15 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 1440,
          'height' => 450,
          'upscale' => TRUE,
        ),
        'weight' => 0,
      ),
    ),
  );

  // Exported image style: caravan_tech___homepage_slideshow_1920x600.
  $styles['caravan_tech___homepage_slideshow_1920x600'] = array(
    'label' => 'Caravan Tech - Homepage Slideshow 1920x600',
    'effects' => array(
      16 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 1920,
          'height' => 600,
          'upscale' => TRUE,
        ),
        'weight' => 0,
      ),
    ),
  );

  // Exported image style: caravan_tech___homepage_slideshow_320x100.
  $styles['caravan_tech___homepage_slideshow_320x100'] = array(
    'label' => 'Caravan Tech - Homepage Slideshow 320x100',
    'effects' => array(
      9 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 320,
          'height' => 100,
          'upscale' => TRUE,
        ),
        'weight' => 0,
      ),
    ),
  );

  // Exported image style: caravan_tech___homepage_slideshow_480x150.
  $styles['caravan_tech___homepage_slideshow_480x150'] = array(
    'label' => 'Caravan Tech - Homepage Slideshow 480x150',
    'effects' => array(
      10 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 480,
          'height' => 150,
          'upscale' => TRUE,
        ),
        'weight' => 0,
      ),
    ),
  );

  // Exported image style: caravan_tech___homepage_slideshow_640x200.
  $styles['caravan_tech___homepage_slideshow_640x200'] = array(
    'label' => 'Caravan Tech - Homepage Slideshow 640x200',
    'effects' => array(
      11 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 640,
          'height' => 200,
          'upscale' => TRUE,
        ),
        'weight' => 0,
      ),
    ),
  );

  // Exported image style: caravan_tech___homepage_slideshow_800x250.
  $styles['caravan_tech___homepage_slideshow_800x250'] = array(
    'label' => 'Caravan Tech - Homepage Slideshow 800x250',
    'effects' => array(
      12 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 800,
          'height' => 250,
          'upscale' => TRUE,
        ),
        'weight' => 0,
      ),
    ),
  );

  return $styles;
}
