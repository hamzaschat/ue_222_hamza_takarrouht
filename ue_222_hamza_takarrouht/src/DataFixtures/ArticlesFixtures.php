<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;
class ArticlesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $article =new Article();
        $article->setTitre("Premier Article");
        $article->setTexte("loream ipsum");
        $manager->persist($article);

        $article =new Article();
        $article->setTitre("seconde Article");
        $article->setTexte("lacus ipsum");
        $manager->persist($article);
        $manager->flush();
    }
}
