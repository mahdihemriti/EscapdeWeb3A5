<?php

namespace App\Form;

use App\Entity\Destination;

use Symfony\Component\Form\AbstractType;
use App\Repository\ChambreRepository;
use App\Repository\DestinationRepository;
use App\Repository\HotelRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Validator\Constraints\File;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
class DestinationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pays',
                ChoiceType::class,
                array('choices' => ['France' => 'France', 'Japon' => 'Japon',
                    'Belgique' => 'Belgique', 'Chine' => 'Chine',
                    'Cuba' => 'Cuba']))->add('ville', ChoiceType::class,
                array('choices' => []))->add('img', FileType::class, [
                'mapped' => false,
                'required' => false,
            ]);;

        $builder->get('pays')
            ->addEventListener(
                FormEvents::POST_SUBMIT,

                function (FormEvent $event) {

                    $form = $event->getForm();
                    if ($form->getData() == "France") {
                        $form->getParent()->add('ville', ChoiceType::class,
                            array('choices' => ['Paris' => 'Paris', 'Nice' => 'Nice']));
                    }
                    if ($form->getData() == "Belgique") {
                        $form->getParent()->add('ville', ChoiceType::class,
                            array('choices' => ['Bruxelles' => 'Bruxelles', 'Namur' => 'Namur', 'Bruges' => 'Bruges']));
                    }
                    if ($form->getData() == "Japon") {
                        $form->getParent()->add('ville', ChoiceType::class,
                            array('choices' => ['Okazaki' => 'Okazaki', 'Toyokawa' => 'Toyokawa', 'Inazawa' => 'Inazawa']));
                    }

                    if ($form->getData() == "Chine") {
                        $form->getParent()->add('ville', ChoiceType::class,
                            array('choices' => ['Shanghai' => 'Shanghai', 'Pékin' => 'Pékin', 'Jinan' => 'Jinan']));
                    }
                    if ($form->getData() == "Cuba") {
                        $form->getParent()->add('ville', ChoiceType::class,
                            array('choices' => ['Havane' => 'Havane', 'Bayamo' => 'Bayamo', 'Florida' => 'Florida']));
                    }




                });
/*
        $builder->addEventListener(
            FormEvents::POST_SET_DATA,
            function (FormEvent $event) {
                $data = $event->getData();
                $pays = $data->getPays();
                $form = $event->getForm();
                if ($pays) {
                    // On récupère le département et la région
                    $ville = $data->getVille();

                    // On crée les 2 champs supplémentaires

                    $this->addVilleField($form, $pays);
                    // On set les données
                    $form->get('ville')->setData($ville);

                } else {
                    // On crée les 2 champs en les laissant vide (champs utilisé pour le JavaScript)

                    $this->addVilleField($form, null);
                }
            }
        );

*/

    }

    /*
    private function addVilleField(FormInterface $form, ?String $pays)
    {

        if($pays=="France"){
            $form->getParent()->add('ville', ChoiceType::class,
                array('choices' => ['Paris' => 'Paris', 'Nice' => 'Nice']));
        }

        if($pays=="Japon"){
            $form->getParent()->add('ville', ChoiceType::class,
                array('choices' => ['Okazaki' => 'Okazaki', 'Toyokawa' => 'Toyokawa', 'Inazawa' => 'Inazawa']));
        }

        if($pays=="Chine"){
            $form->getParent()->add('ville', ChoiceType::class,
                array('choices' => ['Shanghai' => 'Shanghai', 'Pékin' => 'Pékin', 'Jinan' => 'Jinan']));
        }
        if($pays=="Cuba"){
            $form->getParent()->add('ville', ChoiceType::class,
                array('choices' => ['Havane' => 'Havane', 'Bayamo' => 'Bayamo', 'Florida' => 'Florida']));
        }



    }



    */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Destination::class,
        ]);
    }
}
