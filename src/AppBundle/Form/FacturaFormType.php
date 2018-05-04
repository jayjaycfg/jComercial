<?php
/**
 * Created by PhpStorm.
 * User: audioxtreme
 * Date: 30/04/18
 * Time: 13:58
 */

namespace AppBundle\Form;


use AppBundle\Entity\Contrato;
use AppBundle\Entity\Empresa;
use AppBundle\Entity\Factura;
use AppBundle\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FacturaFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('usuario')
//
//            ->add('usuario', EntityType::class,[
//                'placeholder' => 'Seleccione un Usuario',
//                'class' => User::class,
//                'query_builder'=> function($repository){
//                    $repository->createAlphabeticalQueryBuilder();
//                }
//            ])

            ->add('contrato', EntityType::class,[
                'class' => Contrato::class,
                'query_builder' =>  function($repository){
                    return $repository->createAlphabeticalQueryBuilder();
                }
            ])
            ->add('empresa', EntityType::class,[
                'class' => Empresa::class,
                'query_builder' =>  function($repository){
                    return $repository->createAlphabeticalQueryBuilder();
                }
            ])
            ->add('programa',ChoiceType::class,[
                'choices' => [
                    'Direccion' =>'Direccion',
                    'Economia' => 'Economia'
                ]
            ])
            ->add('descripcionDelGasto')
            ->add('cantidad')
            ->add('precio')
            ->add('participante')
//            ->add('fechaAt',DateTimeType::class,[
//                    'widget' => 'single_text',
//                    'attr' =>[
//                        'class' => 'js-datepicker'
//                    ]
//            ])
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