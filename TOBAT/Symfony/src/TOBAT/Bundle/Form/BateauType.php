<?php

namespace TOBAT\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class BateauType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prix')
            ->add('annee')
            ->add('longueur')
            ->add('largeur')
            ->add('hauteur')
            ->add('etat')
            ->add('nbCabine')
            ->add('nbSaleEau')
            ->add('nbMoteur')
            ->add('puissance')
            ->add('nbHMoteur')
            ->add('energie')
            ->add('latitude')
            ->add('longitude')
            ->add('type')
            ->add('photo')

           ->add('Enregistrer', SubmitType::class); 
           ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TOBAT\Bundle\Entity\Bateau'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tobat_bundle_bateau';
    }


}
