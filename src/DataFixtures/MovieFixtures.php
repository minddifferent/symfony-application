<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('Spider Man: No Way Home');
        $movie->setRealeseYear('2021');
        $movie->setDescription('For the first time in Spider-Man\'s screen history, the true identity of this friendly hero is revealed, making his responsibilities as a superpowered person clash with his normal life, and putting everyone closest to him in the most threatened position.');
        $movie->setImagePath("https://images.pexels.com/photos/15344061/pexels-photo-15344061/free-photo-of-a-person-wearing-a-spiderman-costume.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));
        $manager->persist($movie);
        
        $movie2 = new Movie();
        $movie2->setTitle('The Maze Runner');
        $movie2->setRealeseYear('2014');
        $movie2->setDescription('The Maze Runner is a 2014 American science fiction dystopian action thriller film directed by Wes Ball, based on the 2009 novel of the same name by James Dashner.');
        $movie2->setImagePath('https://images.bisnis.com/posts/2018/01/25/730391/maze-runner.jpg');
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));
        $manager->persist($movie2);


        $manager->flush();
    }
}
