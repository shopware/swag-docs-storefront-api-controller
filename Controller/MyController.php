<?php declare(strict_types=1);

namespace StorefrontApiController\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class MyController extends AbstractController
{
    /**
     * @Route("/storefront-api/v1/swag/my-storefront-api-action", name="storefront-api.action.swag.my-storefront-api-action", methods={"GET"})
     */
    public function myFirstApi(): JsonResponse
    {
        return new JsonResponse(['You successfully created your first storefront api controller route']);
    }
}