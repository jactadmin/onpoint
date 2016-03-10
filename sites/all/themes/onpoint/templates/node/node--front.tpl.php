<article<?php print $attributes; ?>>
  <!--
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
  </div>
--><!--END content-head-wrapper-->
 <div id="home-promo-wrapper">
                <div class="l-main home-promo-inner">
                         <div<?php print $content_attributes; ?>>
                            <?php
                              // We hide the comments and links now so that we can render them later.
                              hide($content['comments']);
                              hide($content['links']);
                              print render($content['body']);
                            ?>
                     </div>
                </div>
  </div><!--END home-promo-wrapper -->
 
  <div id="home-introduction-wrapper">
    <div class="l-main home-introduction-inner">
	  	<h2><?php print render($content['field__home_introduction']); ?></h2>
    </div>
  </div><!--END home-introduction-wrapper -->
  
  <div id="home-solutions-links-wrapper">
  	<div class="l-main solutions-links-inner">
  		<?php print views_embed_view('homepage_solutions_links',"default"); ?>
  	</div>
  </div><!--END solutions-links-wrapper -->
  
  <div id="home-promo-wrapper-outer">
	 -
	  
	  <div id="testimonial-intro" class="l-main">  
	  	<?php print render($content['field_testimonial_intro']); ?>
	  	
	  </div>
	  
  </div><!--END home-promo-wrapper-outer -->
  
  <!--div id="home-testimonial-wrapper">
    <div class="l-main home-testimonial-inner">
		<?php print views_embed_view('testimonials',"default"); ?>
    </div>
  </div><!--END home-testimonial-wrapper -->
  
  <!--div id="home-cta-wrapper">
    <div class="l-main home-cta-inner">
	  <div>
		    <?php print render($content['field_cta_text']); ?> 
		    
		    <?php print render($content['field_hubspot_cta']); ?> 
		    
		    <?php print render($content['field_cta_link']); ?>
		    
		    <?php print render($content['field_informational_pdf']); ?>
	  </div>
    </div>
  </div><!--END home-cta-wrapper -->
  <div id="home-contact-wrapper">
    <div class="l-main home-contact-inner">
    	Questions about any of our services? <a class="arrow-link" href="contact-us">Contact Us</a>
    </div>
  </div><!--END home-contact-wrapper -->

<!--
  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>
-->
</article>
