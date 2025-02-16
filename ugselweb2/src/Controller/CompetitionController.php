<?php

// src/Controller/CompetitionController.php
namespace App\Controller;

use App\Entity\Competition;
use App\Form\CompetitionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompetitionController extends AbstractController
{
    #[Route('/competitions', name: 'competition_list')]
    public function list(EntityManagerInterface $entityManager): Response
    {
        $competitions = $entityManager->getRepository(Competition::class)->findAll();

        return $this->render('competition/list.html.twig', [
            'competitions' => $competitions,
        ]);
    }

    #[Route('/competition/new', name: 'competition_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $competition = new Competition();
        $form = $this->createForm(CompetitionType::class, $competition);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($competition);
            $entityManager->flush();

            return $this->redirectToRoute('competition_list');
        }

        return $this->render('competition/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}