<?php

function caravantech_entity_view_alter(&$build, $type){
  if ($type == 'node' && $build['#bundle'] == 'branch') {
    if ($build['#view_mode'] == 'footer') {
      if (isset($build['#node']->field_branch_reg_office_option) && !empty($build['#node']->field_branch_reg_office_option)) {
        if ($build['#node']->field_branch_reg_office_option[LANGUAGE_NONE][0]['value'] == FALSE) {
          if (isset($build['field_address'])) {
            unset($build['field_address']);
          }
        }
      }
    }
    elseif (isset($build['field_branch_reg_office_address'])) {
      unset($build['field_branch_reg_office_address']);
    }
  }

//Show the page title outside the DS template and hide DS $title
if ($type == 'node'){
   if(($build['#bundle'] == 'page' || $build['#bundle'] == 'used_vehicle' || $build['#bundle'] == 'new_vehicle') && ($build['#view_mode'] == 'full' || $build['#view_mode'] == 'contact_page')) {
     $bundle = $build['#bundle'];
     $view_mode = $build['#view_mode'];
     $layout = ds_get_layout($type, $bundle, $view_mode);
     if (variable_get('ds_extras_hide_page_title', FALSE)) {
       $page_title = &drupal_static('ds_page_title');
       if (isset($layout['settings']['hide_page_title']) && $layout['settings']['hide_page_title'] == 1 && isset($build['title'][0]['#markup']) && ds_extras_is_entity_page_view($build, $type)) {
         //Set page title
         $page_title['title'] = strip_tags($build['title'][0]['#markup']);
         //Hide DS title so you don't have both
         unset($build['title']);
       }
     }
   }
  }
}


function caravantech_preprocess_page(&$vars) {


  // Set up opening hours on page.tpl
  function build_opening_hours($view_mode) {
    $departments = node_load_multiple(array(), array('type' => 'department'));

    if(isset($departments) && !empty($departments)) {
      // Start building up the content
      $details_output = '<section class="opening-hours ' . $view_mode . '-view"><h4 class="opening-hours__title">Opening Hours</h4><ul class="opening-hours__list">';

      foreach($departments as $department) {

        foreach($department->field_opening_hours as $opening) {
          foreach($opening as $key => $term) {
            $term_load = taxonomy_term_load($term['tid']);
            if ($term_load->field_label['und'][0]['value'] === 'Monday' || $term_load->field_label['und'][0]['value'] === 'Saturday' || $term_load->field_label['und'][0]['value'] === 'Sunday') {
              if ($term_load->field_label['und'][0]['value'] === 'Monday') {
                $details_output .= '<li><div class="opening-hours__hours-title">Mon-Fri</div>';
              } else {
                $details_output .= '<li><div class="opening-hours__hours-title">' . $term_load->field_label['und'][0]['value'] . '</div>';
              }

              $details_output .= '<div class="opening-hours__hours-value">' . $term_load->field_hours['und'][0]['value'] . '</div></li>';
            }
          }
        }
      }

      // Add the SEO tag to the header view
      if ($view_mode == 'header') {
        $details_output .= '<li><h3 class="opening-hours__seo-tag">' . token_replace('[fmgauto:primary_dealer_address_locality]') . ", " . token_replace('[fmgauto:primary_dealer_address_admin_area]') . '</h3></li>';
      }

      // ** see page.tpl for printed content
      $details_output .= '</ul></section>';
      return $details_output;
    }
  }

}

function caravantech_field__expert__used_vehicle($variables) {
  $output = '';

  $config = $variables['ds-config'];

  // Render the label if it's not hidden.
  if (!$variables['label_hidden']) {
    $label_wrapper = isset($config['lb-el']) ? $config['lb-el'] : 'div';
    $class = array('label-' . $variables['element']['#label_display']);
    if (!empty($config['lb-cl'])) {
      $class[] = $config['lb-cl'];
    }
    $class = !empty($class) ? ' class="' . implode(' ', $class) . '"' : '';
    $attributes = array();
    if (!empty($config['lb-at'])) {
      $attributes[] = $config['lb-at'];
    }
    if (!empty($config['lb-def-at'])) {
      $attributes[] = $variables['title_attributes'];
    }
    $attributes = (!empty($attributes)) ? ' ' . implode(' ', $attributes) : '';
    $output .= '<' . $label_wrapper . $class . $attributes . '>' . $variables['label'];
    if (!isset($config['lb-col'])) {
      $output .= ':&nbsp;';
    }
    $output .= '</' . $label_wrapper . '>';
  }

  // Field items wrapper
  if (isset($config['fis'])) {
    $class = (!empty($config['fis-cl'])) ? ' class="' . $config['fis-cl'] . '"' : '';
    $attributes = array();
    if (!empty($config['fis-at'])) {
      $attributes[] = $config['fis-at'];
    }
    if (!empty($config['fis-def-at'])) {
      $attributes[] = $variables['content_attributes'];
    }
    $attributes = (!empty($attributes)) ? ' ' . implode(' ', $attributes) : '';
    $output .= '<' . $config['fis-el'] . $class . $attributes . '>';
  }

  // Render items.
  foreach ($variables['items'] as $delta => $item) {
    // Field item wrapper.
    if (isset($config['fi'])) {
      $class = array();
      if (!empty($config['fi-odd-even'])) {
        $class[] = $delta % 2 ? 'odd' : 'even';
      }
      if (!empty($config['fi-cl'])) {
        $class[] = $config['fi-cl'];
      }
      $class = !empty($class) ? ' class="' . implode(' ', $class)  . '"' : '';
      $attributes = array();
      if (!empty($config['fi-at'])) {
        $attributes[] = token_replace($config['fi-at'], array($variables['element']['#entity_type'] => $variables['element']['#object']), array('clear' => TRUE));
      }
      if (!empty($config['fi-def-at'])) {
        $attributes[] = $variables['item_attributes'][$delta];
      }
      $attributes = (!empty($attributes)) ? ' ' . implode(' ', $attributes) : '';
      $output .= '<' . $config['fi-el'] . $class . $attributes . '>';
    }

    if($variables['element']['#field_name'] == 'field_mc_berth') {
      for ($i = 1; $i <= $variables['element']['#items'][0]['value']; $i++) {
        $output .= '<i class="fa fa-user berth-icon"></i>';
      }
    } else {
      // Render field content.
      $output .= drupal_render($item);
    }



    // Closing field item wrapper.
    if (isset($config['fi'])) {
      $output .= '</' . $config['fi-el'] . '>';
    }
  }

  // Closing field items wrapper.
  if (isset($config['fis'])) {
    $output .= '</' . $config['fis-el'] . '>';
  }

  // Outer wrapper.
  if (isset($config['ow'])) {
    $class = array();
    if (!empty($config['ow-cl'])) {
      $class[] = $config['ow-cl'];
    }
    if (!empty($config['ow-def-cl'])) {
      $class[] = $variables['classes'];
    }
    $class = (!empty($class)) ? ' class="' . implode(' ', $class) . '"' : '';
    $attributes = array();
    if (!empty($config['ow-at'])) {
      $attributes[] = $config['ow-at'];
    }
    if (!empty($config['ow-def-at'])) {
      $attributes[] = $variables['attributes'];
    }
    $attributes = (!empty($attributes)) ? ' ' . implode(' ', $attributes) : '';
    $output = '<' . $config['ow-el'] . $class . $attributes . '>' . $output . '</' . $config['ow-el'] . '>';
  }

  return $output;
}
