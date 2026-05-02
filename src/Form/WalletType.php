<?php

namespace App\Form;

use App\Entity\management\Wallet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WalletType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pays', TextType::class, [
                'label' => 'Country',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter country name']
            ])
            ->add('solde', NumberType::class, [
                'label' => 'Balance',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter balance', 'step' => '0.01']
            ])
            ->add('devise', TextType::class, [
                'label' => 'Currency',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter currency (DT, EUR, USD, etc.)']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Wallet::class,
        ]);
    }
}