<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Location;

use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcherInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
/**
 * Description of LocationsController
 *
 * @author symfony
 */
class LocationsController extends FOSRestController {
    
    public function getLocationAction(Location $location) {
        return $location;
    }
    
    /**
     *@Annotations\QueryParam(name="offset", requirements="\d+", nullable=true, description="Offset from which to start listing offres.")
     *@Annotations\QueryParam(name="limit", requirements="\d+", default="5", description="How many offres to return.")
     * 
     * @param Request $request
     * @param ParamFetcherInterface $paramFetcher
     * @return type
     */
    
    public function getLocationsAction(Request $request, ParamFetcherInterface $paramFetcher){
        
        $offset = $paramFetcher->get('offset');
        $start = null == $offset ? 0 : $offset + 1;
        $limit = $paramFetcher->get('limit');

        $locations = $this->getDoctrine()
                         ->getRepository('AppBundle:Location')
                         ->findAll();
        return array_slice($locations, $start, $limit, true);
    }
}
/* $loction = $this->getDoctrine()
                         ->getRepository('AppBundle:Location')
                         ->find($id);*/

/*
    $location = new Location('test', 'test', 12, 12);
        
    $manager = $this->getDoctrine()->getManager();
    $manager->persist($location);
    $manager->flush();
 */