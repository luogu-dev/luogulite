<?php

namespace LuoguLite\ProblemBundle\Form\Type;

use LuoguLite\ProblemBundle\Entity\Problem;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProblemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')
                ->add('description', TextareaType::class)
                ->add('inputFormat', TextareaType::class)
                ->add('outputFormat', TextareaType::class)
                ->add('sampleTestcases', CollectionType::class, [
                    'entry_type' => SampleTestcaseType::class,
                    'allow_add' => true,
                    'allow_delete' => true,
                    'delete_empty' => true,
                    'prototype' => true,
                    'attr' => [
                        'class' => 'sample-testcases'
                    ]
                ])
                ->add('hint', TextareaType::class)
                ->add('submit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Problem::class);
    }
}