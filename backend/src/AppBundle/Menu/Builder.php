<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware {

    public function mainMenu(FactoryInterface $factory, array $options) {
      
        /**
        $menu = $factory->createItem('root', array('attributes' => array('class' => 'sidebar-menu')));

        $menu->addChild('System Management', array('uri' => '#', 'attributes' => array('class' => 'treeview active')));


        $menu['System Management']->addChild('User Management', array('route' => 'dashboard'));
        $menu['System Management']->addChild('Module Management', array('route' => 'dashboard'));
        $menu['System Management']->addChild('Module Management', array('route' => 'dashboard'));
        */

        $menu = $factory->createItem('root', array('attributes' => array('class' => 'nav')));

        $menu->addChild('page1');
        $menu->addChild('page2');

        $menu['page2']->addChild('page2a');
        $menu['page2']->addChild('page2b');
        $menu['page2']->addChild('page2c');

        $menu->addChild('page3');
        $menu->addChild('page4');



        return $menu;
    }

}
