<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation\EntityExtension;

/**
 * @EntityExtension("Eccube\Entity\Product")
 */
trait ProductTrait
{
    /**
     * @ORM\Column(name = "material",type="string", length = 50)
     */
    public $material;
    /**
     * @ORM\Column(name = "outer_size",type="string", length = 50)
     */
    public $outer_size;
    /**
     * @ORM\Column(name = "inner_size",type="string", length = 50)
     */
    public $inner_size;
    /**
     * @ORM\Column(name = "self_weight",type="float")
     */
    public $self_weight;
    /**
     * @ORM\Column(name = "load_weight",type="float")
     */
    public $load_weight;
}
?>