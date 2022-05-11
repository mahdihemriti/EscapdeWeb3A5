<?php

namespace App\Form;

use App\Entity\Chambre;
use App\Entity\Destination;
use App\Entity\Hotel;
use App\Repository\ChambreRepository;
use App\Repository\DestinationRepository;
use App\Repository\HotelRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChambreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('num')
            ->add('type',ChoiceType::class, array('choices'=>['simple'=>'simple','double'=>'double']))
            ->add('vuesurmer',ChoiceType::class,array('choices'=>['yes'=>'yes','no'=>'no']))
            ->add('description',TextareaType::class)
            ->add('prixnuit')
            ->add('img',FileType::class,[
                'mapped'=>false,
                'required'=>false,
            ])
            ->add('idhotel',EntityType::class, ['class'=>Hotel::class,
                'choice_label'=>'nom'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Chambre::class,
        ]);
    }
}
