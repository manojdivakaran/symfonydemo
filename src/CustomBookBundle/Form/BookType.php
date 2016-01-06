<?php

namespace CustomBookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
//use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType; 

class BookType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('author')
            ->add('language')
            ->add('publisher')
            ->add('category')
            ->add('summary',TextAreaType::Class,array(
                'required' => false,
            ));
                
//            ->add('summary', CKEditorType::class, array(
//    'config' => array(
//        'toolbar' => 'full',
//        'uiColor' => '#ffffff',
//        //...
//    ),
//));
        
    }
    
    
    public function getName()
	{
		return 'book';
	}
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CustomBookBundle\Entity\Book'
        ));
    }
}
