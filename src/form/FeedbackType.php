<?php

namespace App\form;

use App\Entity\user\Feedback;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;

class FeedbackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('rating', HiddenType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Please select a rating.']),
                    new Range([
                        'min' => 1,
                        'max' => 5,
                        'notInRangeMessage' => 'Rating must be between 1 and 5.',
                    ]),
                ],
            ])
            ->add('message', TextareaType::class, [
                'attr' => [
                    'rows' => 5,
                    'placeholder' => 'Write your feedback here...',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Feedback message is required.']),
                    new Length([
                        'min' => 5,
                        'minMessage' => 'Your feedback must contain at least 5 characters.',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Feedback::class,
        ]);
    }
}