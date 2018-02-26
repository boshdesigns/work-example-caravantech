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
 * - $photo
 * - $price
 * - $monthly_price
 * - $make_model
 * - $sash
 */
?>

<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> l-node-used-vehicle--latest-vehicles">

	<?php if(!empty($photo)): ?>
		<div class="l-node-used-vehicle--latest-vehicles__photo">
			<?php print $photo; ?>
		</div>
	<?php endif; ?>

	<?php if(!empty($make_model)): ?>
		<div class="l-node-used-vehicle--latest-vehicles__make-model">
			<?php print $make_model; ?>
		</div>
	<?php endif; ?>

	<?php if(!empty($price) || !empty($was_price) || !empty($saving_price)): ?>
		<div class="l-node-used-vehicle--latest-vehicles__price">
			<?php print $price; ?>
			<?php if(!empty($was_price) || !empty($saving_price)): ?>
				<div class="l-node-used-vehicle--latest-vehicles__saving-price">
					<?php print $was_price; ?>
					<?php print $saving_price; ?>
				</div>
			<?php endif; ?>

			<div class="l-node-used-vehicle--featured-vehicles__more-info">
				<?php print l('More Info', drupal_get_path_alias('node/' . $node->nid), array('attributes' => array('class' => array('more-info-button')))); ?>
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
