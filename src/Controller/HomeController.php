<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('api/home', name: 'app_home', methods: 'GET')]
    public function index(ManagerRegistry $managerRegistry): Response
    {
        $user = $managerRegistry->getRepository(User::class)->findAll();
        return $this->json($user);
    }
}
