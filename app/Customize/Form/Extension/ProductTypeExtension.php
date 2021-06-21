<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Customize\Form\Extension;

use Eccube\Form\Type\Admin\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;

class ProductTypeExtension extends AbstractTypeExtension
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('material', TextType::class, [
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                    new Length(['max' => 50]),
                ],
            ])
            ->add('outer_size', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Length(['max' => 50]),
                ],
            ])
            ->add('inner_size', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Length(['max' => 50]),
                ],
            ])
            ->add('self_weight', NumberType::class, [
                'required' => false,
                'constraints' => [
                    new Length(['max' => 10]),
                    new Regex([
                        'pattern' => "/^\d+$/u",
                        'message' => 'form_error.numeric_only',
                    ]),
                ],
            ])
            ->add('load_weight', NumberType::class, [
                'required' => false,
                'constraints' => [
                    new Length(['max' => 10]),
                    new Regex([
                        'pattern' => "/^\d+$/u",
                        'message' => 'form_error.numeric_only',
                    ]),
                ],
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return ProductType::class;
    }
}
?>