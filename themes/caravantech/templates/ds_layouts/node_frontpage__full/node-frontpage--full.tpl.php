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
* - $slideshow
* - $search
* - $promotional_blocks
* - $latest_vehicles
* - $recently_viewed
* - $title
* - $form
* - $body: The main body of content.
* - $featured_vehicles
* - $custom_one
* - $custom_two
* - $custom_three
*/

unset($latest_vehicles);
?>

<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> l-node-frontpage--full clearfix">

  <?php if(!empty($slideshow) && !empty($search)): ?>
    <section class="l-node-frontpage--full__slideshow--wrap">
  <?php endif; ?>

    <?php if(!empty($slideshow)): ?>
      <div class="l-node-frontpage--full__slideshow">
        <?php print $slideshow; ?>
      </div>
    <?php endif; ?>

    <?php if(!empty($search)): ?>
      <div class="l-node-frontpage--full__search--outer">
        <div class="l-node-frontpage--full__search">
          <div class="l-node-frontpage--full__search--inner">
            <?php print $search; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>

  <?php if(!empty($slideshow) && !empty($search)): ?>
    </section>
  <?php endif; ?>



  <?php if(isset($caravans_block) && !empty($caravans_block) || isset($motorhomes_block) && !empty($motorhomes_block)): ?>
    <div class="l-node-frontpage--full__homepage-blocks">
      <?php if(!empty($caravans_block)): ?>
        <div class="l-node-frontpage--full__homepage-blocks--caravans">
          <?php print render($caravans_block); ?>
        </div>
      <?php endif; ?>

      <?php if(!empty($motorhomes_block)): ?>
        <div class="l-node-frontpage--full__homepage-blocks--motorhomes">
          <?php print render($motorhomes_block); ?>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <?php if(!empty($promotional_blocks)): ?>
    <div class="l-node-frontpage--full__promotional-blocks">
      <div class="l-node-frontpage--full__promotional-blocks--inner">
        <?php print $promotional_blocks; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if(!empty($images) || !empty($videos) || !empty($body) || !empty($files) || !empty($title)): ?>
    <div class="l-node-frontpage--full__content--outer">
      <div class="l-node-frontpage--full__content">

        <div class="l-node-frontpage--full__content--inner">

          <?php if(!empty($title)): ?>
            <div class="l-node-frontpage--full__title">
              <?php print $title; ?>
            </div>
          <?php endif; ?>

          <?php if(!empty($images)): ?>
            <div class="l-node-frontpage--full__images">
              <?php print $images; ?>
            </div>
          <?php endif; ?>

          <?php if(!empty($videos)): ?>
            <div class="l-node-frontpage--full__videos">
              <?php print $videos; ?>
            </div>
          <?php endif; ?>

          <?php if(!empty($body)): ?>
            <div class="l-node-frontpage--full__body">
              <?php print $body; ?>
            </div>
          <?php endif; ?>

          <?php if(!empty($files)): ?>
            <div class="l-node-frontpage--full__files">
              <?php print $files; ?>
            </div>
          <?php endif; ?>

        </div>

        <?php if(!empty($featured_vehicles)): ?>
          <div class="l-node-frontpage--full__featured-vehicles">
            <?php print $featured_vehicles; ?>
          </div>
        <?php endif; ?>

      </div>
    </div>
  <?php endif; ?>

  <?php if(!empty($latest_vehicles)): ?>
    <div class="l-node-frontpage--full__latest-vehicles">
      <div class="l-node-frontpage--full__latest-vehicles--inner">
        <?php print $latest_vehicles; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if(!empty($form)): ?>
    <div class="l-node-frontpage--full__form">
      <div class="l-node-frontpage--full__form--inner">
        <?php print $form; ?>
      </div>
    </div>
  <?php endif; ?>

</<?php print $layout_wrapper ?>>

<?php
// Needed to activate display suite support on forms
if (!empty($drupal_render_children)):
  print $drupal_render_children;
endif;
?>
