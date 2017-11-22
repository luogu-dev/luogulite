<?php

namespace LuoguLite\ProblemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LuoguLite\ProblemBundle\EntityManager\ProblemManager;

abstract class AbstractProblemController extends Controller
{
    /**
     * @var ProblemManager
     */
    protected $problemManager;

    public function __construct(ProblemManager $problemManager)
    {
        $this->problemManager = $problemManager;
    }
}