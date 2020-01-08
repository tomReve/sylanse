<?php
function nc_sidebar(){
    ob_start();
    dynamic_sidebar('sidebar-cmap');
    $sidebar = ob_get_clean();

    return $sidebar;
}
