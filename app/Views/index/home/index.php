<?php

use App\Core\View;
?>

<?php View::component('hero', 'index/home/components', [
    'title' => $title,
]); ?>

<?php View::component('about-us', 'index/home/components'); ?>
<?php View::component('why-us', 'index/home/components'); ?>
<?php View::component('call-to-action', 'index/home/components'); ?>
<?php View::component('our-services', 'index/home/components'); ?>
<?php View::component('discount', 'index/home/components'); ?>
<?php View::component('projects', 'index/home/components'); ?>
<?php // View::component('before-and-after', 'index/home/components'); 
?>