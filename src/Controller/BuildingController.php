<?php

namespace App\Controller;

use App\Entity\Building;
use App\Form\BuildingType;
use App\Repository\BuildingRepository;
use App\Repository\RegionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/building")
 */
class BuildingController extends AbstractController
{
    /**
     * @Route("/{regionId}/new", name="building_new", methods={"GET","POST"})
     */
    public function new(Request $request, int $regionId, RegionRepository $regionRepository): Response
    {
        $region = $regionRepository->find($regionId);
        $building = new Building();
        $form = $this->createForm(BuildingType::class, $building);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $region->addBuilding($building);

            $entityManager->persist($building);
            $entityManager->flush();

            return $this->redirectToRoute('region_show', array('id' => $region->getId()));
        }

        return $this->render('building/new.html.twig', [
            'building' => $building,
            'region' => $region,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="building_show", methods={"GET"})
     */
    public function show(Building $building): Response
    {
        return $this->render('building/show.html.twig', [
            'building' => $building,
        ]);
    }
}
