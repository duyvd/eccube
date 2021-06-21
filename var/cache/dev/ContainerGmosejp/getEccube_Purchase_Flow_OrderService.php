<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'eccube.purchase.flow.order' shared service.

include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\PurchaseFlow.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Collection.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\ArrayCollection.php';

$this->services['eccube.purchase.flow.order'] = $instance = new \Eccube\Service\PurchaseFlow\PurchaseFlow();

$instance->setFlowType('order');
$instance->setItemValidators(${($_ = isset($this->services['eccube.purchase.flow.order.item_validators']) ? $this->services['eccube.purchase.flow.order.item_validators'] : ($this->services['eccube.purchase.flow.order.item_validators'] = new \Doctrine\Common\Collections\ArrayCollection())) && false ?: '_'});
$instance->setItemHolderValidators(${($_ = isset($this->services['eccube.purchase.flow.order.holder_validators']) ? $this->services['eccube.purchase.flow.order.holder_validators'] : $this->load('getEccube_Purchase_Flow_Order_HolderValidatorsService.php')) && false ?: '_'});
$instance->setItemHolderPreprocessors(${($_ = isset($this->services['eccube.purchase.flow.order.holder_preprocessors']) ? $this->services['eccube.purchase.flow.order.holder_preprocessors'] : $this->load('getEccube_Purchase_Flow_Order_HolderPreprocessorsService.php')) && false ?: '_'});
$instance->setDiscountProcessors(${($_ = isset($this->services['eccube.purchase.flow.order.discount_processors']) ? $this->services['eccube.purchase.flow.order.discount_processors'] : $this->load('getEccube_Purchase_Flow_Order_DiscountProcessorsService.php')) && false ?: '_'});
$instance->setItemHolderPostValidators(${($_ = isset($this->services['eccube.purchase.flow.order.holder_post_validators']) ? $this->services['eccube.purchase.flow.order.holder_post_validators'] : $this->load('getEccube_Purchase_Flow_Order_HolderPostValidatorsService.php')) && false ?: '_'});
$instance->setPurchaseProcessors(${($_ = isset($this->services['eccube.purchase.flow.order.purchase']) ? $this->services['eccube.purchase.flow.order.purchase'] : $this->load('getEccube_Purchase_Flow_Order_PurchaseService.php')) && false ?: '_'});

return $instance;
