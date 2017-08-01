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
      // Notre liste d'annonce en dur
      $listAdverts = array(
        array(
          'title'   => 'Recherche développpeur Symfony',
          'id'      => 1,
          'author'  => 'Alexandre',
          'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
          'date'    => new \Datetime()),
          'email'   => 'florian.prof@gmail.com',
        array(
          'title'   => 'Mission de webmaster',
          'id'      => 2,
          'author'  => 'Hugo',
          'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
          'date'    => new \Datetime()),
          'email'   => 'florian.prof@gmail.com',
        array(
          'title'   => 'Offre de stage webdesigner',
          'id'      => 3,
          'author'  => 'Mathieu',
          'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
          'date'    => new \Datetime()),
          'email'   => 'florian.prof@gmail.com'
      );
      return $this->render('OCPlatformBundle:Advert:index.html.twig', array(
        'listAdverts' => $listAdverts,
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
    // Création de l'entité
    $advert = new Advert();
    $advert->setTitle('Recherche développpeur Symfony');
    $advert->setAuthor('Alexandre');
    $advert->setContent('Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…');
    $advert->setEmail('florian.prof@gmail.com');
    // On peut ne pas définir ni la date ni la publication,
    // car ces attributs sont définis automatiquement dans le constructeur
    
    //Création de l'entité
    $image = new Image();
    $image->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
    $image->setAlt('Job de rêve');

    //on lie l'image à l'annonce
    $advert->setImage($image);

    // Création d'une première candidature
    $application1 = new Application();
    $application1->setAuthor('Marine');
    $application1->setContent("J'ai toutes les qualités requises.");

    // Création d'une deuxième candidature par exemple
    $application2 = new Application();
    $application2->setAuthor('Pierre');
    $application2->setContent("Je suis très motivé.");

    // On lie les candidatures à l'annonce
    $application1->setAdvert($advert);
    $application2->setAdvert($advert);

    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

    //on recupère toutes les compétences possibles
    $listSkills = $em->getRepository('OCPlatformBundle:Skill')->findAll();

    //pour chaque compétence
    foreach ($listSkills as $skill) {
        //on crée une relation entre 1 annonce et 1 compétence
        $advertSkill = new AdvertSkill();
        //on la lie à une annonce
        $advertSkill->setAdvert($advert);
        //on lie la compétence à l'annonce (elle change dans chaque boucle de foreach)
        $advertSkill->setSkill($skill);
        // Arbitrairement, on dit que chaque compétence est requise au niveau 'Expert'
        $advertSkill->setLevel('Expert');

        $em->persist($advertSkill);
    }

    // Étape 1 : On « persiste » l'entité
    $em->persist($advert);
    //On persist également les applications car il n'y a pas de cascade
    $em->persist($application1);
    $em->persist($application2);

    // Étape 2 : On « flush » tout ce qui a été persisté avant
    $em->flush();

    // Si la requête est en POST, c'est que le visiteur a soumis le formulaire
    if ($request->isMethod('POST')) {
      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
      // Puis on redirige vers la page de visualisation de cettte annonce
      return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
    }
    // Si on n'est pas en POST, alors on affiche le formulaire
    return $this->render('OCPlatformBundle:Advert:add.html.twig');
  }


  public function editAction($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    // On récupère l'annonce $id
    $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }

    // La méthode findAll retourne toutes les catégories de la base de données
    $listCategories = $em->getRepository('OCPlatformBundle:Category')->findAll();

    // On boucle sur les catégories pour les lier à l'annonce
    foreach ($listCategories as $category) {
      $advert->addCategory($category);
    }

    $em->flush();

    // if ($request->isMethod('POST')) {
    //   $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');
    //   return $this->redirectToRoute('oc_platform_view', array('id' => 5));
    // }
    // $advert = array(
    //   'title'   => 'Recherche développpeur Symfony',
    //   'id'      => $id,
    //   'author'  => 'Alexandre',
    //   'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
    //   'date'    => new \Datetime()
    // );
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

    foreach ($advert->getCategories() as $category) {
     $advert->removeCategory($category);
    }

    $em->flush();
    
    return $this->render('OCPlatformBundle:Advert:delete.html.twig');
  }


  public function menuAction($limit)
  {
    // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
    $listAdverts = array(
      array('id' => 2, 'title' => 'Recherche développeur Symfony'),
      array('id' => 5, 'title' => 'Mission de webmaster'),
      array('id' => 9, 'title' => 'Offre de stage webdesigner')
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
