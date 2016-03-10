<?php ?>
<article<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if ($new): ?>
    <mark class="new"><?php print $new; ?></mark>
  <?php endif; ?>
  <h3<?php print $title_attributes; ?>><?php print $title; ?></h3>
  <?php print render($title_suffix); ?>

  <footer class="comment__info">
    <?php print $user_picture; ?>
    <p class="submitted comment__submitted"><?php print $submitted; ?></p>
  </footer>

  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the links now so that we can render them later.
      hide($content['links']);
      print render($content);
    ?>
    <?php if ($signature): ?>
    <div class="user-signature comment__signature">
      <?php print $signature; ?>
    </div>
    <?php endif; ?>
  </div>

  <?php print render($content['links']) ?>
</article>
