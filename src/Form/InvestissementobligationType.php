<?php

namespace App\Form;

use App\Entity\Loan\Investissementobligation;
use App\Repository\WalletRepository;
use App\Repository\ObligationRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InvestissementobligationType extends AbstractType
{
    private $walletRepository;
    private $obligationRepository;

    public function __construct(WalletRepository $walletRepository, ObligationRepository $obligationRepository)
    {
        $this->walletRepository = $walletRepository;
        $this->obligationRepository = $obligationRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // Get all wallets from database (filter by user_id = 1 for now)
        $wallets = $this->walletRepository->findBy(['utilisateur_id' => 1]);
        $walletChoices = [];
        foreach ($wallets as $wallet) {
            $walletChoices[$wallet->getPays() . ' - ' . $wallet->getSolde() . ' ' . $wallet->getDevise()] = $wallet->getId();
        }

        // Get all obligations from database
        $obligations = $this->obligationRepository->findAll();
        $obligationChoices = [];
        foreach ($obligations as $obligation) {
            $obligationChoices[$obligation->getNom() . ' - ' . $obligation->getTauxInteret() . '% for ' . $obligation->getDuree() . ' months'] = $obligation->getIdObligation();
        }

        $builder
            ->add('walletId', ChoiceType::class, [
                'label' => false,
                'choices' => $walletChoices,
                'attr' => ['class' => 'form-control'],
                'placeholder' => '-- Choose a wallet --'
            ])
            ->add('obligationId', ChoiceType::class, [
                'label' => false,
                'choices' => $obligationChoices,
                'attr' => ['class' => 'form-control'],
                'placeholder' => '-- Choose an obligation --'
            ])
            ->add('montantInvesti', NumberType::class, [
                'label' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter amount to invest', 'step' => '0.01']
            ])
            ->add('dateAchat', DateType::class, [
                'label' => false,
                'widget' => 'single_text',
                'html5' => false,
                'format' => 'dd/MM/yyyy',
                'attr' => ['class' => 'form-control datepicker', 'placeholder' => 'Select date']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Investissementobligation::class,
        ]);
    }
}