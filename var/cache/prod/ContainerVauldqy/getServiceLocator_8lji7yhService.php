<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.8lji7yh' shared service.

return $this->services['service_locator.8lji7yh'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['cacheUtil' => function () {
    $f = function (\Eccube\Util\CacheUtil $v = null) { return $v; }; return $f(${($_ = isset($this->services['Eccube\\Util\\CacheUtil']) ? $this->services['Eccube\\Util\\CacheUtil'] : ($this->services['Eccube\\Util\\CacheUtil'] = new \Eccube\Util\CacheUtil(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, $this))) && false ?: '_'});
}]);
