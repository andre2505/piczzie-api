<?php


namespace App\Controller\registration;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\Persistence\ObjectManager;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Post;
use http\Env\Response;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use FOS\RestBundle\Controller\Annotations\View as View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class RegistrationController extends AbstractFOSRestController
{
    private $passwordHasher;

    private $userRepository;

    public function __construct(UserRepository $userRepository, UserPasswordHasherInterface $passwordHasher)
    {
        $this->userRepository = $userRepository;
        $this->passwordHasher = $passwordHasher;
    }

    /**
     * @Post(
     *     path = "/register",
     *     name = "app_article_show",
     * )
     * @ParamConverter("user", converter="fos_rest.request_body")
     */
    public function registrationAction(User $user): JsonResponse
    {

        $entitityManager = $this->getDoctrine()->getManager();
        $user->setPassword($this->passwordHasher->hashPassword($user, $user->getPassword()));
        $entitityManager->persist($user);

        $entitityManager->flush();

        return new JsonResponse('Saved new product with id ' . $user->getId());
    }
}