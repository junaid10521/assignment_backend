<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create("fr_FR");
        // create 20 users! Bam!
        for ($i = 0; $i < 20; $i++) {
            $user = new User();
            $user->setName($faker->name());
            $user->setEmail($faker->email());
            $user->setPhoneNumber($faker->phoneNumber());
            $manager->persist($user);
        }

        $manager->flush();
    }
}
