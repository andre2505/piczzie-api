<?php


namespace App\Controller\registration;


use App\Entity\User;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Post;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class LoginController extends AbstractFOSRestController
{
    /**
     * @Post(
     *     path = "/login"
     * )
     * @ParamConverter("user", converter="fos_rest.request_body")
     */
    public function LoginAction(User $user)
    {
        return new JsonResponse("ok");
    }
}