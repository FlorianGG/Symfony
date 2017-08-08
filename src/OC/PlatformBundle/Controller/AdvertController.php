<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Form\AdvertEditType;
use OC\PlatformBundle\Form\AdvertType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
  public function purgeAction($days, Request $request)
  {
    if ($days < 1) {
      throw new NotFoundHttpException('Veuillez indiquer un nombre de jour correct');
    }

    //on récupère le service
    $purger = $this->container->get('oc_platform.purger.advert');

    //on exécute la fonction purge
    $purger->purge($days);

    $request->getSession()->getFlashBag()->add('notice', 'Mission accomplie : Les annonces sans candidatures datant de plus de ' . $days . ' jours ont bien été purgées !');

    return $this->redirectToRoute('oc_platform_home');

  }
  public function indexAction($page)
  {
    if ($page < 1) {
      throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
    }

    $nbPerPage = $this->container->getParameter('nbPerPage');

    // On récupère notre objet Paginator
    $listAdverts = $this->getDoctrine()
      ->getManager()
      ->getRepository('OCPlatformBundle:Advert')
      ->getAdverts($page, $nbPerPage)
    ;

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

  /**
   * @ParamConverter("advert", options={"mapping": {"advert_id": "id"}})
   */
  public function viewAction(Advert $advert)
  {
    $em = $this->getDoctrine()->getManager();

    // // Pour récupérer une seule annonce, on utilise la méthode find($id)
    // $advert = $em->getRepository('OCPlatformBundle:Advert')->find($adver);

    // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
    // ou null si l'id $id n'existe pas, d'où ce if :
    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$advert->getId()." n'existe pas.");
    }

    // Récupération de la liste des candidatures de l'annonce
    $listApplications = $em
      ->getRepository('OCPlatformBundle:Application')
      ->findBy(array('advert' => $advert))
    ;

    // Récupération des AdvertSkill de l'annonce
    $listAdvertSkills = $em
      ->getRepository('OCPlatformBundle:AdvertSkill')
      ->findBy(array('advert' => $advert))
    ;
    return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
      'advert'           => $advert,
      'listApplications' => $listApplications,
      'listAdvertSkills' => $listAdvertSkills,
    ));
  }

  /**
   * @Security("has_role('ROLE_USER')")
   */
  public function addAction(Request $request)
  {
    $advert = new Advert();
    //on créele formBuilder grâce à un service de formFactory
    $form = $this->get('form.factory')->create(AdvertType::class, $advert);

    // Si la requête est en POST
    if ($request->isMethod('POST')) {
      // On fait le lien requet <=> formulaire
      // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur

      // On vérifie que les valeurs entrées sont correctes
      // (Nous verrons la validation des objets en détail dans le prochain chapitre)
      if ($form->handleRequest($request)->isValid()) {

        // On enregistre notre objet $advert dans la base de données, par exemple
        $em = $this->getDoctrine()->getManager();
        $em->persist($advert);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

        //on redirige vers la page de l'annonce nouvellement crée
        return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
      }     
    }

    // À ce stade, le formulaire n'est pas valide car :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau
    return $this->render('OCPlatformBundle:Advert:add.html.twig', array('form' => $form->createView()));
  }

  public function editAction($id, Request $request)
  {
    $advert = $this->getDoctrine()->getManager()->getRepository('OCPlatformBundle:Advert')->find($id);

    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }

    //on créele formBuilder grâce à un service de formFactory
    $form = $this->get('form.factory')->create(AdvertEditType::class, $advert);

    // Si la requête est en POST
    if ($request->isMethod('POST')) {
      // On fait le lien requet <=> formulaire
      // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
      $form->handleRequest($request);

      // On vérifie que les valeurs entrées sont correctes
      // (Nous verrons la validation des objets en détail dans le prochain chapitre)
      
      if ($form->isValid()) {
        // On enregistre notre objet $advert dans la base de données, par exemple
        $em = $this->getDoctrine()->getManager();
        $em->persist($advert);
        $em->flush();
        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

        //on redirige vers la page de l'annonce nouvellement crée
        return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
      }
    }
    // À ce stade, le formulaire n'est pas valide car :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau
    return $this->render('OCPlatformBundle:Advert:edit.html.twig', array('advert' => $advert , 'form' => $form->createView()));     
  }

  public function deleteAction($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }

    // On crée un formulaire vide, qui ne contiendra que le champ CSRF
    // Cela permet de protéger la suppression d'annonce contre cette faille
    $form = $this->get('form.factory')->create();


    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $skillsRepository = $em->getRepository('OCPlatformBundle:AdvertSkill');
      $skills = $skillsRepository->findBy(array('advert' => $advert));
      //on boucle sur le résultat pour les supprimer 1 à 1
      foreach ($skills as $skill) {
        $em->remove($skill);
      }
      $applicationRepository = $em->getRepository('OCPlatformBundle:Application');
      $applications = $applicationRepository->findBy(array('advert' => $advert));
      foreach ($applications as $application) {
         $em->remove($application);
      }
      $em->remove($advert);
      $em->flush();

      $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");

      return $this->redirectToRoute('oc_platform_home');
    }
    
    return $this->render('OCPlatformBundle:Advert:delete.html.twig', array(
      'advert' => $advert,
      'form'   => $form->createView(),
    ));
  }

  public function menuAction($limit)
  {
    $em = $this->getDoctrine()->getManager();

    $listAdverts = $em->getRepository('OCPlatformBundle:Advert')->findBy(
      array(),                 // Pas de critère
      array('date' => 'desc'), // On trie par date décroissante
      $limit,                  // On sélectionne $limit annonces
      0                        // À partir du premier
    );

    return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
      'listAdverts' => $listAdverts
    ));
  }

  public function translationAction($name)
  {
    return $this->render("OCPlatformBundle:Advert:translation.html.twig", array('name' => $name));
  }
}
