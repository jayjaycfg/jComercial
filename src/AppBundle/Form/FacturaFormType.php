<?php
/**
 * Created by PhpStorm.
 * User: audioxtreme
 * Date: 30/04/18
 * Time: 13:58
 */

namespace AppBundle\Form;


use AppBundle\Entity\Factura;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FacturaFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('importeCuc',NumberType::class,[
                'label' => 'Importe en CUC'
            ])
            ->add('importeCup', NumberType::class,[
                'label' => 'Importe en CUP'
            ])
            ->add('contratos')
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