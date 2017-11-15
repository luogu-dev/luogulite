<?php
namespace LuoguLite\UserBundle\EntityManager;

use Doctrine\ORM\EntityManagerInterface;
use LuoguLite\UserBundle\Entity\User;

class UserManager {

    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $repository;

    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
        $this->repository = $em->getRepository(User::class);
    }

    public function get(int $id): ?User {
        return $this->repository->find($id);
    }

    public function getByUsername(string $username): ?User {
        return $this->repository->findOneByUsername($username);
    }
}