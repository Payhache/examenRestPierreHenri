<?php

namespace App\DataFixtures;

use App\Entity\Stock;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StockFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=0; $i < 20 ; $i++) { 
              $raviole = new Stock();
              $raviole->setTitle('Raviole Type n°'.$i);
              $raviole->setContent('Cette raviole nous provient de la région'.$i);
              $raviole->setPrice(5);
              $raviole->setQuantity($i+2);
              $manager->persist($raviole);  
        }
        
        $manager->flush();
    }
}
