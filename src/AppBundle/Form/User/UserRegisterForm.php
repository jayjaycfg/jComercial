<?php

namespace AppBundle\Form\User;

use AppBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserRegisterForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null,[
                'label' => 'Usuario'
            ])
            ->add('lastName', null,[
                'label' => 'Apellidos'
            ])
            ->add('plainPassword', RepeatedType::class,[

                'type' => PasswordType::class
            ])
            ->add('roles',ChoiceType::class,[
                'label' => 'Ocupación',
                'choices' =>[
                    'ROLE_ADMIN' => 'ROLE_ADMIN',
                    'ROLE_USER'  => 'ROLE_USER',
                    'ROLE_FAC'  => 'ROLE_FAC'
                ],
                'multiple' => true,
                'expanded' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'validation_groups' => ['Default', 'Registration']
        ]);
    }

}
