<?php

namespace App\Form;

use App\Entity\MerchandiseWay;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MerchandiseWayType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('currentFlow', MerchandiseWayFlowType::class)
            ->add('path', TextType::class, array(
                "required" => false,
                "empty_data" => array()
            ));

        if ( $options['start_required'] ) {
            $builder->add('start');
        }  else {
            $builder->add('start', ChoiceType::class, array(
                "placeholder" => $options['region_name'],
                "disabled" => true
            ));
        }

        $builder->add('end');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MerchandiseWay::class,
            'start_required' => false,
            'region_name' => 'unknown'
        ]);
    }
}
