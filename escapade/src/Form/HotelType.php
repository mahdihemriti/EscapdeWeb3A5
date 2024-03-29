<?php

namespace App\Form;

use App\Repository\HotelRepository;
use App\Repository\DestinationRepository;
use App\Entity\Destination;
use App\Repository\ChambreRepository;

use App\Entity\Hotel;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class HotelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('matriculefiscale')
            ->add('nom')
            ->add('nbretoile')
            ->add('description',CKEditorType::class)
            ->add('nbchambretotal')
            ->add('maxchambre')
            ->add('imghotel',FileType::class,[
                'mapped'=>false,
                'required'=>false,
            ])
            ->add('iddestination',EntityType::class, ['class'=>Destination::class,
            'choice_label'=>'ville'

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hotel::class,
        ]);
    }
}
