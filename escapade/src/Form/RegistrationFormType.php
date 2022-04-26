<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Validator\Constraints\File;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('datedenaissance',DateType::class, [
                'widget' => 'single_text',
                'placeholder' => 'date de naissance'
            ])
            ->add('numtel')
            ->add('ville')
            ->add('image', FileType::class,[
                'label'=>false,
                'multiple'=> false,
                'mapped'=>false,
                'required'=> true,
                'constraints' => [
                     new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                        'image/*'
                         ],
                        'mimeTypesMessage' => 'inserez une image svp',
                         ])
    ],
            ])
            //->add('mdp', PasswordType::class)
            ->add('mdp', RepeatedType::class, [
            'type' => PasswordType::class,
            'invalid_message' => ' les mots de passe saisis ne correspondent pas.',
            'options' => ['attr' => ['class' => 'password-field']],
            'required' => true,
            'first_options'  => ['label' => 'Password'],
            'second_options' => ['label' => 'Repeat Password'],
            ])


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
