<article<?php print $attributes; ?>>
  <div id="content-head-wrapper">
  	  <div class="l-main content-head-inner">
		  <?php if (!empty($title_prefix) || !empty($title_suffix) || !$page): ?>
		    <header>
		      <?php print render($title_prefix); ?>
		      <?php if (!$page): ?>
		        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a></h2>
		      <?php endif; ?>
		      <?php print render($title_suffix); ?>
		    </header>
		  <?php endif; ?>
		
		  <?php if ($display_submitted): ?>
		    <footer class="node__submitted">
		      <?php print $user_picture; ?>
		      <p class="submitted"><?php print $submitted; ?></p>
		    </footer>
		  <?php endif; ?>
  	  </div>
  </div><!--END content-head-wrapper-->
  
  <div id="introduction-wrapper">
    <div class="l-main introduction-inner">
	  <div>
	    <h2 class="headline"><?php print render($content['field_headline']); ?> </h2>
	    <p><?php print render($content['field_introduction']); ?></p>
		<div style="text-align: center;">
		    <?php //print render($content['field_cta_text']); ?>
		    
		    <?php print render($content['field_hubspot_cta']); ?>
		    
		    <?php print render($content['field_cta_link']); ?>
		    
		    <?php print render($content['field_informational_pdf']); ?>
		</div>
	  </div>
    </div>
  </div><!--END introduction-wrapper -->
  
  <div id="body-top-wrapper">
  	<div class="l-main body-top-inner">
		 <div<?php print $content_attributes; ?>>
		    <?php
		      // We hide the comments and links now so that we can render them later.
		      hide($content['comments']);
		      hide($content['links']);
		      print render($content['body']);
		    ?>
		 </div>
  	</div>
  </div><!--END body-top-wrapper -->
  
  <?php if (!empty($content['field_highlight_bar'])) { ?>
  
  <div id="highlight-bar-wrapper">
    <div class="l-main highlight-bar-inner">
	  <div>
	    <?php print render($content['field_highlight_bar']); ?>
	  </div>
    </div>
  </div><!--END highlight-bar-wrapper -->
  
  <?php } ?>
  
  <div id="body-bottom-wrapper">
  	<div class="l-main body-bottom-inner">
		 <div>
		    <?php print render($content['field_body_bottom_']); ?>
		 </div>
  	</div>
  </div><!--END body-bottom-wrapper -->
  <div id="cta-wrapper">
    <div class="l-main cta-inner">
	  <div>
		    <?php print render($content['field_cta_text']); ?>
		    
		    <?php print render($content['field_hubspot_cta']); ?>
		    
		    <?php print render($content['field_cta_link']); ?>
		    
		    <?php print render($content['field_informational_pdf']); ?>
	  </div>
    </div>
  </div><!--END home-cta-wrapper -->
  
  <div id="contact-wrapper">
    <div class="l-main contact-inner">
    	Have questions? <a class="arrow-link" href="/contact-us">Contact Us</a>
    </div>
  </div><!--END contact-wrapper -->
  <?php print render($content['links']); ?>

</article>
