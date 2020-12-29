<?php

namespace App\Controller;

use App\Entity\MerchandiseWay;
use App\Form\MerchandiseWayType;
use App\Repository\MerchandiseWayRepository;
use App\Repository\RegionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/merchandise/way")
 */
class MerchandiseWayController extends AbstractController
{
    /**
     * @Route("/new", name="merchandise_way_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $merchandiseWay = new MerchandiseWay();
        $form = $this->createForm(MerchandiseWayType::class, $merchandiseWay, array('start_required' => false));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($merchandiseWay);
            $entityManager->flush();

            return $this->redirectToRoute('merchandise_way_index');
        }

        return $this->render('merchandise_way/new.html.twig', [
            'merchandise_way' => $merchandiseWay,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/new-from-region/{regionId}", name="merchandise_way_from_region_new", methods={"GET","POST"})
     */
    public function newFromRegion(Request $request, int $regionId, RegionRepository $regionRepository): Response
    {
        $merchandiseWay = new MerchandiseWay();
        $region = $regionRepository->find($regionId);

        $form = $this->createForm(MerchandiseWayType::class, $merchandiseWay, array(
            'start_required' => false,
            'region_name' => $region->__toString(),
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $region->addStartMerchandiseWay($merchandiseWay);

            /* TODO : manage that part later */
            $merchandiseWay->setPath(array());

            $entityManager->persist($merchandiseWay);
            $entityManager->flush();

            return $this->redirectToRoute('merchandise_way_index');
        }

        return $this->render('merchandise_way/new.html.twig', [
            'merchandise_way' => $merchandiseWay,
            'form' => $form->createView(),
            'region' => $region,
        ]);
    }

    /**
     * @Route("/{id}", name="merchandise_way_show", methods={"GET"})
     */
    public function show(MerchandiseWay $merchandiseWay): Response
    {
        return $this->render('merchandise_way/show.html.twig', [
            'merchandise_way' => $merchandiseWay,
        ]);
    }
}
