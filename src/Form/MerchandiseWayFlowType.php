<?php


namespace App\Form;


use App\Entity\MerchandiseWay;
use App\Service\FlowUtils;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MerchandiseWayFlowType extends AbstractType
{
    /**
     * @var FlowUtils
     */
    private FlowUtils $flowUtils;

    public function __construct(FlowUtils $flowUtils)
    {
        $this->flowUtils = $flowUtils;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->flowUtils->createForm($builder);
    }
}