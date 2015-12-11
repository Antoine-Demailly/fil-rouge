<?php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Post;

class LoadPostFixture implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    for ($i = 0; $i < 100; $i++) {
      $post = new Post();
      $post->setTitle(sprintf('Titre du post n°%d', $i));
      $post->setBody(sprintf('Corps du post n°%d', $i));
      $post->setPublished($i%2);
      $manager->persist($post);
    }

    // To finish
  }
}
