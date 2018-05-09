<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class BuscarFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             ->add('comboBox',ChoiceType::class,[
                 'label' => ' ',
                 'required' => 'true',
                 'placeholder' => 'Selecione su busqueda',
                 'attr' => [
                     'class' => ' has-feedback'
                 ],
                 'choices' => [
                     'Buscar contratos existentes y sus fechas de vencimiento' => 0,

                     'Buscar contratos que vencen en 3 meses' => 1,
                     'Buscar contratos que vencen en 6 meses' => 2,
                     'Buscar contratos por fecha de otorgamiento' => 3,
                     'Buscar contratos por fecha de vencimiento' => 4,
                     'Contratos que pertenecen al MINEM' => 5,
                     'Contratos que no pertenecen al MINEM' => 6
                 ]
             ])
        ;
    }


}