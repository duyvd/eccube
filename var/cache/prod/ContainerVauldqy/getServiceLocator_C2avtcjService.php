<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.c2avtcj' shared service.

return $this->services['service_locator.c2avtcj'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['paginator' => function () {
    $f = function (\Knp\Component\Pager\Paginator $v) { return $v; }; return $f(${($_ = isset($this->services['knp_paginator']) ? $this->services['knp_paginator'] : $this->load('getKnpPaginatorService.php')) && false ?: '_'});
}]);