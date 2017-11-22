<?php
namespace LuoguLite\Library\ControllerTrait;

use Knp\Component\Pager\Pagination\AbstractPagination;
use Symfony\Component\HttpFoundation\JsonResponse;

trait APIControllerTrait {
    /**
     * @param AbstractPagination $pagination
     * @return JsonResponse
     */
    protected function generateResponseFromPagination(AbstractPagination $pagination) {
        return new JsonResponse($this->generateArrayFromPagination($pagination));
    }

    /**
     * @param AbstractPagination $pagination
     * @return array
     */
    protected function generateArrayFromPagination(AbstractPagination $pagination) {
        return [
            "count" => $pagination->getTotalItemCount(),
            "currentPage" => $pagination->getCurrentPageNumber(),
            "result" => $pagination->getItems(),
            "totalPages" => ceil($pagination->getTotalItemCount() / $pagination->getItemNumberPerPage()),
            "limitPerPage" => $pagination->getItemNumberPerPage()
        ];
    }
}