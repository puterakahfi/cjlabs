<?php

namespace LearnBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
#use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use LearnBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;


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

}
