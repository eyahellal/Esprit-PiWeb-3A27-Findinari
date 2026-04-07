<?php

namespace App\Form;

use App\Entity\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
                    'onblur' => 'this.style.borderColor="var(--border)"'
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
}
