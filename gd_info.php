<?php
if (extension_loaded('gd') && function_exists('gd_info')) {
    echo "GD is enabled on this server.";
} else {
    echo "GD is not enabled on this server.";
}
?>