<?php
/**
 * Created by PhpStorm.
 * User: audioxtreme
 * Date: 3/05/18
 * Time: 13:00
 */

namespace AppBundle\Form;


use AppBundle\Entity\Contrato;
use AppBundle\Entity\Empresa;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContratoFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
           ->add('noDeOrden')
           ->add('tipoDeContrato')
           ->add('valorInicialMn')
           ->add('valorInicialCuc')
           ->add('isSuplemento')
           ->add('actaDeFirmado')
           ->add('fechaDeOtorgamiento', DateTimeType::class,[
               'widget' => 'single_text',
               'attr' => [
                   'class' => 'js-datepicker'
               ]
           ])
           ->add('fechaDeVencimiento', DateTimeType::class,[
               'widget' => 'single_text',
               'attr' => [
                   'class' => 'js-datepicker'
               ]
           ])
           ->add('telefono')
           ->add('correo',EmailType::class)

//           ->add('isCliente')
//           ->add('isProveedor')
           ->add('isClienteOrProveedor',ChoiceType::class,[
               'label' => 'Cliente o Proveedor',
               'choices' => [
                   'Cliente' => 0,
                   'Proveedor' => 1
               ],
               'multiple' => false,
               'expanded' => true
           ])
           ->add('ministerio',ChoiceType::class,[
               'placeholder' => 'Seleccione un programa',
               'choices' => [
                   'MINDUS' => 'MINDUS',
                   'MINEM' => 'MINEM',
                   'MINSAP' => 'MINSAP',
                   'MINED' => 'MINED'
               ]
           ])
           ->add('empresa',EntityType::class,[
               'placeholder' => 'Selecciona una empresa',
               'class' => Empresa::class,
               'query_builder' => function($repository){
                        return $repository->createAlphabeticalQueryBuilder();
               }
           ])
           ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setDefaults([
                'data_class' => Contrato::class
            ]);
    }

}