<?php

namespace LearnBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;



class PostType extends AbstractType
{
    private  $bootstrapInputAttr = array('class'=>'form-control');

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('title', 'text', array('attr'=>$this->bootstrapInputAttr))
                ->add('summary', 'textarea',array('attr'=>$this->bootstrapInputAttr))
                ->add('content', 'textarea',array('attr'=>$this->bootstrapInputAttr))
                ->add('authorEmail', 'email',array('attr'=>$this->bootstrapInputAttr))
                ->add('publishedAt', 'date',array('attr'=>$this->bootstrapInputAttr))
        ;
    }

  
    public function getName()
    {
        return 'Post';
    }

}
