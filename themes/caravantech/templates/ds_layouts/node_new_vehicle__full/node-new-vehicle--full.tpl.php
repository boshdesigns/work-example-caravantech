<?php
/**
* @file
* Display Suite New Vehicle template.
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
* - $slideshow
* - $body
* - $additionalbody
* - $photos
* - $videos
* - $specs
* - $files
* - $ctas
* - $social
* - $form
*
* Additional Feature Regions:
*
* OFFERS FEATURE REGION
* - $offers (Provides all offers assigned globally and to the current node via the Children section)
*
* CAP FEATURE REGIONS
* - $cap_gallery (CAP Images)
* - $cap_specs (Vehicle Specs fields same as Used Vehicles, engine, model etc)
* - $cap_jump_menu (Select box of all variants/models with matching Manufacturer & Range to current node)
* - $cap_variants (List of all variants/models with matching Manufacturer & Range to current node)
* - $cap_technical (Technical data)
* - $cap_equipment (Equipment with this model)
* - $cap_options (Options from ECK Vehicle Options)
*
*/
?>

<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> l-node-new-vehicle--full clearfix">

  <?php if(!empty($slideshow)): ?>
    <div class="l-node-new-vehicle--full__slideshow">
      <?php print $slideshow; ?>
    </div>
  <?php endif; ?>



  <?php if(!empty($photos) || !empty($videos)): ?>
    <div class="l-node-new-vehicle--full__gallery">

      <ul class="tabs tabs--node-new-vehicle-gallery" data-tab>
        <?php if(!empty($photos)): ?>
          <li class="tab-title active"><a href="#tab-images">Images</a></li>
        <?php endif; ?>
        <?php if(!empty($cap_gallery)): ?>
          <li class="tab-title"><a href="#tab-cap-gallery">Library Images</a></li>
        <?php endif; ?>
        <?php if(!empty($videos)): ?>
          <li class="tab-title"><a href="#tab-video">Video</a></li>
        <?php endif; ?>
      </ul>
      <div class="tabs-content tabs-content--node-new-vehicle-gallery">
        <?php if(!empty($photos)): ?>
          <div class="content active" id="tab-images">
            <div class="l-node-new-vehicle--full__photo-sash-wrap">
              <?php print $photos; ?>
              <?php if(!empty($sash)) : ?>
                <div class="l-node-new-vehicle--full__sash">
                  <?php print $sash; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>
        <?php if(!empty($cap_gallery)): ?>
          <div class="content" id="tab-cap-gallery">
            <?php print $cap_gallery; ?>
          </div>
        <?php endif; ?>
        <?php if(!empty($videos)): ?>
          <div class="content" id="tab-video">
            <?php print $videos; ?>
          </div>
        <?php endif; ?>
      </div>

    </div>
  <?php endif; ?>

  <?php if(!empty($title) || !empty($price) || !empty($ctas) || !empty($files) || !empty($social)): ?>
		<div class="l-node-new-vehicle--full__main-details">

      <?php if(!empty($title)): ?>
        <div class="l-node-new-vehicle--full__title">
          <?php print $title; ?>
        </div>
      <?php endif; ?>

      <?php if(!empty($price)): ?>
        <div class="l-node-new-vehicle--full__price">
          <?php print $price; ?>
        </div>
      <?php endif; ?>

      <?php if(!empty($ctas)): ?>
        <div class="l-node-new-vehicle--full__ctas">
          <?php print $ctas; ?>
        </div>
      <?php endif; ?>

      <?php if(!empty($files)): ?>
        <div class="l-node-new-vehicle--full__files">
          <?php print $files; ?>
        </div>
      <?php endif; ?>

      <?php if(!empty($social)): ?>
        <div class="l-node-new-vehicle--full__social">
          <?php print $social; ?>
        </div>
      <?php endif; ?>

		</div>
	<?php endif; ?>

  <?php if(!empty($body)): ?>
    <div id="additional-info" class="l-node-new-vehicle--full__body">
      <?php print $body; ?>
    </div>
  <?php endif; ?>

  <?php if(!empty($cap_specs)): ?>
    <div class="l-node-new-vehicle--full__cap-specs">
      <?php print $cap_specs; ?>
    </div>
  <?php endif; ?>

  <?php if(!empty($cap_jump_menu)): ?>
    <div class="l-node-new-vehicle--full__cap-jump-menu">
      <?php print $cap_jump_menu; ?>
    </div>
  <?php endif; ?>

  <?php if(!empty($additionalbody)): ?>
    <div class="l-node-new-vehicle--full__additional-body">
      <?php print $additionalbody; ?>
    </div>
  <?php endif; ?>

  <?php if(!empty($cap_equipment) || !empty($cap_technical) || !empty($cap_options) || !empty($cap_variants)): ?>
    <div class="l-node-new-vehicle--full__cap">

      <ul class="tabs tabs--node-new-vehicle-cap" data-tab>
        <?php if(!empty($cap_equipment)): ?>
          <li class="tab-title active"><a href="#tab-equipment">Equipment</a></li>
        <?php endif; ?>
        <?php if(!empty($cap_technical)): ?>
          <li class="tab-title"><a href="#tab-technical">Technical</a></li>
        <?php endif; ?>
        <?php if(!empty($cap_options)): ?>
          <li class="tab-title"><a href="#tab-options">Options</a></li>
        <?php endif; ?>
        <?php if(!empty($cap_variants)): ?>
          <li class="tab-title"><a href="#tab-variants">Other Models</a></li>
        <?php endif; ?>
      </ul>
      <div class="tabs-content tabs-content--node-new-vehicle-cap">
        <?php if(!empty($cap_equipment)): ?>
          <div class="content active" id="tab-equipment">
            <?php print $cap_equipment; ?>
          </div>
        <?php endif; ?>
        <?php if(!empty($cap_technical)): ?>
          <div class="content" id="tab-technical">
            <?php print $cap_technical; ?>
          </div>
        <?php endif; ?>
        <?php if(!empty($cap_options)): ?>
          <div class="content" id="tab-options">
            <?php print $cap_options; ?>
          </div>
        <?php endif; ?>
        <?php if(!empty($cap_variants)): ?>
          <div class="content" id="tab-variants">
            <?php print $cap_variants; ?>
          </div>
        <?php endif; ?>
      </div>

    </div>
  <?php endif; ?>

  <?php if(!empty($offers)): ?>
    <div class="l-node-new-vehicle--full__offers">
      <?php print $offers; ?>
    </div>
  <?php endif; ?>

  <?php if(!empty($form)): ?>
    <div id="enquiry-form" class="l-node-new-vehicle--full__form">
      <?php print $form; ?>
    </div>
  <?php endif; ?>

</<?php print $layout_wrapper ?>>
<?php
// Needed to activate display suite support on forms
if (!empty($drupal_render_children)):
  print $drupal_render_children;
endif;
?>
