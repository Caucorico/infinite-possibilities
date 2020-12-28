<?php

namespace App\Controller;

use App\Entity\Game;
use App\Entity\User;
use App\Form\GameType;
use App\Repository\GameRepository;
use App\Repository\RegionRepository;
use App\Repository\UserRepository;
use App\Service\GameAccess;
use App\Service\GameGenerator;
use App\Service\PlayerInformations;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * @Route("/game")
 */
class GameController extends AbstractController
{
    /**
     * @var Security
     */
    private $security;

    public function __construct(Security $security) {
        $this->security = $security;
    }

    /**
     * @Route("/", name="game_index", methods={"GET"})
     */
    public function index(GameRepository $gameRepository): Response
    {
        return $this->render('game/index.html.twig', [
            'games' => $gameRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="game_new", methods={"GET","POST"})
     */
    public function new(Request $request, GameGenerator $gameGenerator): Response
    {
        $game = new Game();
        $form = $this->createForm(GameType::class, $game);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $gameGenerator->generateMap($game);

            $entityManager->persist($game);
            $entityManager->flush();

            return $this->redirectToRoute('game_index');
        }

        return $this->render('game/new.html.twig', [
            'game' => $game,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="game_show", methods={"GET"})
     */
    public function show(Request $request, Game $game, UserRepository $userRepository, PlayerInformations $playerInformations): Response
    {
        $production = array();
        /** @var User $user */
        $user = $this->security->getUser();

        if ( $this->security->isGranted('ROLE_USER') ) {

            $player = $userRepository->getPlayerFromGame($user, $game);
            $production = $playerInformations->getAllProductions($player);
        }

        return $this->render('game/show.html.twig', [
            'game' => $game,
            'user' => $user,
            'production' => $production,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="game_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Game $game): Response
    {
        $form = $this->createForm(GameType::class, $game);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('game_index');
        }

        return $this->render('game/edit.html.twig', [
            'game' => $game,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="game_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Game $game): Response
    {
        if ($this->isCsrfTokenValid('delete'.$game->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($game);
            $entityManager->flush();
        }

        return $this->redirectToRoute('game_index');
    }

    /**
     * @Route("/{id}/region/{x}/{y}", name="show_game_region", methods={"GET"})
     */
    public function showRegion(Game $game, int $x, int $y, RegionRepository $regionRepository): Response
    {
        $region = $regionRepository->findByGameAndCoord($game, $x, $y);

        return $this->redirectToRoute('region_show', array('id' => $region->getId()));
    }

    /**
     * @Route("/{id}/join", name="game_join")
     */
    public function joinGame(Request $request, Game $game, GameAccess $gameAccess, UserRepository $userRepository): Response
    {
        $user = $this->security->getUser();
        if ( $gameAccess->canJoinGame($user, $game) ) {
            $gameAccess->joinGame($user, $game);

            return new JsonResponse(array(
                'success' => true
            ));
        } else {
            return new JsonResponse(array(
                'success' => false
            ));
        }
    }
}
