<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Security\Core\Encoder\PasswordEncoder' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\Encoder\\PasswordEncoderInterface.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Security\\Core\\Encoder\\PasswordEncoder.php';

return $this->services['Eccube\\Security\\Core\\Encoder\\PasswordEncoder'] = new \Eccube\Security\Core\Encoder\PasswordEncoder(${($_ = isset($this->services['Eccube\\Common\\EccubeConfig']) ? $this->services['Eccube\\Common\\EccubeConfig'] : ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'});