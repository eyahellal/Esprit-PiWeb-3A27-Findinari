<?php

namespace App\form;

use App\Entity\management\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Category Name',
                'attr' => ['placeholder' => 'e.g. Food, Transport...', 'class' => 'form-control']
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['placeholder' => 'Describe this category...', 'rows' => 3, 'class' => 'form-control']
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Status',
                'choices' => [
                    'Active' => 'ACTIF',
                    'Inactive' => 'INACTIF',
                ],
                'attr' => ['class' => 'form-select']
            ])
            ->add('color', ColorType::class, [
                'label' => 'Color',
                'required' => false,
                'attr' => ['class' => 'form-control form-control-color w-100']
            ])
            ->add('icon', ChoiceType::class, [
                'label' => 'Icon',
                'required' => false,
                'choices' => [
                    'Food & Drink' => 'fa-utensils',
                    'Transport' => 'fa-car',
                    'Health' => 'fa-heart-pulse',
                    'Shopping' => 'fa-bag-shopping',
                    'Education' => 'fa-graduation-cap',
                    'Entertainment' => 'fa-film',
                    'Housing' => 'fa-house',
                    'Travel' => 'fa-plane',
                    'Investment' => 'fa-chart-line',
                    'Other' => 'fa-circle-dot',
                ],
                'attr' => ['class' => 'form-select']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Categorie::class,
        ]);
    }
}