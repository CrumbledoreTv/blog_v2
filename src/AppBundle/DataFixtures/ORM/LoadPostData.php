<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Post;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadPostData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $post = new Post();
        $post->setTitre("Les arbres");
        $post->setContenu("Les arbres sont des hommes qui nous procurent de l'air, Leurs feuillages forment de grands bouquets de fleurs, leurs branches ressemblent a de grands bras qui sont pret a accueillir les enfants de la forets. Les écureuils et les oiseaux s'y abritent volontiers. Ils possedent un immense tronc qui nous procure du bois pour fabriquer des meubles et nous chauffer l'hiver. Quand il y a de l'orage, l'arbre fait des ombres sombres qui font souvent peur. La seve coule quand l'arbre prend des coups et sur l'énorme tronc reste une immense morsure qui blesse l'arbre...");
        $post->setImageName("forêt.jpg");
        $post->setDraft('Mettre en ligne');

        $manager->persist($post);

        $post = new Post();
        $post->setTitre("La mer");
        $post->setContenu("La mer est un chemin sans fin, elle possède une force indomptable, un pouvoir de tempête, une douceur d'amoureuse quand elle devient écume sur le sable.");
        $post->setImageName("Ocean.jpeg");
        $post->setDraft('Mettre en ligne');

        $manager->persist($post);

        $post = new Post();
        $post->setTitre("La montagne");
        $post->setContenu("La montagne nous enseigne la modestie. Elle nous ramène à notre juste dimension face à l'immensité de la nature. La conquérir ne signifie pas la dominer. L'homme est un passager. Un éphémère. Elle restera toujours là, immense, impassible.");
        $post->setImageName("montagne.jpeg");
        $post->setDraft('Mettre en ligne');

        $manager->persist($post);

        $post = new Post();
        $post->setTitre("Le lac");
        $post->setContenu("Quel calme reposant apporte la vue du lac. Entouré de roseaux qui doucement balance. Tant de roseaux jaseurs qui soudain font silence. Ce calme et ce silence propice aux rêveries.");
        $post->setImageName("lac.jpg");
        $post->setDraft('Mettre en ligne');

        $manager->persist($post);

        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }
}
