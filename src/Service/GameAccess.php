<?php


namespace App\Service;


use App\Entity\Game;
use App\Entity\Player;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class GameAccess
{
    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $entityManager;

    public function __construct(LoggerInterface $logger, EntityManagerInterface $entityManager)
    {
        $this->logger = $logger;
        $this->entityManager = $entityManager;
    }

    public function canJoinGame(?User $user, Game $game): bool
    {
        if ( $user === null || !in_array('ROLE_USER', $user->getRoles()) ) {
            return false;
        }

        if ( !empty(array_uintersect($user->getPlayers()->toArray(), $game->getPlayers()->toArray(), fn($a, $b) => $a->getId() === $b->getId() )) ) {
            return false;
        }

        return true;
    }

    public function joinGame(User $user, Game $game) {
        $player = new Player();
        $player->setName($user->getUsername());
        $user->addPlayer($player);
        $game->addPlayer($player);
        $this->entityManager->persist($player);
        $this->entityManager->persist($user);
        $this->entityManager->persist($game);
        $this->entityManager->flush();
    }
}