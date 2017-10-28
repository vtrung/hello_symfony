<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
    /**
     * @Route("/genus")
     */
     public function homeAction()
     {
         // replace this example code with whatever you need
         return new Response("Under The SEA!!");
     }

    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        //$templating = $this->container->get('templating');
//        $html = $templating->render('genus/show.html.twig', [
//            'name' => $genusName
//        ]);
//
//        // replace this example code with whatever you need
//        return new Response($html);

        $notes = [
            'Octopus asked me a riddle, outsmarted me',
            'I counted 8 legs... as they wrapped around me',
            'Inked!'
        ];

        return $this->render('genus/show.html.twig', [
            'name' => $genusName,
            'notes' => $notes
        ]);
    }


    // API Routes
    /**
     * @Route("/genus/{genusName}/notes", name="genus_show_notes")
     * @Method("GET")
     */
    public function getNotesAction($genusName)
    {
        $notes = [
            ['id' => 1, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Octopus asked me a riddle, outsmarted me', 'date' => 'Dec. 10, 2015'],
            ['id' => 2, 'username' => 'AquaWeaver', 'avatarUri' => '/images/ryan.jpeg', 'note' => 'I counted 8 legs... as they wrapped around me', 'date' => 'Dec. 1, 2015'],
            ['id' => 3, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Inked!', 'date' => 'Aug. 20, 2015'],
        ];

        $data = [
            'notes' => $notes
        ];

        return new Response(json_encode($data));
        //return new Response("{test: {name: 'John Smith'}}");
        // in twig, can use path generator when name is defined in @Route <a href="{{ path('genus_show_notes', {'genusName': name}) }}">Json Notes</a>
    }
}