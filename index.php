<?php
require __DIR__ . '/vendor/autoload.php';

use TestApp\Calculate;

if (isset($_GET['calculate'])) {
    $instance = new Calculate();
    
    $instance->setMeasurementUnit($_POST['measurement']);
    $instance->setDepthMeasurementUnit($_POST['depth-measurement']);
    $instance->setDimensions($_POST['width'], $_POST['length']);

    $neededBags = $instance->calculateBags();
    $instance->saveResultsToDB();

    require "view/calculate.php";
} elseif (isset($_GET['checkout'])) {
    require "view/checkout.php";
} else {
    require "view/home.php";
}
