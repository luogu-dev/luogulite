<?php

namespace LuoguLite\ProblemBundle\Form\Type;

use LuoguLite\ProblemBundle\Entity\Problem;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProblemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')
                ->add('description', TextareaType::class)
                ->add('inputFormat', TextareaType::class, [
                    'required' => false,
                ])
                ->add('outputFormat', TextareaType::class, [
                    'required' => false,
                ])
                ->add('sampleTestcases', CollectionType::class, [
                    'entry_type' => SampleTestcaseType::class,
                    'allow_add' => true,
                    'allow_delete' => true,
                    'prototype' => true
                ])
                ->add('newTestcase', ButtonType::class, [
                    'attr' => [
                        'class' => 'primary'
                    ]
                ])
                ->add('hint', TextareaType::class, [
                    'required' => false
                ])
                ->add('submit', SubmitType::class, [
                    'attr' => [
                        'class' => 'danger'
                    ]
                ]);

        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $data = $event->getData();
            // Reorder sample testcases (in case some are deleted)
            $data['sampleTestcases'] = array_values($data['sampleTestcases']);
            $event->setData($data);
        });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Problem::class);
    }
}