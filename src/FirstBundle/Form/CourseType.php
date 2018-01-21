<?php

namespace FirstBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class CourseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',  TextType::class, array('label' => "Course Name * " ,"required" => "required"))
            ->add('startDate', DateType::class)
            ->add('endDate', DateType::class)
            ->add('price',TextType::class, array('label' => 'Course Price * ', "attr" => array("class" => 'price-class') ))
            ->add('description',  TextareaType::class)
            ->add('online', ChoiceType::class, array("choices" => array("Y" => "Y", "N" => "N")))
            ->add('acceptedCreditCard', CheckboxType::class,array("label" => "Accepted Credit Card? "))
            ->add('Save', SubmitType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FirstBundle\Entity\Course'
        ));
    }
}
