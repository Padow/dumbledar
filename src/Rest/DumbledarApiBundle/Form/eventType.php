<?php

namespace Rest\DumbledarApiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class eventType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dtstart')
            ->add('dtend')
            ->add('summary')
            ->add('location')
            ->add('description')
            ->add('calid')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rest\DumbledarApiBundle\Entity\event'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rest_dumbledarapibundle_event';
    }
}
