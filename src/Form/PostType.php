<?php

namespace App\Form;

use App\Entity\community\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('contenu', TextareaType::class, [
                'label' => false,
                'attr' => [
                    'rows' => 5,
                    'class' => 'community-editor',
                    'placeholder' => 'Partagez une idée, une question ou un retour à la communauté...',
                    'maxlength' => 2000,
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(['data_class' => Post::class]);
    }
}
