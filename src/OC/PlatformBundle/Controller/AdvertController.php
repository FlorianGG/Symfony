<?php
// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Image;
use OC\PlatformBundle\Entity\Application;
use OC\PlatformBundle\Entity\AdvertSkill;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
  public function indexAction($page)
    {
      if ($page < 1) {
        throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
      }

      // Ici je fixe le nombre d'annonces par page à 3
      // Mais bien sûr il faudrait utiliser un paramètre, et y accéder via $this->container->getParameter('nb_per_page')
      $nbPerPage = $this->container->getParameter('nb_per_page');

      // On récupère l'entityManager
      $em = $this->getDoctrine()->getManager();

      // On recupère toutes les annonces
      $listAdverts = $em->getRepository('OCPlatformBundle:Advert')->getAdverts($page, $nbPerPage);

      // On calcule le nombre total de pages grâce au count($listAdverts) qui retourne le nombre total d'annonces
      $nbPages = ceil(count($listAdverts) / $nbPerPage);

      // Si la page n'existe pas, on retourne une 404
      if ($page > $nbPages) {
        throw $this->createNotFoundException("La page ".$page." n'existe pas.");
      }

      // On donne toutes les informations nécessaires à la vue
      return $this->render('OCPlatformBundle:Advert:index.html.twig', array(
        'listAdverts' => $listAdverts,
        'nbPages'     => $nbPages,
        'page'        => $page,
      ));
    }

  public function viewAction($id)
  {
    //on recupère le repository
    $repository = $this->getDoctrine()->getManager()->getRepository('OCPlatformBundle:Advert');

    //on récupère l'entité avec l'id en paramètre
    $advert = $repository->find($id);

    if (null === $advert) {
      throw new \Exception("L'annonce d'id ".$id." n'existe pas.");
      
    }

    //On récupère la liste des candidature de cette annonce
    $listApplication = $this->getDoctrine()->getManager()->getRepository('OCPlatformBundle:Application')->findBy(array('advert'=>$advert));

    //On récupère la liste des compétences requises pour cette annonce
    $listSkills = $this->getDoctrine()->getManager()->getRepository('OCPlatformBundle:AdvertSkill')->findBy(array('advert'=>$advert));


    return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
      'advert' => $advert,
      'listApplication' => $listApplication,
      'listAdvertSkills' => $listSkills
    ));
  }


  public function addAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

       // On ne sait toujours pas gérer le formulaire, patience cela vient dans la prochaine partie !

    if ($request->isMethod('POST')) {
     $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

     return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
    }

    return $this->render('OCPlatformBundle:Advert:add.html.twig');
  }


  public function editAction($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }

    // Ici encore, il faudra mettre la gestion du formulaire

    if ($request->isMethod('POST')) {
      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

      return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
    }

    return $this->render('OCPlatformBundle:Advert:edit.html.twig', array(
      'advert' => $advert
    ));
  }


  public function deleteAction($id)
  {
    $em = $this->getDoctrine()->getManager();

    $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }

    // On boucle sur les catégories de l'annonce pour les supprimer
    foreach ($advert->getCategories() as $category) {
      $advert->removeCategory($category);
    }

    $em->flush();
    
    return $this->render('OCPlatformBundle:Advert:delete.html.twig');
  }


  public function menuAction($limit)
  {
    // On récupère l'entityManager
    $em = $this->getDoctrine()->getManager();

    // On recupère toutes les annonces
    $listAdverts = $em->getRepository('OCPlatformBundle:Advert')->findBy(
      array(), // Pas de critètre
      array('date' => 'DESC'), //On trie par ordre décroissant
      $limit, // On sélectionne $limit anonnces
      0 // On commence à 0
      );

    return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
      // Tout l'intérêt est ici : le contrôleur passe les variables nécessaires au template !
      'listAdverts' => $listAdverts
    ));
  }

  public function listAction()
  {
    $listAdverts = $this->getDoctrine()
    ->getManager()
    ->getRepository('OCPlatformBundle:Advert')
    ->getAdvertWithApplications();

    foreach ($listAdverts as $advert) {
      // Ne déclenche pas de requête : les candidatures sont déjà chargées !
      // Vous pourriez faire une boucle dessus pour les afficher toutes
      $advert->getApplications();
    }
  }
}
