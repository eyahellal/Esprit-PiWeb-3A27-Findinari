<?php

namespace App\form;

use App\Entity\reclamation\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('contenu', TextareaType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'Type a message...',
                    'style' => 'flex: 1; height: 48px; min-height: 48px; max-height: 120px; padding: 13px 16px; border-radius: 12px; border: 1.5px solid var(--border); font-family: inherit; font-size: 14px; resize: vertical; outline: none; transition: border-color 0.2s;',
                    'onfocus' => 'this.style.borderColor="var(--brand)"',
                    'onblur' => 'this.style.borderColor="var(--border)"',
                ],
            ])
            ->add('attachment', FileType::class, [
                'label' => 'Attachment',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp',
                            'application/pdf',
                            'application/msword',
                            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                            'audio/webm',
                            'audio/ogg',
                            'audio/mpeg',
                            'audio/mp3',
                            'audio/wav',
                            'audio/x-wav',
                            'audio/mp4',
                            'audio/x-m4a',
                            'audio/aac',
                        ],
                        'mimeTypesMessage' => 'Allowed files: JPG, PNG, WEBP, PDF, DOC, DOCX, TXT, WEBM, OGG, MP3, WAV, M4A, AAC.',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
}