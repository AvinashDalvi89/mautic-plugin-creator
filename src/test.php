<?php



use Aviboy2006\MauticPluginCreator\Plugin;
require_once __DIR__ . '/../../../autoload.php';

$greeting = new Plugin();
$greeting->initAction();
$greeting->initialiseBundle();
