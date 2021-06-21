<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.rememberme.services.simplehash.customer' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\RememberMe\\RememberMeServicesInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Logout\\LogoutHandlerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\RememberMe\\AbstractRememberMeServices.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\RememberMe\\TokenBasedRememberMeServices.php';

return $this->services['security.authentication.rememberme.services.simplehash.customer'] = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices([0 => ${($_ = isset($this->services['Eccube\\Security\\Core\\User\\CustomerProvider']) ? $this->services['Eccube\\Security\\Core\\User\\CustomerProvider'] : $this->load('getCustomerProviderService.php')) && false ?: '_'}], $this->getEnv('ECCUBE_AUTH_MAGIC'), 'customer', ['lifetime' => 3600, 'name' => 'eccube_remember_me', 'remember_me_parameter' => 'login_memory', 'path' => '/', 'domain' => NULL, 'secure' => false, 'httponly' => true, 'samesite' => NULL, 'always_remember_me' => false], ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'});
