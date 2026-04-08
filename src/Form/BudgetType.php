<?php

namespace App\form;

use App\Entity\management\Budget;
use App\Entity\management\Categorie;
use App\Entity\Loan\Wallet;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;

class BudgetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('wallet', EntityType::class, [
                'class' => Wallet::class,
                'choice_label' => function(Wallet $wallet) {
                    return $wallet->getPays() . ' (' . $wallet->getDevise() . ')';
                },
                'label' => 'Wallet',
                'placeholder' => 'Select a wallet',
                'attr' => ['class' => 'form-select'],
                'constraints' => [
                    new NotBlank(['message' => 'Please select a wallet']),
                ],
            ])
            ->add('categorie', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'nom',
                'label' => 'Category',
                'placeholder' => 'Select a category',
                'attr' => ['class' => 'form-select'],
                'query_builder' => function($repo) {
                    return $repo->createQueryBuilder('c')
                        ->where('c.statut = :statut')
                        ->setParameter('statut', 'Active')
                        ->orderBy('c.nom', 'ASC');
                },
                'constraints' => [
                    new NotBlank(['message' => 'Please select a category']),
                ],
            ])
            ->add('montantMax', NumberType::class, [
                'label' => 'Maximum Amount',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter maximum budget amount',
                    'step' => '0.01',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter an amount']),
                    new Positive(['message' => 'Amount must be positive']),
                ],
            ])
            ->add('dureeBudget', IntegerType::class, [
                'label' => 'Duration (days)',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter duration in days',
                    'min' => 1,
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter duration']),
                    new Positive(['message' => 'Duration must be positive']),
                ],
            ])
            ->add('dateBudget', DateType::class, [
                'label' => 'Start Date',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'Please select a date']),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Budget::class,
        ]);
    }
}