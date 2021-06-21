<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.admin' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security-bundle\\Security\\FirewallContext.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Util\\TargetPathTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Firewall\\ExceptionListener.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\EntryPoint\\AuthenticationEntryPointInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\EntryPoint\\FormAuthenticationEntryPoint.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Firewall\\ListenerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Firewall\\LogoutListener.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Logout\\LogoutSuccessHandlerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Logout\\DefaultLogoutSuccessHandler.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-bundle\\Security\\FirewallConfig.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Logout\\LogoutHandlerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Logout\\SessionLogoutHandler.php';

$a = ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'};
$b = ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->load('getSecurity_HttpUtilsService.php')) && false ?: '_'};
$c = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($b, 'admin_login'), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'admin_logout']);
$c->addHandler(${($_ = isset($this->services['security.logout.handler.csrf_token_clearing']) ? $this->services['security.logout.handler.csrf_token_clearing'] : $this->load('getSecurity_Logout_Handler_CsrfTokenClearingService.php')) && false ?: '_'});
$c->addHandler(${($_ = isset($this->services['security.logout.handler.session']) ? $this->services['security.logout.handler.session'] : ($this->services['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler())) && false ?: '_'});

return $this->services['security.firewall.map.context.admin'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['security.channel_listener']) ? $this->services['security.channel_listener'] : $this->load('getSecurity_ChannelListenerService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['security.context_listener.0']) ? $this->services['security.context_listener.0'] : $this->load('getSecurity_ContextListener_0Service.php')) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['security.authentication.listener.form.admin']) ? $this->services['security.authentication.listener.form.admin'] : $this->load('getSecurity_Authentication_Listener_Form_AdminService.php')) && false ?: '_'};
    yield 3 => ${($_ = isset($this->services['security.authentication.listener.anonymous.admin']) ? $this->services['security.authentication.listener.anonymous.admin'] : $this->load('getSecurity_Authentication_Listener_Anonymous_AdminService.php')) && false ?: '_'};
    yield 4 => ${($_ = isset($this->services['security.access_listener']) ? $this->services['security.access_listener'] : $this->load('getSecurity_AccessListenerService.php')) && false ?: '_'};
}, 5), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : ($this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken'))) && false ?: '_'}, $b, 'admin', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->getHttpKernelService()) && false ?: '_'}, $b, 'admin_login', false), NULL, NULL, ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'}, false), $c, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('admin', 'security.user_checker', 'security.request_matcher.k5upcha', true, false, 'Eccube\\Security\\Core\\User\\MemberProvider', 'admin', 'security.authentication.form_entry_point.admin', NULL, NULL, [0 => 'form_login', 1 => 'anonymous'], NULL));