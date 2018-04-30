<?php
/**
 * Created by PhpStorm.
 * User: audioxtreme
 * Date: 29/04/18
 * Time: 23:35
 */

namespace AppBundle\Form;


use AppBundle\Entity\Proveedor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProveedorFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('contratNumber',NumberType::class,[
                'label' => 'Consecutivo'
            ])
            ->add('numberAccount', NumberType::class,[
                'label' => 'Cuenta Bancaria'
            ])
            ->add('startAt', DateTimeType::class,[
                'label' => 'Fecha de inicio',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'js-datepicker'
                ]
            ])
            ->add('endAt', DateTimeType::class,[
                'label' => 'Fecha de Vencimiento',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'js-datepicker'
                ]
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Proveedor::class
        ]);
    }

}