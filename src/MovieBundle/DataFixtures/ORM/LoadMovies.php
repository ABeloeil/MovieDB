<?php

namespace MovieBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use MovieBundle\Entity\Movie;

class LoadMovies extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $om)
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            $movie = new Movie();
            $movie->setName($faker->sentence(3,true));

            $om->persist($movie);
        }
        $om->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}
