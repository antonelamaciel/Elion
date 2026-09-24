<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UserController extends AbstractController
{
    #[Route('/', name: 'app_catalog', methods: ['GET'])]
    public function index(): Response
    {
        // Editá esta lista para actualizar los equipos y su disponibilidad.
        $phones = [
            ['name' => 'iPhone 15 Pro Max', 'storage' => '256 GB', 'color' => 'Titanio natural', 'available' => true],
            ['name' => 'iPhone 15 Pro', 'storage' => '128 GB', 'color' => 'Titanio azul', 'available' => true],
            ['name' => 'iPhone 15', 'storage' => '128 GB', 'color' => 'Rosa', 'available' => true],
            ['name' => 'iPhone 14 Pro Max', 'storage' => '128 GB', 'color' => 'Negro espacial', 'available' => false],
            ['name' => 'iPhone 14', 'storage' => '128 GB', 'color' => 'Azul', 'available' => true],
            ['name' => 'iPhone 13', 'storage' => '128 GB', 'color' => 'Medianoche', 'available' => false],
        ];

        return $this->render('user/index.html.twig', [
            'phones' => $phones,
        ]);
    }
}
