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
* - $map
* - $title
* - $address.
* - $openinghours
* - $telephonenumbers
* - $franchise
* - $vatnumber
* - $companyregno
* - $placeofreg
* - $regofficeaddress
*/

unset($title);
?>

<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> l-node-branch--footer clearfix">

  <div class="l-node-branch--footer__heading">
    <h3 class="heading">Address</h3>
  </div>

  <?php if(!empty($title)): ?>
    <div class="l-node-branch--footer__title">
      <?php print $title; ?>
    </div>
  <?php endif; ?>

  <?php if(!empty($address)): ?>
    <div class="l-node-branch--footer__address">
      <?php print $address; ?>
    </div>
  <?php endif; ?>

  <?php if(!empty($vatnumber)): ?>
    <div class="l-node-branch--footer__vatnumber">
      <?php print $vatnumber; ?>
    </div>
  <?php endif; ?>

  <?php if(!empty($companyregno)): ?>
    <div class="l-node-branch--footer__companyregno">
      <?php print $companyregno; ?>
    </div>
  <?php endif; ?>

  <?php if(!empty($placeofreg)): ?>
    <div class="l-node-branch--footer__placeofreg">
      <?php print $placeofreg; ?>
    </div>
  <?php endif; ?>

  <?php if(!empty($regofficeaddress)): ?>
    <div class="l-node-branch--footer__regofficeaddress">
      <?php print $regofficeaddress; ?>
    </div>
  <?php endif; ?>

</<?php print $layout_wrapper ?>>

<?php
// Needed to activate display suite support on forms
if (!empty($drupal_render_children)):
  print $drupal_render_children;
endif;
?>
