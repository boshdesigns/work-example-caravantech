<!--.page -->
<div class="page" role="document">

  <!--.l-header -->
  <div class="l-header__outer">
    <header class="l-header sticky" role="banner">
      <div class="l-header__inner">

        <?php if ($linked_logo || $linked_site_name): ?>
          <div class="l-header__logo">
            <?php if ($linked_logo): ?>
              <?php print $linked_logo; ?>
            <?php elseif ($linked_site_name): ?>
              <?php print $linked_site_name; ?>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if (!empty($page['header_additional_details'])): ?>
          <div class="l-header__additional-details">
            <?php print render($page['header_additional_details']); ?>

            <?php // Function to build up opening hours see template.php
              print build_opening_hours('header');
            ?>
          </div>
        <?php endif; ?>

        <?php if (!empty($page['header_contact_details'])): ?>
          <div class="l-header__contact-details">
            <?php print render($page['header_contact_details']); ?>
          </div>
        <?php endif; ?>

        <div class="l-header__visit-shop">
          <a class="visit-shop__button" href="http://www.caravantech-shop.co.uk/" target="_blank"><aside class="visit-shop__icon"></aside><?php print t('Visit our online shop'); ?></a>
        </div>

        <?php if (!empty($page['header'])): ?>
          <?php print render($page['header']); ?>
        <?php endif; ?>

      </div>

      <?php if ($top_bar): ?>
        <!--.nav -->
        <div class="nav<?php if ($top_bar_classes): print ' ' . $top_bar_classes; endif; ?>">
          <nav class="top-bar" data-topbar <?php print $top_bar_options; ?>>
            <ul class="title-area">
              <li class="name"></li>
              <li class="toggle-topbar menu-icon">
                <a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
            </ul>
            <section class="top-bar-section">
              <?php if ($top_bar_main_menu) : ?>
                <?php print $top_bar_main_menu; ?>
              <?php endif; ?>
            </section>
          </nav>
        </div>
        <!--/.nav -->
      <?php endif; ?>

    </header>
  </div>
  <!--/.l-header -->

  <?php if (!empty($page['featured'])): ?>
    <!--.l-featured -->
    <section class="l-featured">
      <?php print render($page['featured']); ?>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>

  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--.l-messages -->
    <section class="l-messages">
      <?php if ($messages): print $messages; endif; ?>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--.l-help -->
    <section class="l-help">
      <?php print render($page['help']); ?>
    </section>
    <!--/.l-help -->
  <?php endif; ?>

  <?php if ($breadcrumb): ?>
    <!--.l-breadcrumbs -->
    <div class="l-breadcrumbs__outer">
      <div class="l-breadcrumbs">
        <div class="l-breadcrumbs__list">
          <?php print $breadcrumb; ?>
        </div>
        <div class="l-breadcrumbs__title">
          <?php if ($title_location): ?>
            <h1 class="page__title page__title--location"><?php print $title_location; ?></h1>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <!--/.l-breadcrumbs -->
  <?php endif; ?>

  <?php if(!$is_front): ?>
    <?php print render($title_prefix); ?>
    <section class="page__title<?php if (isset($node) && !empty($node) && $node->type == 'used_vehicle' || $node->type == 'new_vehicle'): ?> page__title--vehicle-type<?php endif; ?>" id="page-title">
      <h2><?php print drupal_get_title(); ?></h2>
      <?php if (isset($node) && !empty($node) && $node->type == 'used_vehicle' || $node->type == 'new_vehicle'): ?>
        <section class="l-additional-vehicle-cta">
          <div class="additional-vehicle-cta additional-vehicle-cta__info">
            <a href="#additional-info"><span><?php print t('Additional Information'); ?></span><i class="fa fa-chevron-down"></i></a>
          </div>

          <div class="additional-vehicle-cta additional-vehicle-cta__enquiry">
            <a href="#enquiry-form"><span><?php print t('Enquire Now'); ?></span><i class="fa fa-chevron-down"></i></a>
          </div>
        </section>
      <?php endif; ?>
    </section>
    <?php print render($title_suffix); ?>
  <?php endif; ?>

  <!--.l-main -->
  <main class="l-main" role="main">
    <div class="l-main__inner">

      <div class="l-main-content <?php print $main_content; ?>">
        <?php if (!empty($page['highlighted'])): ?>
          <div class="highlight panel callout">
            <?php print render($page['highlighted']); ?>
          </div>
        <?php endif; ?>

        <a id="main-content"></a>

        <?php if (!empty($tabs)): ?>
          <div class="action-tabs">
            <?php print render($tabs); ?>
            <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
          </div>
        <?php endif; ?>

        <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>
      </div>

      <?php if (!empty($page['sidebar'])): ?>
        <aside class="l-sidebar" role="complementary">
          <?php print render($page['sidebar']); ?>
        </aside>
      <?php endif; ?>

    </div>
  </main>
  <!--/.l-main -->

  <?php if (!empty($page['footer_first']) || !empty($page['footer_second']) || !empty($page['footer_third']) || !empty($page['footer_fourth'])): ?>
    <!--.l-footer -->
    <footer class="l-footer" role="contentinfo">
      <div class="l-footer__inner">

        <div class="l-footer__logos">
          <img src="/<?php print drupal_get_path('theme', 'caravantech'); ?>/images/footer-logos.png" />
        </div>

        <div class="l-footer__first">
          <section class="vocabulary-telephone-numbers--footer-view">
            <?php print views_embed_view('departments', 'telephone_numbers', 9); ?>
          </section>
        </div>

        <?php if (!empty($page['footer_second'])): ?>
          <div class="l-footer__second">
            <?php print render($page['footer_second']); ?>

            <?php // Function to build up opening hours see template.php
              print build_opening_hours('footer');
            ?>
          </div>
        <?php endif; ?>

        <?php if (!empty($page['footer_third'])): ?>
          <div class="l-footer__third">
            <?php print render($page['footer_third']); ?>
          </div>
        <?php endif; ?>

      </div>

      <?php if (!empty($page['footer_fourth'])): ?>
        <div class="l-footer__fourth--outer">
          <div class="l-footer__inner">
            <div class="l-footer__fourth">
              <?php print render($page['footer_fourth']); ?>
              <?php // Additional Footer Text see caravan_tech_site_config.module
              if(isset($additional_footer_text) && !empty($additional_footer_text)) { print "<section class='additional-footer-text'>" . render($additional_footer_text) . "</section>"; } ?>
            </div>
          </div>
        </div>
      <?php endif; ?>

    </footer>
    <!--/.l-footer -->
  <?php endif; ?>

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->

<?php if (!empty($page['outer_content'])): ?>
  <?php print render($page['outer_content']); ?>
<?php endif; ?>
