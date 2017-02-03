<?php


use Zend\Expressive\ConfigManager\ConfigManager;
use Zend\Expressive\ConfigManager\PhpFileProvider;

$configManager = new ConfigManager([
    ModuleConfig
]);

return new ArrayObject($configManager->getMergedConfig());