<?php

namespace LuoguLite\ProblemBundle\Form\Type;

use LuoguLite\ProblemBundle\Entity\SampleTestcase;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SampleTestcaseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('input', TextareaType::class, [
                    'required' => false
                ])
                ->add('output', TextareaType::class, [
                    'required' => false
                ])
                ->add('deleteTestcase', ButtonType::class, [
                    'attr' => [
                        'class' => 'problem_deleteTestcase'
                    ]
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', SampleTestcase::class);
    }
}
