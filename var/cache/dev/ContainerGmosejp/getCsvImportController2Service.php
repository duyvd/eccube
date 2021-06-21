<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Eccube\Controller\Admin\Product\CsvImportController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\Controller.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Controller\\Admin\\AbstractCsvImportController.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Controller\\Admin\\Product\\CsvImportController.php';

$this->services['Eccube\\Controller\\Admin\\Product\\CsvImportController'] = $instance = new \Eccube\Controller\Admin\Product\CsvImportController(${($_ = isset($this->services['Eccube\\Repository\\DeliveryDurationRepository']) ? $this->services['Eccube\\Repository\\DeliveryDurationRepository'] : $this->load('getDeliveryDurationRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\Master\\SaleTypeRepository']) ? $this->services['Eccube\\Repository\\Master\\SaleTypeRepository'] : $this->load('getSaleTypeRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\TagRepository']) ? $this->services['Eccube\\Repository\\TagRepository'] : $this->load('getTagRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\CategoryRepository']) ? $this->services['Eccube\\Repository\\CategoryRepository'] : $this->load('getCategoryRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\ClassCategoryRepository']) ? $this->services['Eccube\\Repository\\ClassCategoryRepository'] : $this->load('getClassCategoryRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\Master\\ProductStatusRepository']) ? $this->services['Eccube\\Repository\\Master\\ProductStatusRepository'] : $this->load('getProductStatusRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\ProductRepository']) ? $this->services['Eccube\\Repository\\ProductRepository'] : $this->getProductRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\TaxRuleRepository']) ? $this->services['Eccube\\Repository\\TaxRuleRepository'] : $this->getTaxRuleRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\BaseInfoRepository']) ? $this->services['Eccube\\Repository\\BaseInfoRepository'] : $this->getBaseInfoRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});

$instance->setEccubeConfig(${($_ = isset($this->services['Eccube\\Common\\EccubeConfig']) ? $this->services['Eccube\\Common\\EccubeConfig'] : ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'});
$instance->setEntityManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
$instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
$instance->setSession(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});
$instance->setFormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'});
$instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

return $instance;
