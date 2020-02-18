<?php


namespace App\Controller;
use App\Entity\Eleve;
use App\Form\Type\ChoixType;
use App\Form\Type\DetailsSouhaitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Flex\Response;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index ()
    {
      die();
    }

    /**
     * @Route("/choix")
     */
    public function choix()
    {
        // J'aurais récupérer avec un hydrateur et faire un validate du form
        // J'aurais setter avec une requete et hydrater mon form
        $form = $this->createForm(ChoixType::class);
        return $this->render('choix.html.twig',[
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/specialite)
     */
    public function specialite()
    {
        // J'aurais fait un récupération en ajax puis une insertion en base avec l'objet spécialité éleve puis récupérer le
        // résultat de la requete ajax sur lequel j'aurais mis a jours le form
        // j'aurais setter les valeur avec le résultat d'une query findAll
        $form = $this->createForm(DetailsSouhaitType::class);
        return $this->render('specialite.html.twig',[
            'form' => $form->createView(),
        ]);
    }


}