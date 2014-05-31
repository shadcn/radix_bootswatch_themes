<?php
/**
 * @file
 *
 * Theme implementation to display the messages area, which is normally
 * included roughly in the content area of a page.
 *
 * This utilizes the following variables thata re normally found in
 * page.tpl.php:
 * - $tabs
 * - $messages
 * - $help
 *
 * Additional items can be added via theme_preprocess_pane_messages(). See
 * template_preprocess_pane_messages() for examples.
 */
 ?>
<?php if ($messages): ?>
  <div id="messages" class="container">
    <?php print $messages; ?>
  </div>
<?php endif; ?>
<?php if (!empty($tabs)): ?>
  <div id="tabs" class="container">
    <?php print render($tabs); ?>
  </div>
<?php endif; ?>
