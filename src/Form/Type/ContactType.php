<?php

namespace FastnTech\FormPlugin\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use EWZ\Bundle\RecaptchaBundle\Form\Type\EWZRecaptchaType;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints\IsTrue as RecaptchaTrue;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fullName', TextType::class, [
                'label' => 'Ad ve Soyadınız',
                'required' => true
            ])
            ->add('email', EmailType::class, [
                'label' => 'E-Posta Adresiniz',
                'required' => true
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Mesajınız',
                'required' => true
            ])
            ->add('recaptcha', EWZRecaptchaType::class, [
                'mapped' => false,
                'constraints' => [
                    new RecaptchaTrue([
                        'groups' => ['fastntech_form_contact']
                    ])
                ]
            ])
        ;
    }

    public function getBlockPrefix(): string
    {
        return 'fastntech_form_contact';
    }
}