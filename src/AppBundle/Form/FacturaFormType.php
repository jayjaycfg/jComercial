<?php

namespace AppBundle\Form;

use AppBundle\Entity\Contrato;
use AppBundle\Entity\Empresa;
use AppBundle\Entity\Factura;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FacturaFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('contrato', EntityType::class,[
                'placeholder' => 'Seleccione un contrato',
                'class' => Contrato::class
            ])
            ->add('empresa', EntityType::class,[
                'placeholder' => 'Seleccione una empresa',
                'class' => Empresa::class,
                'query_builder' =>  function($repository){
                    return $repository->createAlphabeticalQueryBuilder();
                },
                'attr' => [
                    'class' => 'js-select-comboBox'
                ]
            ])
            ->add('programa',ChoiceType::class,[
                'placeholder' => 'Seleccione un programa',
                'choices' => [
                    'Administracion' =>'Administracion',
                    'Electricidad' =>'Electricidad',
                    'Economia' => 'Economia',
                    'Direccion' =>'Direccion'
                ]
            ])
            ->add('descripcionDelGasto')
            ->add('cantidad')
            ->add('precio')
            ->add('participante')
            ->add('isCancelada')
            ->add('explicacionPorCancelada')
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setDefaults([
                'data_class' => Factura::class
            ]);
    }

}