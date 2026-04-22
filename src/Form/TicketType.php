<?php

namespace App\form;

use App\Entity\reclamation\Ticket;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class TicketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Subject',
                'attr' => [
                    'placeholder' => 'Brief description of your issue',
                    'class' => 'form-control'
                ],
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Category',
                'choices' => [
                    'Select a category' => '',
                    'Technical Support' => 'Technical Support',
                    'Billing Issue' => 'Billing Issue',
                    'Account Access' => 'Account Access',
                    'General Inquiry' => 'General Inquiry',
                ],
                'attr' => ['class' => 'form-select'],
            ])
            ->add('priorite', ChoiceType::class, [
                'label' => 'Priority',
                'choices' => [
                    'Low' => 'Low',
                    'Medium' => 'Medium',
                    'High' => 'High',
                ],
                'expanded' => true, // This will render as radio buttons, we can style them as buttons in Twig
                'multiple' => false,
                'data' => 'Medium',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'placeholder' => 'Please provide detailed information about your issue...',
                    'class' => 'form-control',
                    'rows' => 5,
                    'maxlength' => 1000,
                ],
            ])
            ->add('imageUrl', FileType::class, [
                'label' => 'Attachments',
                'mapped' => false, // We will handle the file upload manually in the controller
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '10M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'application/pdf',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image (JPEG, PNG) or PDF document',
                    ])
                ],
                'attr' => ['class' => 'form-control-file d-none', 'id' => 'ticket-attachment'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ticket::class,
        ]);
    }
}
