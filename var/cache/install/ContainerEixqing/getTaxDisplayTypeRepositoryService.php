<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Repository\Master\TaxDisplayTypeRepository' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Eccube\\Repository\\Master\\TaxDisplayTypeRepository.php';

return $this->services['Eccube\\Repository\\Master\\TaxDisplayTypeRepository'] = new \Eccube\Repository\Master\TaxDisplayTypeRepository(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
