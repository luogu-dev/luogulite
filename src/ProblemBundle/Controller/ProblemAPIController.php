<?php

namespace LuoguLite\ProblemBundle\Controller;

use Knp\Component\Pager\Pagination\AbstractPagination;
use LuoguLite\Library\ControllerTrait\APIControllerTrait;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProblemAPIController extends AbstractProblemController
{
    use APIControllerTrait;

    /**
     * @Route("/list", name="problemapi_list")
     */
    public function listAction(Request $request) {
        $keyword = $request->query->get('keyword');
        $page = $request->query->getInt('page', 1);

        $pagination = $this->problemManager->getByKeyword($keyword, $page);

        return $this->generateResponseFromPagination($pagination);
    }
}