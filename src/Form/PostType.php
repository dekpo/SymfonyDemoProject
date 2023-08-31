<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title',null,[
                'label_attr' => ['class'=>'form-label'],
                'attr' => ['class'=>'form-control']
            ])
            ->add('description',null,[
                'label_attr' => ['class'=>'form-label'],
                'attr' => ['class'=>'form-control']
            ])
            ->add('content',null,[
                'label_attr' => ['class'=>'form-label'],
                'attr' => ['class'=>'form-control']
            ])
            ->add('image',null,[
                'label_attr' => ['class'=>'form-label'],
                'attr' => ['class'=>'form-control']
            ])
            // ->add('createdAt')
            // ->add('updatedAt')
            ->add('pinned',null,[
                'row_attr' => ['class'=>'form-check'],
                'label_attr' => ['class'=>'form-check-label'],
                'attr' => ['class'=>'form-check-input']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
