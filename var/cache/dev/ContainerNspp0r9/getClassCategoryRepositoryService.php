<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Repository\ClassCategoryRepository' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Eccube\\Repository\\ClassCategoryRepository.php';

return $this->services['Eccube\\Repository\\ClassCategoryRepository'] = new \Eccube\Repository\ClassCategoryRepository(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
