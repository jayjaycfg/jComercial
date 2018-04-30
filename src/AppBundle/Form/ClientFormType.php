<?php

namespace AppBundle\Form;


use AppBundle\Entity\Cliente;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('clientNumber', IntegerType::class,[
                'label' => 'Consecutivo'
            ])
            ->add('startAt', DateTimeType::class,[
                'label' => 'Fecha Inicio',
                'widget'    => 'single_text',
                'attr'  => [
                    'class' => 'js-datepicker'
                ]
            ])
            ->add('endAt', DateTimeType::class,[
                'label' => 'Fecha de Vencimiento',
                'widget' => 'single_text',
                'attr'  => [
                    'class' => 'js-datepicker'
                ]
            ])
            ->add('description', TextType::class,[
                'label' => 'Descripción'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cliente::class
        ]);
    }

}