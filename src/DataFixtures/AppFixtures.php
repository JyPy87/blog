<?php

namespace App\DataFixtures;

use Nelmio\Alice\Loader\NativeLoader;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $loader = new NativeLoader();

       //take fixtures
        $entities = $loader->loadFile(__DIR__.'/fixtures.yml')->getObjects();
        
        foreach ($entities as $entity) {
            $manager->persist($entity);
        };
        $manager->flush();
    }
}
