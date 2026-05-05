<?php


namespace App\Form;


use App\Entity\Loan\Investissementobligation;
use App\Repository\WalletRepository;
use App\Repository\ObligationRepository;
use App\Entity\user\Utilisateur;
use App\Entity\Loan\Wallet;
use App\Entity\Loan\Obligation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;


class InvestissementobligationType extends AbstractType
{
    private WalletRepository $walletRepository;
    private ObligationRepository $obligationRepository;
    private Security $security;


    public function __construct(
        WalletRepository $walletRepository,
        ObligationRepository $obligationRepository,
        Security $security
    ) {
        $this->walletRepository = $walletRepository;
        $this->obligationRepository = $obligationRepository;
        $this->security = $security;
    }


    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $this->security->getUser();
       
        if (!$user) {
            // Note: In a production environment, you might want to handle 
            // unauthenticated users more gracefully or throw an access denied exception.
            $user = null;
        }
       
        /** @var Wallet[] $wallets */
        $wallets = $this->walletRepository->findBy(['utilisateur' => $user]);
       
        $walletChoices = [];
        foreach ($wallets as $wallet) {
            // FIXED: Added (float) cast to ensure number_format receives a float, not float|null
            $label = $wallet->getPays() . ' - ' . number_format((float)$wallet->getSolde(), 2) . ' ' . $wallet->getDevise();
            $walletChoices[$label] = (string) $wallet->getId();
        }


        /** @var Obligation[] $obligations */
        $obligations = $this->obligationRepository->findAll();
        $obligationChoices = [];
        $obligationData = [];
       
        foreach ($obligations as $obligation) {
            $label = $obligation->getNom() . ' - ' . $obligation->getTauxInteret() . '% for ' . $obligation->getDuree() . ' months';
            $obligationChoices[$label] = $obligation->getIdObligation();
            $obligationData[$obligation->getIdObligation()] = [
                'rate' => $obligation->getTauxInteret(),
                'duration' => $obligation->getDuree(),
                'name' => $obligation->getNom()
            ];
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
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'obligationSelect',
                    'data-obligations' => json_encode($obligationData)
                ],
                'placeholder' => '-- Choose an obligation --'
            ])
            ->add('montantInvesti', NumberType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter amount to invest',
                    'step' => '0.01',
                    'id' => 'amountInput'
                ]
            ])
            ->add('dateAchat', DateType::class, [
                'label' => false,
                'widget' => 'single_text',
                'html5' => false,
                'format' => 'dd/MM/yyyy',
                'attr' => [
                    'class' => 'form-control datepicker',
                    'placeholder' => 'Select date',
                    'id' => 'dateInput'
                ]
            ]);
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Investissementobligation::class,
        ]);
    }
}






