<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Producto;

class ProductoFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i = 1 ; $i < 11; $i++){
        $producto = new producto();
        $producto-> setNombre("Producto$i");
        $producto-> setDescripcion("Lorem....");
        $producto-> setPrecio(rand(10, 100));
        $producto-> setImagen('images/producto' . $i . '.jpg');

        $manager-> persist($producto);

        }
        $manager->flush();
    }
}
