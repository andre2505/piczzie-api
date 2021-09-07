<?php


namespace App\Controller\gift;

use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ListGifts extends AbstractFOSRestController
{
    /**
     * @Get(
     *     path = "/gifts"
     * )
     */
    public function listGiftsAction()
    {
        $cnx = $this->getDoctrine()->getConnection();
        if ($cnx->isConnected()){
            return new JsonResponse('Connected');
        }
        else {
            return new JsonResponse('Not Connected');;
        }
    }
}