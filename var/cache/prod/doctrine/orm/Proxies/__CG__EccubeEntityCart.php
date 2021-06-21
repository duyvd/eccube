<?php

namespace Proxies\__CG__\Eccube\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cart extends \Eccube\Entity\Cart implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'cart_key', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'Customer', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'lock', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'CartItems', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'pre_order_id', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'total_price', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'delivery_fee_total', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'sort_no', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'errors', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'add_point', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'use_point'];
        }

        return ['__isInitialized__', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'cart_key', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'Customer', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'lock', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'CartItems', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'pre_order_id', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'total_price', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'delivery_fee_total', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'sort_no', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'errors', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'add_point', '' . "\0" . 'Eccube\\Entity\\Cart' . "\0" . 'use_point'];
    }

    /**
     * {@inheritDoc}
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cart $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
        parent::__wakeup();
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCartKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCartKey', []);

        return parent::getCartKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setCartKey(string $cartKey)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCartKey', [$cartKey]);

        return parent::setCartKey($cartKey);
    }

    /**
     * {@inheritDoc}
     */
    public function getLock()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLock', []);

        return parent::getLock();
    }

    /**
     * {@inheritDoc}
     */
    public function setLock($lock)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLock', [$lock]);

        return parent::setLock($lock);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreOrderId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreOrderId', []);

        return parent::getPreOrderId();
    }

    /**
     * {@inheritDoc}
     */
    public function setPreOrderId($pre_order_id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreOrderId', [$pre_order_id]);

        return parent::setPreOrderId($pre_order_id);
    }

    /**
     * {@inheritDoc}
     */
    public function addCartItem(\Eccube\Entity\CartItem $CartItem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCartItem', [$CartItem]);

        return parent::addCartItem($CartItem);
    }

    /**
     * {@inheritDoc}
     */
    public function clearCartItems()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clearCartItems', []);

        return parent::clearCartItems();
    }

    /**
     * {@inheritDoc}
     */
    public function getCartItems()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCartItems', []);

        return parent::getCartItems();
    }

    /**
     * {@inheritDoc}
     */
    public function getItems()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getItems', []);

        return parent::getItems();
    }

    /**
     * {@inheritDoc}
     */
    public function setCartItems($CartItems)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCartItems', [$CartItems]);

        return parent::setCartItems($CartItems);
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalPrice($total_price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalPrice', [$total_price]);

        return parent::setTotalPrice($total_price);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalPrice', []);

        return parent::getTotalPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotal($total)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotal', [$total]);

        return parent::setTotal($total);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotal', []);

        return parent::getTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalQuantity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalQuantity', []);

        return parent::getTotalQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function addItem(\Eccube\Entity\ItemInterface $item)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addItem', [$item]);

        return parent::addItem($item);
    }

    /**
     * {@inheritDoc}
     */
    public function removeItem(\Eccube\Entity\ItemInterface $item)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeItem', [$item]);

        return parent::removeItem($item);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantity', []);

        return parent::getQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeliveryFeeTotal($total)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeliveryFeeTotal', [$total]);

        return parent::setDeliveryFeeTotal($total);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryFeeTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryFeeTotal', []);

        return parent::getDeliveryFeeTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomer(): \Eccube\Entity\Customer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomer', []);

        return parent::getCustomer();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomer(\Eccube\Entity\Customer $Customer = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomer', [$Customer]);

        return parent::setCustomer($Customer);
    }

    /**
     * {@inheritDoc}
     */
    public function setSortNo($sortNo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSortNo', [$sortNo]);

        return parent::setSortNo($sortNo);
    }

    /**
     * {@inheritDoc}
     */
    public function getSortNo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSortNo', []);

        return parent::getSortNo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateDate($createDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateDate', [$createDate]);

        return parent::setCreateDate($createDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateDate', []);

        return parent::getCreateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateDate($updateDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateDate', [$updateDate]);

        return parent::setUpdateDate($updateDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateDate', []);

        return parent::getUpdateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiscount($total)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiscount', [$total]);

        return parent::setDiscount($total);
    }

    /**
     * {@inheritDoc}
     */
    public function setCharge($total)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCharge', [$total]);

        return parent::setCharge($total);
    }

    /**
     * {@inheritDoc}
     */
    public function setTax($total)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTax', [$total]);

        return parent::setTax($total);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetExists($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetExists', [$offset]);

        return parent::offsetExists($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet($offset, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetSet', [$offset, $value]);

        return parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetGet($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetGet', [$offset]);

        return parent::offsetGet($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetUnset', [$offset]);

        return parent::offsetUnset($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function setPropertiesFromArray(array $arrProps, array $excludeAttribute = array (
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPropertiesFromArray', [$arrProps, $excludeAttribute, $parentClass]);

        return parent::setPropertiesFromArray($arrProps, $excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', [$excludeAttribute, $parentClass]);

        return parent::toArray($excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toNormalizedArray(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toNormalizedArray', [$excludeAttribute]);

        return parent::toNormalizedArray($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toJSON(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toJSON', [$excludeAttribute]);

        return parent::toJSON($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toXML(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toXML', [$excludeAttribute]);

        return parent::toXML($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function copyProperties($srcObject, array $excludeAttribute = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'copyProperties', [$srcObject, $excludeAttribute]);

        return parent::copyProperties($srcObject, $excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function setAnnotationReader(\Doctrine\Common\Annotations\Reader $Reader)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnnotationReader', [$Reader]);

        return parent::setAnnotationReader($Reader);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnnotationReader()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnnotationReader', []);

        return parent::getAnnotationReader();
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityIdentifierAsArray(\Eccube\Entity\AbstractEntity $Entity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityIdentifierAsArray', [$Entity]);

        return parent::getEntityIdentifierAsArray($Entity);
    }

    /**
     * {@inheritDoc}
     */
    public function setAddPoint($addPoint)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddPoint', [$addPoint]);

        return parent::setAddPoint($addPoint);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddPoint()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddPoint', []);

        return parent::getAddPoint();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsePoint($usePoint)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsePoint', [$usePoint]);

        return parent::setUsePoint($usePoint);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsePoint()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsePoint', []);

        return parent::getUsePoint();
    }

}
