<?php


namespace App\Service;


use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;

class FlowUtils
{
    public function initializeFlowArray(): array
    {
        return array(
            'iron' => 0,
            'petrol' => 0,
            'uranium' => 0,
            'gold' => 0,
            'sand' => 0,
            'steel' => 0,
            'coal' => 0,
            'max' => 0
        );
    }

    public function createForm(FormBuilderInterface $builder)
    {
        $builder
            ->add('iron', NumberType::class)
            ->add('petrol', NumberType::class)
            ->add('uranium', NumberType::class)
            ->add('gold', NumberType::class)
            ->add('sand', NumberType::class)
            ->add('steel', NumberType::class)
            ->add('coal', NumberType::class);
    }
}