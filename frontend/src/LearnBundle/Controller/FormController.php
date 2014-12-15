<?php

namespace LearnBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
#use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use LearnBundle\Entity\Task;
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

        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));
        $form = $this->createFormBuilder($task)
                ->add('task', 'text')
                ->add('dueDate', 'date')
                ->add('desc', 'textarea')
                ->add('save', 'submit', array('label' => 'Create Task'))
                ->getForm();
        $form->handleRequest($request);

        if ($form->isValid()) {
            // perform some action, such as saving the task to the database
            return $this->redirect($this->generateUrl('dashboard'));
        }


        return $this->render('LearnBundle:Form:simple.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

}
