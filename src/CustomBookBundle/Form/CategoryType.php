<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CustomBookBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
/**
 * Description of CategoryType
 *
 * @author mdivakaran
 */
class CategoryType extends AbstractType {
    //put your code here
    public function buildForm(FormBuilderInterface $b, array $options)
	{
		$b->add('name', 'text')
                  ->add('save', 'submit');
	}

	public function getName()
	{
		return 'category';
	}

	public function setDefaultOptions(OptionsResolverInterface $r)
	{
		$r->setDefaults(array(
			'data_class' => 'CustomBookBundle\Entity\Category'
		));
	}
}
