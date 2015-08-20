<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class MenuBuilder
{

    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(FactoryInterface $factory, RequestStack $requestStack)
    {
        $menu = $factory->createItem('root');
    	$menu->setChildrenAttribute('class', 'nav');
 
		$menu->addChild('Projects', array('route' => 'acme_hello_projects'))
			->setAttribute('icon', 'icon-list');
 
		$menu->addChild('Employees', array('route' => 'acme_hello_employees'))
			->setAttribute('icon', 'icon-group');
 

        return $menu;
    }

    public function createSidebarMenu(FactoryInterface $factory, RequestStack $requestStack)
    {
        $menu = $this->factory->createItem('sidebar');

        $menu->addChild('Sidebar', array('route' => 'dashboard'));
        // ... add more children

        return $menu;
    }

}
