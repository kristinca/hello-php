<?php
// Check if the GD library is installed
if (extension_loaded('gd') && function_exists('gd_info')) {
    echo 'GD library is installed.';
} else {
    echo 'GD library is NOT installed.';
}
?>