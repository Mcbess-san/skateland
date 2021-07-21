<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    public const USERS = 50;

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        $user = new User();
        $user->setEmail('romainsamuel18@gmail.com');
        $user->setFirstname('Romain');
        $user->setLastname('Samuel');
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'mcbess'
        ));
        $manager->persist($user);
        $manager->flush();

        $admin = new User();
        $admin->setEmail('mcbess18@gmail.com');
        $admin->setFirstname('Mcbess');
        $admin->setLastname('Samuel');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($this->passwordEncoder->encodePassword(
            $admin,
            'skate'
        ));
        $manager->persist($admin);

        for ($i = 0; $i < self::USERS; $i++) {
            $user = new User();
            $user->setEmail($faker->email());
            $user->setFirstname($faker->firstName());
            $user->setLastname($faker->lastName());
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                'toto'
            ));

            $manager->persist($user);
        }
        $manager->flush();
    }
}
