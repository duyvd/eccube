<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Service\PluginContext' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PluginContext.php';

return $this->services['Eccube\\Service\\PluginContext'] = new \Eccube\Service\PluginContext(${($_ = isset($this->services['Eccube\\Common\\EccubeConfig']) ? $this->services['Eccube\\Common\\EccubeConfig'] : ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'});
