<?php

namespace App\Form;
use App\Repository\PromotionRepository;
use App\Repository\FactureRepository;
use App\Entity\Facture;
use App\Entity\Promotion;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FactureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prixtotal')
            ->add('idpromotion',EntityType::class,['class'=>Promotion::class,'choice_label'=>'taux'])
            ->add('idclient',EntityType::class,['class'=>Utilisateur::class,'choice_label'=>'nom'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Facture::class,
        ]);
    }
}
