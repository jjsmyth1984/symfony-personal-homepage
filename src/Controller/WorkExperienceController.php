<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\WorkExperience;
use App\Form\WorkExperienceType;
use App\Repository\WorkExperienceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/work-experience')]
#[IsGranted('ROLE_ADMIN')]
final class WorkExperienceController extends AbstractController
{
    #[Route(name: 'app_work_experience_index', methods: ['GET'])]
    public function index(WorkExperienceRepository $workExperienceRepository): Response
    {
        return $this->render('work_experience/index.html.twig', [
            'work_experiences' => $workExperienceRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_work_experience_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $workExperience = new WorkExperience();
        $form = $this->createForm(WorkExperienceType::class, $workExperience);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($workExperience);
            $entityManager->flush();

            return $this->redirectToRoute('app_work_experience_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('work_experience/new.html.twig', [
            'work_experience' => $workExperience,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_work_experience_show', methods: ['GET'])]
    public function show(WorkExperience $workExperience): Response
    {
        return $this->render('work_experience/show.html.twig', [
            'work_experience' => $workExperience,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_work_experience_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        WorkExperience $workExperience,
        EntityManagerInterface $entityManager,
    ): Response {
        $form = $this->createForm(WorkExperienceType::class, $workExperience);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_work_experience_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('work_experience/edit.html.twig', [
            'work_experience' => $workExperience,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_work_experience_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        WorkExperience $workExperience,
        EntityManagerInterface $entityManager,
    ): Response {
        if ($this->isCsrfTokenValid('delete' . $workExperience->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($workExperience);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_work_experience_index', [], Response::HTTP_SEE_OTHER);
    }
}
