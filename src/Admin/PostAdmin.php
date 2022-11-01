<?php 
namespace App\Admin;

use App\Entity\Post;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class PostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form): void
    {
        $form
        ->with('tets')
            ->add('string', ModelType::class, [
                'class' => Post::class,
                'property' => 'string',
            ])
            ->add('url', ModelType::class, [
                'class' => Post::class,
                'property' => 'url',
            ])
        ->end()
        // ->add('url', ModelType::class, [
        //     'class' => Post::class,
        //     'property' => 'url',
        // ])
        
    ;
    }

    protected function configureListFields(ListMapper $list): void
    {
        $list
            ->add('url', ModelType::class, [
                'class' => Post::class,
                'property' => 'url',
            ])
            ->add('string', ModelType::class, [
                'class' => Post::class,
                'property' => 'string',
            ])
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagrid): void
    {
        $datagrid
            ->add('url')
            ->add('string', null, [
                'field_type' => EntityType::class,
                'field_options' => [
                    'class' => Post::class,
                    'choice_label' => 'string',
                ],
            ])
            ;
    }

    protected function configureShowFields(ShowMapper $show): void
{
    $show
        ->add('string', ModelType::class, [
            'class' => Post::class,
            'property' => 'string',
        ])
    ;
}

}