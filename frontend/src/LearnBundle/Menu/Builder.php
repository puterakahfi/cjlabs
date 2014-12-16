<?php
// src/Acme/DemoBundle/Menu/Builder.php
namespace LearnBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'dashboard'));
        $menu->addChild('About Me', array(
            'route' => 'dashboard',
            'routeParameters' => array('id' => 42)
        ));
        // ... add more children

        return $menu;
    }
}