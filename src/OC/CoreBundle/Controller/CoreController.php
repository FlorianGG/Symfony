<?php  

//src/OC/CoreBundle/Controller/CoreController.php

namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Synforny\Component\HttpFoundation\RedirectResponse;

class CoreController extends Controller
{
	public function indexAction()
	{
		//on returne simplement la vue de la page d'accueil
		//les 3 derniers articles sont chargées par l'héritage
	    return $this->render('OCCoreBundle:Core:index.html.twig');
	}

	public function contactAction(Request $request)//On demande l'objet request pour pouvoir ajouter une flash session
	{
		//on initialise la session
		$session = $request->getSession();

		//on ajoute un message flash qui sera envoyé par le controller contact
		$session->getFlashBag()->add('info', "La page de contact n’est pas encore disponible");

		//on fait une redirection sur la homepage
		return $this->redirectToRoute('oc_core_homepage');
	}
}
