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
      </div><!-- content-head-inner -->
  </div><!--END content-head-wrapper-->
  
  <div id="content-wrapper">
    <div id="content-inner" class="l-main">
	  <div<?php print $content_attributes; ?>>
	    <?php
	      // We hide the comments and links now so that we can render them later.
	      hide($content['comments']);
	      hide($content['links']);
	      print render($content);
	      print render($content['links']);
          print render($content['comments']); ?>
	    
	  </div><!-- END content-inner -->
    </div><!-- END content-wrapper -->

</article>
