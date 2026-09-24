<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;

class UserService
{

    public function __construct(
    private UserRepository $repository, 
    private EntityManagerInterface $em )
    {
    }

    public function getUsers(): array
    {
        return $this->repository->findAll();
    }

    public function servicioCrearUsuario(array $data){

        $user = new User();
        $user->setName($data['name']);
        $user->setSurname($data['surname']);
        $user->setEmail($data['email']);

        $this->em->flush();

        return $user;
        
    }
}