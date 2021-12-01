<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class homeController extends AbstractController
{

    /**
     * @Route("/home", name="home")
     */

    public function home()
    {
        return $this->render("home.html.twig");
    }


    /**
     * @Route("/articles", name="articles")
     */

    public function articles()
    {

        $articles = [
            1 => [
                "title" => "Albanie",
                "content" => "L’Albanie est un pays d’Europe situé dans la partie occidentale de la péninsule des Balkans. En albanais le pays se nomme Shqipëria ce qui signifie « le pays des aigles ».",
                "image" => "https://www.atlas-monde.net/wp-content/uploads/2016/03/drapeau-albanie-150x107.jpg",
                "isPublished" => true,
                "id" => 1
            ],
            2 => [
                "title" => "Allemagne",
                "content" => "L’Allemagne est un pays d’Europe centrale appartenant à l’Union européenne. En allemand le pays se nomme Deutschland.",
                "image" => "https://www.atlas-monde.net/wp-content/uploads/2016/03/drapeau-allemand-150x90.jpg",
                "isPublished" => true,
                "id" => 2
            ],
            3 => [
                "title" => "Andorre",
                "content" => "Andorre est un pays d’Europe de l’Ouest situé dans la partie orientale de la chaîne des Pyrénées.",
                "image" => "https://www.atlas-monde.net/wp-content/uploads/2016/03/drapeau-andorre-150x105.png",
                "isPublished" => true,
                "id" => 3
            ],
            4 => [
                "title" => "Autriche",
                "content" => "L’Autriche est un pays d’Europe Centrale, membre de l’Union Européenne. En autrichien, le pays se nomme Österreich.",
                "image" => "https://www.atlas-monde.net/wp-content/uploads/2017/05/drapeau-autriche-150x100.jpg",
                "isPublished" => true,
                "id" => 4
            ],
            5 => [
                "title" => "France",
                "content" => "La France est un pays d’Europe occidentale, constitué de la France métropolitaine et de la France d’outre-mer, appartenant à l’Union européenne.",
                "image" => "https://www.atlas-monde.net/wp-content/uploads/2017/03/drapeau-francais-150x100.jpg",
                "isPublished" => true,
                "id" => 5
            ],
            6 => [
                "title" => "Belgique",
                "content" => "La Belgique est un pays d’Europe occidentale, membre de l’Union Européenne. Si en français le pays se nomme Belgique, il porte également le nom de België en néerlandais et Belgien en allemand.",
                "image" => "https://www.atlas-monde.net/wp-content/uploads/2017/11/drapeau-belgique-150x100.jpg",
                "isPublished" => true,
                "id" => 6
            ],
            7 => [
                "title" => "Espagne",
                "content" => "L’Espagne est un pays du sud-ouest de l’Europe, occupant la majeure partie de la péninsule Ibérique, membre de l’Union Européenne. En espagnol, le pays se nomme España.",
                "image" => "https://www.atlas-monde.net/wp-content/uploads/2017/11/drapeau-espagne-150x105.jpg",
                "isPublished" => true,
                "id" => 7
            ],
            8 => [
                "title" => "Suisse",
                "content" => "La Suisse est un pays d’Europe occidentale. En allemand le pays se nomme Schweiz, en italien Svizzera et en romanche Svizra",
                "image" => "https://www.atlas-monde.net/wp-content/uploads/2016/06/drapeau-suisse-150x100.jpg",
                "isPublished" => true,
                "id" => 8
            ],
        ];

        return $this->render("articles.html.twig", ['articles' => $articles]);
    }

    /**
     * @Route("/article/{id}", name="article")
     */

    public function article($id)
    {

        $articles = [
            1 => [
                "title" => "Albanie",
                "content" => "L’Albanie est un pays d’Europe situé dans la partie occidentale de la péninsule des Balkans. En albanais le pays se nomme Shqipëria ce qui signifie « le pays des aigles ».",
                "image" => "https://www.atlas-monde.net/wp-content/uploads/2016/03/drapeau-albanie.jpg",
                "isPublished" => true,
                "id" => 1
            ],
            2 => [
                "title" => "Allemagne",
                "content" => "L’Allemagne est un pays d’Europe centrale appartenant à l’Union européenne. En allemand le pays se nomme Deutschland.",
                "image" => "https://www.atlas-monde.net/wp-content/uploads/2016/03/drapeau-allemand-150x90.jpg",
                "isPublished" => true,
                "id" => 2
            ],
            3 => [
                "title" => "Andorre",
                "content" => "Andorre est un pays d’Europe de l’Ouest situé dans la partie orientale de la chaîne des Pyrénées.",
                "image" => "https://www.atlas-monde.net/wp-content/uploads/2016/03/drapeau-andorre-150x105.png",
                "isPublished" => true,
                "id" => 3
            ],
            4 => [
                "title" => "Autriche",
                "content" => "L’Autriche est un pays d’Europe Centrale, membre de l’Union Européenne. En autrichien, le pays se nomme Österreich.",
                "image" => "https://www.atlas-monde.net/wp-content/uploads/2017/05/drapeau-autriche-150x100.jpg",
                "isPublished" => true,
                "id" => 4
            ],
            5 => [
                "title" => "France",
                "content" => "La France est un pays d’Europe occidentale, constitué de la France métropolitaine et de la France d’outre-mer, appartenant à l’Union européenne.",
                "image" => "https://www.atlas-monde.net/wp-content/uploads/2017/03/drapeau-francais-150x100.jpg",
                "isPublished" => true,
                "id" => 5
            ],
            6 => [
                "title" => "Belgique",
                "content" => "La Belgique est un pays d’Europe occidentale, membre de l’Union Européenne. Si en français le pays se nomme Belgique, il porte également le nom de België en néerlandais et Belgien en allemand.",
                "image" => "https://www.atlas-monde.net/wp-content/uploads/2017/11/drapeau-belgique-150x100.jpg",
                "isPublished" => true,
                "id" => 6
            ],
            7 => [
                "title" => "Espagne",
                "content" => "L’Espagne est un pays du sud-ouest de l’Europe, occupant la majeure partie de la péninsule Ibérique, membre de l’Union Européenne. En espagnol, le pays se nomme España.",
                "image" => "https://www.atlas-monde.net/wp-content/uploads/2017/11/drapeau-espagne-150x105.jpg",
                "isPublished" => true,
                "id" => 7
            ],
            8 => [
                "title" => "Suisse",
                "content" => "La Suisse est un pays d’Europe occidentale. En allemand le pays se nomme Schweiz, en italien Svizzera et en romanche Svizra",
                "image" => "https://www.atlas-monde.net/wp-content/uploads/2016/06/drapeau-suisse-150x100.jpg",
                "isPublished" => true,
                "id" => 8
            ],
        ];

        return $this->render("article.html.twig", ['article' => $articles[$id]]);
    }

    /**
     * @Route("/contact", name="contact")
     */

    public function contact()
    {
        return $this->render("contact.html.twig");
    }
}