<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'easyadmin.finder' shared service.

include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Search/Finder.php';
include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Search/Paginator.php';

return $this->privates['easyadmin.finder'] = new \EasyCorp\Bundle\EasyAdminBundle\Search\Finder(($this->services['easyadmin.query_builder'] ?? $this->load('getEasyadmin_QueryBuilderService.php')), ($this->services['easyadmin.paginator'] ?? ($this->services['easyadmin.paginator'] = new \EasyCorp\Bundle\EasyAdminBundle\Search\Paginator())));
