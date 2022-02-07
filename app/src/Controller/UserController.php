<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;

class UserController extends AbstractController
{
    public function getUsers(PersistenceManagerRegistry $doctrine)
    {
        $users = $doctrine
            ->getRepository(User::class)
            ->findAll();
 
        $data = [];
 
        foreach ($users as $user) {
           $data[] = [
               'id' => $user->getId(),
               'name' => $user->getName(),
               'email' => $user->getEmail(),
               'phone' => $user->getPhoneNumber(),
           ];
        }
 
        
        return $this->json(['message' => 'Users fetched Successfully', 'data' => $data]);
    }
}
