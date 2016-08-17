<?php
if ( function_exists('yoast_breadcrumb') ) {
echo '<div class="breadcrumbs-bar">';
yoast_breadcrumb('<p id="breadcrumbs">','</p>');
echo '</div>';
}
?>
