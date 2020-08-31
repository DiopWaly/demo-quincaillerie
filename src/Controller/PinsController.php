<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Marque;
use App\Entity\Categorie;
use App\Entity\Modele;
use App\Repository\ModeleRepository;

class PinsController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em){
        $this->em = $em;
    }

    /**
     * @Route("/", name="pins")
     */
    public function index(ModeleRepository $repo)
    {
        // $modele = new Modele;
        // // $marque = new Marque;
        // // $categorie = new Categorie;
        // // $marque->setLibelle("KIA");
        // // $categorie->setLibelle("Coupé");
        // $modele->setLibelle("diop");
        // $modele->setIdMarque(2);
        // $modele->setIdCategorie(2);
        // // $em = $this->getDoctrine()->getManager();
        // // $em->persist($marque);
        // $this->em->persist($modele);
        // $this->em->flush();

        // $repo = $this->em->getRepository(modele::class);
        
        // dd($repo->findAll());

        return $this->render('pins/index.html.twig', [
            'controller_name' => 'PinsController','modele'=>$repo->findAll()
        ]);
    }
    // methods=("GET","POST")
    /**
     * @Route("/toto")
     */
    public function toto(){

        return $this->render('pins/toto.html.twig');

    }
}
