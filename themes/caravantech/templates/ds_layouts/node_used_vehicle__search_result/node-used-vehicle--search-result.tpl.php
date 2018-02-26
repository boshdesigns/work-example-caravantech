<?php
/**
* @file
* Display Suite FMG Auto template.
*
* Available variables:
*
* Layout:
* - $classes: String of classes that can be used to style this layout.
* - $contextual_links: Renderable array of contextual links.
* - $layout_wrapper: wrapper surrounding the layout.
*
* Regions:
*
* - $title
* - $price
* - $montly_price
* - $photo
* - $spec
* - $youtube
* - $social
* - $additional
* - $more_info
* - $sash
*/
?>

<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> l-node-used-vehicle--search-result clearfix">

  <?php if(!empty($title) || !empty($price) || !empty($monthly_price)): ?>
    <div class="l-node-used-vehicle--search-result__header--outer">
      <div class="l-node-used-vehicle--search-result__header">
        <div class="l-node-used-vehicle--search-result__header--inner">

          <?php if(!empty($title)): ?>
            <div class="l-node-used-vehicle--search-result__title">
              <?php print $title; ?>
            </div>
          <?php endif; ?>

          <?php if(!empty($price) || !empty($monthly_price) || !empty($was_price) || !empty($saving_price)): ?>
            <div class="l-node-used-vehicle--search-result__price">
              <?php print $price; ?>
              <?php if(!empty($monthly_price)): ?>
                <div class="l-node-used-vehicle--search-result__monthly-price">
                  <?php print $monthly_price; ?>
                </div>
              <?php endif; ?>
              <?php if(!empty($was_price) || !empty($saving_price)): ?>
                <div class="l-node-used-vehicle--search-result__saving-price">
                  <?php print $was_price; ?>
                  <?php print $saving_price; ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>

        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if(!empty($photo)): ?>
    <div class="l-node-used-vehicle--search-result__photo">
      <div class="l-node-used-vehicle--search-result__photo-sash-wrap">
        <?php print $photo; ?>
        <?php if(!empty($sash)): ?>
          <div class="l-node-used-vehicle--search-result__sash">
            <?php print $sash; ?>
          </div>
        <?php endif; ?>
      </div>
      <?php if(!empty($photo_count)): ?>
        <div class="l-node-used-vehicle--search-result__photo-count">
          <?php print $photo_count; ?>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <?php if(!empty($vehicle_specs)): ?>
    <div class="l-node-used-vehicle--search-result__spec">
      <?php print $vehicle_specs; ?>
    </div>
  <?php endif; ?>

  <?php if(!empty($additional)): ?>
    <div class="l-node-used-vehicle--search-result__additional">
      <?php print $additional; ?>
    </div>
  <?php endif; ?>

  <?php if(!empty($photo_thumb)): ?>
    <div class="l-node-used-vehicle--search-result__thumbnail">
      <?php print $photo_thumb; ?>
    </div>
  <?php endif; ?>

  <?php if(!empty($ivendi)): ?>
    <div class="l-node-used-vehicle--search-result__ivendi">
      <?php print $ivendi; ?>
    </div>
  <?php endif; ?>

  <?php if(!empty($youtube) || !empty($social) || !empty($save_vehicle) || !empty($more_info)): ?>
    <div class="l-node-used-vehicle--search-result__footer">

      <?php if(!empty($youtube)): ?>
        <div class="l-node-used-vehicle--search-result__youtube">
          <?php print $youtube; ?>
        </div>
      <?php endif; ?>

      <?php if(!empty($social)): ?>
        <div class="l-node-used-vehicle--search-result__social">
          <?php print $social; ?>
        </div>
      <?php endif; ?>

      <?php if(!empty($more_info)): ?>
        <div class="l-node-used-vehicle--search-result__more-info">
          <?php if(!empty($save_vehicle)): ?>
    				  <?php print $save_vehicle; ?>
    			<?php endif; ?>
          <?php print $more_info; ?>
        </div>
      <?php endif; ?>

    </div>
  <?php endif; ?>

</<?php print $layout_wrapper ?>>

<?php
// Needed to activate display suite support on forms
if (!empty($drupal_render_children)):
  print $drupal_render_children;
endif;
?>
