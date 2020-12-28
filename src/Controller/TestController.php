<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TestController
 * @package App\Controller
 *
 * @Route("/")
 */
class TestController
{

    /**
     * @Route("/", name="index")
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return new JsonResponse(array(
            "success" => true
        ));
    }
}