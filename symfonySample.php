<?php

namespace AppBundle\Form\Type;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\ShipmentItem;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ShipmentOptionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('applied')
            ->add('successfully')
            ->add('additionalPrice')
            ->add('comment')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ShipmentOptions'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'shipment_option';
    }
}
