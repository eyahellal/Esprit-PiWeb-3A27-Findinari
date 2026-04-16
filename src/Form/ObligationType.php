<?php

namespace App\Form;

use App\Entity\Loan\Obligation;  // ← This must match your entity location
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ObligationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Obligation Name',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter obligation name']
            ])
            ->add('tauxInteret', NumberType::class, [
                'label' => 'Interest Rate (%)',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter interest rate', 'step' => '0.01']
            ])
            ->add('duree', NumberType::class, [
                'label' => 'Duration (months)',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter duration in months']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Obligation::class,  // ← This uses the correct class
        ]);
    }
}