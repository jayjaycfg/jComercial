<?php
/**
 * Created by PhpStorm.
 * User: audioxtreme
 * Date: 3/05/18
 * Time: 14:39
 */

namespace AppBundle\Form;


use AppBundle\Entity\Empresa;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmpresaFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('domicilioLegal')
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
       $resolver
            ->setDefaults([
                'data_class' => Empresa::class
            ]);
    }

}