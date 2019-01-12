<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Calculator Form 
 */
class CalcType extends AbstractType {
    
     public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('num1', NumberType::class)
            ->add('num2', NumberType::class)
            ->add('Plus', SubmitType::class, array('label' => '+'))
            ->add('Minus', SubmitType::class, array('label' => '-'))
            ->add('Multiple', SubmitType::class, array('label' => '*'))
            ->add('Divide', SubmitType::class, array('label' => '/'))
            ->add('BinAnd', SubmitType::class, array('label' => 'AND'))
            ->add('BinOr', SubmitType::class, array('label' => 'OR'))
                
        ;
    }
}
