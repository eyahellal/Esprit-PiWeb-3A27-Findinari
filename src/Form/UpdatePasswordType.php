<?php

namespace App\form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class UpdatePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('currentPassword', PasswordType::class, [
                'label' => false,
                'mapped' => false,
                'attr' => [
                    'placeholder' => 'Current password',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Current password is required',
                    ]),
                ],
            ])
            ->add('newPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'invalid_message' => 'The new passwords do not match.',
                'first_options' => [
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'New password',
                    ],
                ],
                'second_options' => [
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Confirm new password',
                    ],
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'New password is required',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'New password must contain at least 6 characters',
                    ]),
                ],
            ]);
    }
}