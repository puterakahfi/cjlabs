<?php

namespace LearnBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
#use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use LearnBundle\Entity\Task;
use LearnBundle\Form\PostType;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/learn/form")
 */
class FormController extends Controller
{

    /**
     * @Route("/", name="learn_form_index")
     */
    public function indexAction()
    {
        // create a task and give it some dummy data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
                ->add('task', 'text')
                ->add('dueDate', 'date')
                ->add('desc', 'textarea')
                ->add('save', 'submit', array('label' => 'Create Task'))
                ->getForm();

        return $this->render('LearnBundle:Form:index.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /**
     * 
     * @Route("/simple",  name="learn_form_simple")
     */
    public function simpleAction(Request $request)
    {


        $bootstrapFormClass = array('attr' => array('class' => 'form-control'));
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
                ->add('task', 'text', $bootstrapFormClass)
                ->add('dueDate', 'date')
                ->add('desc', 'textarea', $bootstrapFormClass)
                ->add('save', 'submit', array('label' => 'Create Task'))
                ->getForm();
        
        $formPostType = $this->createFormBuilder(new PostType())
                ->getForm();


        return $this->render('LearnBundle:Form:simple.html.twig', array(
                    'form' => $form->createView(),
                    'formType' => $formPostType->createView(),
        ));
    }

}
