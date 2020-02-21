<?php declare(strict_types=1);

namespace Swag\SalesChannelApiController\Controller;

use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class MyController extends AbstractController
{
    /**
     * @RouteScope(scopes={"sales-channel-api"})
     * @Route("/sales-channel-api/v1/swag/my-sales-channel-api-action", name="sales-channel-api.action.swag.my-sales-channel-api-action", methods={"GET"})
     */
    public function myFirstApi(): JsonResponse
    {
        return new JsonResponse(['You successfully created your first SalesChannel-API controller route']);
    }
}
