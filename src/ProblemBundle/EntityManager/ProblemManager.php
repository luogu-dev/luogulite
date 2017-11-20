<?php
namespace LuoguLite\ProblemBundle\EntityManager;

use Doctrine\ORM\EntityManagerInterface;
use LuoguLite\ProblemBundle\Entity\Problem;

class ProblemManager {

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
        $this->repository = $em->getRepository(Problem::class);
    }

    public function get(int $id): ?Problem {
        return $this->repository->find($id);
    }
}