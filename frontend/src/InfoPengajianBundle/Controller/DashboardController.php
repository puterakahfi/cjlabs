<?php

namespace InfoPengajianBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DashboardController extends Controller
{

    /**
     * @Route("/hello/{name}", name="pengajian_dashboard")
     * @Template()
     */
    public function indexAction($name = '')
    {
        $map = $this->get('ivory_google_map.map');
        $marker = $this->get('ivory_google_map.marker');
        $marker->setPrefixJavascriptVariable('marker_');
        $marker->setOptions(array(
            'category' => 'test',
            'clickable' => true,
            'flat' => false,
        ));
        $map->addMarker($marker);
      
        $map->addMarker($marker);
// Sets your map type

        return $this->render('InfoPengajianBundle:Dashboard:index.html.twig', array('map' => $map));
    }

}
