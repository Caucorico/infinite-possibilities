<?php

namespace App\Controller;

use App\Entity\Region;
use App\Form\RegionType;
use App\Repository\RegionRepository;
use App\Service\RegionInformations;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/region")
 */
class RegionController extends AbstractController
{
    /**
     * @Route("/{id}", name="region_show", methods={"GET"})
     */
    public function show(Region $region, RegionInformations $regionInformations): Response
    {
        return $this->render('region/show.html.twig', [
            'region' => $region,
            'maximumFlow' => $regionInformations->getMaximumFlow($region),
            'currentFlow' => $regionInformations->getCurrentFlow($region),
            'production' => $regionInformations->getAllProductions($region),
        ]);
    }
}
