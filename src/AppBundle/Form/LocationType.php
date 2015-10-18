<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
/**
 * Description of LocationType
 *
 * @author symfony
 */
class LocationType extends AbstractType
{
     /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('name')
                ->add('address')
                ->add('lat')
                ->add('lng');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(
            [
                'csrf_protection' => false,
                'data_class'      => 'AppBundle\Entity\Location',
            ]
        );
    }    
    
    /**
     * 
     * @return string
     */
    public function getName() {
        return '';
    }
}
