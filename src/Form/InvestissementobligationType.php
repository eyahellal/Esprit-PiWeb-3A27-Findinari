<?php

namespace App\Form;

use App\Entity\Loan\Investissementobligation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InvestissementobligationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // Get wallets from database for dropdown
        $walletChoices = [
            'Wallet #3 - France (4711.40 EUR)' => 3,
            'Wallet #4 - Tunisie (228.50 TND)' => 4,
            'Wallet #5 - Tunisie (2367.00 TND)' => 5,
            'Wallet #17 - British (4900.00 GBP)' => 17,
            'Wallet #25 - Tunisie (0.00 TND)' => 25,
            'Wallet #30 - Tunisie (1440.00 TND)' => 30,
            'Wallet #31 - Anguilla (49880.00 XCD)' => 31,
            'Wallet #32 - Algeria (2000.00 DZD)' => 32,
        ];

        // Get obligations from database for dropdown
        $obligationChoices = [
            'Safe Bond - 5.5% for 12 months' => 1,
            'Legacy For - 0.13% for 240 months' => 2,
            'kdkd - 0.5% for 10 months' => 3,
        ];

        $builder
            ->add('walletId', ChoiceType::class, [
                'label' => 'Select Wallet',
                'choices' => $walletChoices,
                'attr' => ['class' => 'form-control'],
                'placeholder' => '-- Choose a wallet --'
            ])
            ->add('obligationId', ChoiceType::class, [
                'label' => 'Select Obligation',
                'choices' => $obligationChoices,
                'attr' => ['class' => 'form-control'],
                'placeholder' => '-- Choose an obligation --'
            ])
            ->add('montantInvesti', NumberType::class, [
                'label' => 'Investment Amount',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter amount to invest', 'step' => '0.01']
            ])
            ->add('dateAchat', DateType::class, [
                'label' => 'Purchase Date',
                'widget' => 'single_text',
                'html5' => false,
                'format' => 'dd/MM/yyyy',
                'attr' => ['class' => 'form-control datepicker', 'placeholder' => 'dd/mm/yyyy']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Investissementobligation::class,
        ]);
    }
}