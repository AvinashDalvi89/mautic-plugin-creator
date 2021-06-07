<?php

require_once __DIR__ . '/../../../../vendor/autoload.php';

use aviboy2006\MauticPluginCreator\Plugin;

$greeting = new Plugin();

$greeting->initAction("/Library/WebServer/Documents/oss/test-mautic");
$greeting->initialiseBundle();
