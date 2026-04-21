<?php

namespace App\form;

use App\Entity\community\Commentaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('contenu', TextareaType::class, [
            'label' => false,
            'required' => false,
            'attr' => [
                'rows' => 3,
                'maxlength' => 1000,
                'class' => 'community-comment-field',
                'placeholder' => 'Écrire un commentaire...',
            ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(['data_class' => Commentaire::class]);
    }
}
