<?php

namespace TOBAT\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class BateauEditType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array()ay $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       
    }
    
    public function getParent()
    {
        return BateauType::class;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TOBAT\Bundle\Entity\Bateau'
        ));
    }
}