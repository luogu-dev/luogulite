<?php
namespace LuoguLite\ProblemBundle\EntityManager;

use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\Pagination\AbstractPagination;
use Knp\Component\Pager\Paginator;
use Knp\Component\Pager\PaginatorInterface;
use LuoguLite\ProblemBundle\Entity\Problem;

class ProblemManager {

    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @var PaginatorInterface
     */
    private $paginator;

    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $repository;

    public function __construct(EntityManagerInterface $em, PaginatorInterface $paginator) {
        $this->em = $em;
        $this->paginator = $paginator;
        $this->repository = $em->getRepository(Problem::class);
    }

    public function get(int $id): ?Problem {
        return $this->repository->find($id);
    }

    public function getByKeyword(?string $keyword = null, int $page = 1, int $limit = 10): AbstractPagination {
        $query = $this->repository->createQueryBuilder('p')->where('p.title LIKE :keyword')->orderBy('p.id', 'ASC')
                      ->setParameter('keyword', "%{$keyword}%");

        /** @var AbstractPagination $pagination */
        $pagination = $this->paginator->paginate($query, $page, $limit);

        return $pagination;
    }
}