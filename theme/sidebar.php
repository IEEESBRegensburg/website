<?php
    // Do not display the side bar if it is not activated in the backend
    if (! is_active_sidebar('main-sidebar')) {
        return;
    }
?>

<aside id="sidebar" class="col-xs-12 col-sm-4 col-lg-3 col-lg-offset-1">
    <div id="sidebar-background" class="row">
        <div class="col-xs-12">
            <?php dynamic_sidebar('main-sidebar'); ?>
        </div>
    </div>
</aside>