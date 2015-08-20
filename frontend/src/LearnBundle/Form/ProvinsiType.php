<?php

namespace LearnBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Description of Provinsi
 *
 * @author dwc
 */
class ProvinsiType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nama_provinsi','language');
    }

    public function getName()
    {
        return 'Provinsi';
    }

}
