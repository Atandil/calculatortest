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
            ->add('plus', SubmitType::class, array('label' => '+'))
            ->add('minus', SubmitType::class, array('label' => '-'))
            ->add('mult', SubmitType::class, array('label' => '*'))
            ->add('div', SubmitType::class, array('label' => '/'))
            ->add('opand', SubmitType::class, array('label' => 'AND'))
            ->add('opor', SubmitType::class, array('label' => 'OR'))
                
        ;
    }
}
