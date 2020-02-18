<?php


namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ChoixType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class,[
                'disabled'=>true
            ])
            ->add('prenom', TextType::class,[
                'disabled'=>true
            ])
            ->add('date_naissance', DateType::class,[
                'disabled'=>true
            ])
            ->add('enpremiere','choice',[
                'choices'=>[
                    ''
                ],
                'multiple'  => true,
            ])
            ->add('enterminale','choice',[
                'multiple'  => true
            ])
            ->add('save', SubmitType::class)
        ;
    }
}