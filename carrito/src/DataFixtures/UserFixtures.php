<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i = 1 ; $i < 6; $i++){
        $user = new User();
        $user-> setNombre('User'.$i);
        $user-> setEmail('User'.$i.'@gmail.com');
        $user-> setPassword('$2y$13$IwqwbET0BPy1k5wDP3tjFehoa63gf.N6/NE03KwY/2km3uU9LZBXS'); //la contraseña es 123

        $manager-> persist($user);

        }
        $manager->flush();
    }
}
