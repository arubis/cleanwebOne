<?php
// The redirect here works fine on production but needs to be disabled for development.
// Probably harmess?
remove_filter('template_redirect', 'redirect_canonical');

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
?>
