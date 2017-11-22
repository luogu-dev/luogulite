<?php

namespace LuoguLite\ProblemBundle\Controller;

use LuoguLite\ProblemBundle\Entity\Problem;
use LuoguLite\ProblemBundle\Form\Type\ProblemType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProblemAdminController extends AbstractProblemController
{
    /**
     * @Route("/edit/{id}", name="problemadmin_edit")
     */
    public function editAction(int $id, Request $request)
    {
        $problem = $this->problemManager->get($id);
        if(!$problem)
            return new NotFoundHttpException;

        $form = $this->createForm(ProblemType::class, $problem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $problem = $form->getData();

            $this->getDoctrine()->getManager()->persist($problem);
            $this->getDoctrine()->getManager()->flush();
        }

        return $this->render('ProblemBundle:ProblemAdmin:edit.html.twig', [
            'form' => $form->createView(),
            'problem' => $problem
        ]);
    }

    /**
     * @Route("/new", name="problemadmin_new")
     */
    public function newAction(Request $request) {
        $problem = new Problem;

        $form = $this->createForm(ProblemType::class, $problem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $problem = $form->getData();

            $this->getDoctrine()->getManager()->persist($problem);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('problemadmin_edit', ["pid" => $problem->getID()]);
        }

        return $this->render('ProblemBundle:ProblemAdmin:edit.html.twig', [
            'form' => $form->createView(),
            'problem' => $problem
        ]);
    }
}
