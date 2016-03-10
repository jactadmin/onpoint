<div <?php print $attributes; ?>>
  <div id="l-header-wrapper">
    <header class="l-header" role="banner">
	    <div class="l-branding">
	      <?php if ($logo): ?>
	        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
	      <?php endif; ?>
	
	      <?php if ($site_name || $site_slogan): ?>
	        <?php if ($site_name): ?>
	          <h1 class="site-name">
	            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
	          </h1>
	        <?php endif; ?>
	
	        <?php if ($site_slogan): ?>
	          <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
	        <?php endif; ?>
	      <?php endif; ?>
	
	      <?php print render($page['branding']); ?>
	    </div>
	
	    <?php print render($page['header']); ?>
	    <?php print render($page['navigation']); ?>
  	</header>
  </div><!--END l-header-outer div -->
  <div id="title-wrapper">    
	  <a id="main-content"></a>
	      <?php print render($title_prefix); ?>
	      <?php if ($title): ?>
	        <h1><?php print $title; ?></h1>
	      <?php endif; ?>
	      <?php print render($title_suffix); ?>
  </div><!-- END title-wrapper -->
  <?php if($breadcrumb) { ?>
    <div id="breadcrumb-outer">
	  <?php print $breadcrumb; ?>
    </div>
  <?php } ?>
  <div id="content-outer" class="l-main" role="main">
   <div class="l-content">
	  <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
  </div><!-- END l-content -->
    <?php print render($page['sidebar_first']); ?>
    <?php print render($page['sidebar_second']); ?>
      <?php // print $feed_icons; ?>
    <!--/div--><!--END l-main-outer -->
 </div><!-- END content-outer -->
  
  <div id="footer-wrapper">
	  <footer class="l-footer" role="contentinfo">
	    <?php print render($page['footer']); ?>
	  </footer>
  </div><!-- END footer-wrapper -->
</div>
