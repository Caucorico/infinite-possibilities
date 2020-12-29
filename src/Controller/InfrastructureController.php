<?php

namespace App\Controller;

use App\Entity\Infrastructure;
use App\Form\InfrastructureType;
use App\Repository\InfrastructureRepository;
use App\Repository\RegionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/infrastructure")
 */
class InfrastructureController extends AbstractController
{
    /**
     * @Route("/{regionId}/new", name="infrastructure_new", methods={"GET","POST"})
     */
    public function new(Request $request, int $regionId, RegionRepository $regionRepository): Response
    {
        $region = $regionRepository->find($regionId);
        $infrastructure = new Infrastructure();
        $form = $this->createForm(InfrastructureType::class, $infrastructure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $region->addInfrastructure($infrastructure);

            $entityManager->persist($infrastructure);
            $entityManager->flush();

            return $this->redirectToRoute('region_show', array('id' => $regionId));
        }

        return $this->render('infrastructure/new.html.twig', [
            'infrastructure' => $infrastructure,
            'form' => $form->createView(),
            'region' => $region,
        ]);
    }

    /**
     * @Route("/{id}", name="infrastructure_show", methods={"GET"})
     */
    public function show(Infrastructure $infrastructure): Response
    {
        return $this->render('infrastructure/show.html.twig', [
            'infrastructure' => $infrastructure,
        ]);
    }
}
