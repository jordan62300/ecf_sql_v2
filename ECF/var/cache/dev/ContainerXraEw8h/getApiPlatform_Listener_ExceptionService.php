<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'api_platform.listener.exception' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\ExceptionListener.php';
include_once $this->targetDirs[3].'\\vendor\\api-platform\\core\\src\\EventListener\\ExceptionListener.php';

return $this->privates['api_platform.listener.exception'] = new \ApiPlatform\Core\EventListener\ExceptionListener('api_platform.action.exception', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()));
