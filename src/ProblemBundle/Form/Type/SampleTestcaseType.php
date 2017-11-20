<?php

namespace LuoguLite\ProblemBundle\Form\Type;

use LuoguLite\ProblemBundle\Entity\SampleTestcase;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SampleTestcaseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('input', TextareaType::class);
        $builder->add('output', TextareaType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', SampleTestcase::class);
    }
}
