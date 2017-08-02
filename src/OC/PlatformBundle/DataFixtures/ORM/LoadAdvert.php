<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadCategory.php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Skill;
use OC\PlatformBundle\Entity\Image;
use OC\PlatformBundle\Entity\Application;
use OC\PlatformBundle\Entity\AdvertSkill;

class LoadAdvert implements FixtureInterface
{

  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    $jour = 30;
    //On gère les compétences ici car je les utilise dans ce fichier, il faut
    // Liste des noms de compétences à ajouter
    $names = array('PHP', 'Symfony', 'C++', 'Java', 'Photoshop', 'Blender', 'Bloc-note', 'Laravel', 'Zend', 'Javascript', 'Back-End', 'Front-End', 'Web-App', 'NODE JS', 'REACT JS');

    foreach ($names as $name) {
      // On crée la compétence
      $newSkill = new Skill();
      $newSkill->setName($name);

      // On la persiste
      $manager->persist($newSkill);
      $manager->flush();
    }

    // Liste d'adverts
    $adverts = array(
      array(
        'title'   => 'Recherche développpeur Symfony',
        'author'  => 'Alexandre',
        'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
        'applications' => array(
          array(
            'author' => 'Martine',
            'content' => 'Je suis ultra motivée !'
          ),
          array(
            'author' => 'Jean',
            'content' => 'Je suis la personne idéale pour ce poste !'
          ),
          array(
            'author' => 'Raymond',
            'content' => 'J\'ai toutes les compétences requises pour ce poste !'
          )),
        'skills' => array(
          array(
            'name' => 'Symfony',
            'level' => 'Expert'
            ),
          array(
            'name' => 'Back-End',
            'level' => 'Expert'
            ))

      ),
      array(
        'title'   => 'Mission de webmaster',
        'author'  => 'Hugo',
        'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
        'applications' => array(
          array(
            'author' => 'Bob',
            'content' => 'Je suis ultra motivé !'
          )),
        'skills' => array(
          array(
            'name' => 'Front-End',
            'level' => 'Débutant'
            ))
      ),
      array(
        'title'   => 'Offre de stage webdesigner',
        'author'  => 'Mathieu',
        'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
        'skills' => array(
          array(
            'name' => 'Photoshop',
            'level' => 'Débutant'
            ),
          array(
            'name' => 'Front-End',
            'level' => 'Débutant'
            ))
      ),
      array(
        'title'   => 'Recherche développpeur Laravel',
        'author'  => 'Florian',
        'content' => 'Nous recherchons un développeur Laravel débutant sur Quimper. Blabla…',
        'applications' => array(
          array(
            'author' => 'Mathieu',
            'content' => 'J\'ai toutes les qualités requises !'
          ),
          array(
            'author' => 'Sam',
            'content' => 'Je suis la personne idéale, j\'ai beaucoup d\'expérience !'
          ),
          array(
            'author' => 'Solene',
            'content' => 'J\'ai toutes les compétences requises pour ce poste !'
          ),
          array(
            'author' => 'Thomas',
            'content' => 'J\'ai plus de 10 ans d\'expérience sur ce framework !'
          )),
        'skills' => array(
          array(
            'name' => 'Laravel',
            'level' => 'Expert'
            ),
          array(
            'name' => 'Back-End',
            'level' => 'Expert'
            ))
      ),
      array(
        'title'   => 'Mission de webmaster sur Marseille',
        'author'  => 'Solene',
        'content' => 'Nous recherchons un webmaster sur Marseille, capable de maintenir notre site internet. Blabla…',
        'applications' => array(
          array(
            'author' => 'Paola',
            'content' => 'Je suis très jolie !'
          ),
          array(
            'author' => 'Kévin',
            'content' => 'Ne cherchez plus, vous avez le mec le plus exeptionnel du monde devant vous !'
          ),
          array(
            'author' => 'Arthur',
            'content' => 'Un logement est possible ?'
          )),
        'skills' => array(
          array(
            'name' => 'Front-End',
            'level' => 'Expert'
            ))
      ),
      array(
        'title'   => 'Offre de stage créateur web app',
        'author'  => 'Marcel',
        'content' => 'Nous proposons un stage pour réaliser une web app. Blabla…',
        'skills' => array(
          array(
            'name' => 'Web-app',
            'level' => 'Confirmé'
            ),
          array(
            'name' => 'Back-End',
            'level' => 'Confirmé'
            ),
          array(
            'name' => 'Front-End',
            'level' => 'Confirmé'
            ))
      ),
      array(
        'title'   => 'Recherche développpeur Symfony',
        'author'  => 'Arthur',
        'content' => 'Nous recherchons un développeur Symfony débutant sur Kaaemlott. Blabla…',
        'applications' => array(
          array(
            'author' => 'Pauline',
            'content' => 'J\'ai participé à la création de Symfony'
          ),
          array(
            'author' => 'Mickael',
            'content' => 'Je suis dans la place, oubliez tous les autres'
          ),
          array(
            'author' => 'Kamel',
            'content' => 'J\'ai 3 ans d\'expérience chez Mac Donald'
          )),
        'skills' => array(
          array(
            'name' => 'Symfony',
            'level' => 'Confirmé'
            ),
          array(
            'name' => 'Back-End',
            'level' => 'Expert'
            ),
          array(
            'name' => 'Front-End',
            'level' => 'Expert'
            ))
      ),
      array(
        'title'   => 'Mission de webmaster à Lille',
        'author'  => 'Christine',
        'content' => 'Nous recherchons un webmaster sur Lille capable de maintenir notre site internet. Blabla…',
        'applications' => array(
          array(
            'author' => 'Lee',
            'content' => 'Je suis disponible et motivé'
          ),
          array(
            'author' => 'Cécile',
            'content' => 'Je suis la personne idéale pour ce poste !'
          ),
          array(
            'author' => 'Henri',
            'content' => 'Les tickets restaurants sont offerts ?'
          )),
        'skills' => array(
          array(
            'name' => 'Back-End',
            'level' => 'Débutant'
            ),
          array(
            'name' => 'Front-End',
            'level' => 'Confirmé'
            ))
      ),
      array(
        'title'   => 'Offre de stage développeur Back-End',
        'author'  => 'Mohamed',
        'content' => 'Nous proposons un poste développeur Back-End. Blabla…',
        'skills' => array(
          array(
            'name' => 'Symfony',
            'level' => 'Débutant'
            ),
          array(
            'name' => 'Laravel',
            'level' => 'Débutant'
            ),
          array(
            'name' => 'Back-End',
            'level' => 'Débutant'
            ))
        ),

      array(
        'title'   => 'Recherche développpeur Zend',
        'author'  => 'Julien',
        'content' => 'Nous recherchons un développeur Zend débutant sur Quimper. Blabla…',
        'applications' => array(
          array(
            'author' => 'Céline',
            'content' => 'Je suis disponible dés maintenant !'
          ),
          array(
            'author' => 'Loïc',
            'content' => 'À combien est le salaire ?'
          ),
          array(
            'author' => 'Adrien',
            'content' => 'Je suis un pro sur Zend !'
          )),
        'skills' => array(
          array(
            'name' => 'Zend',
            'level' => 'Expert'
            ),
          array(
            'name' => 'Back-End',
            'level' => 'Expert'
            ))
      ),
      array(
        'title'   => 'Mission de webmaster sur Strasbourg',
        'author'  => 'XianLu',
        'content' => 'Nous recherchons un webmaster sur Strasbourg, capable de maintenir notre site internet. Blabla…',
        'skills' => array(
          array(
            'name' => 'Back-End',
            'level' => 'Confirmé'
            ),
          array(
            'name' => 'Front-End',
            'level' => 'Confirmé'
            ))
      ),
      array(
        'title'   => 'Offre développeur Javascript, NODE JS, REACT JS',
        'author'  => 'Jean-Sebastien',
        'content' => 'Nous recherchons un développeur Javascript, NODE JS, REACT JS. Blabla…',
        'applications' => array(
          array(
            'author' => 'Denis',
            'content' => 'J\'ai suivi les tuto de Anthony Welc, je pèse !!!'
          ),
          array(
            'author' => 'Kithy',
            'content' => 'Hello, je suis spécialisée Javascript depuis plus de 5 ans !'
          ),
          array(
            'author' => 'Fred',
            'content' => 'Je suis très intéressé'
          )
        ),
        'skills' => array(
          array(
            'name' => 'Javascript',
            'level' => 'Expert'
            ),
          array(
            'name' => 'NODE JS',
            'level' => 'Confirmé'
            ),
          array(
            'name' => 'REACT JS',
            'level' => 'Confirmé'
            ))
      )
    );

    foreach ($adverts as $newAdvert) {
      $jour -= 1;
      $date = (new \Datetime())->sub(new \DateInterval('P' . $jour . 'D'));
      // On crée la catégorie
      $advert = new Advert();
      $image = new Image();
      $image->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
      $image->setAlt('Job de rêve');
      $advert->setImage($image);
      $advert->setTitle($newAdvert['title']);
      $advert->setAuthor($newAdvert['author']);
      $advert->setContent($newAdvert['content']);
      $advert->setDate($date);
      $advert->setEmail($newAdvert['author'] . '@gmail.com');

      if (!empty($newAdvert['applications'])) {
        foreach ($newAdvert['applications'] as $newApplication) {
          $application = new Application();
          $application->setAuthor($newApplication['author']);
          $application->setContent($newApplication['content']);
          $application->setAdvert($advert);
          // On la persiste
          $manager->persist($application);
        }
      }

      if(!empty($newAdvert['skills'])) {
        foreach ($newAdvert['skills'] as $newAdvertSkill) {
          $advertSkill = new AdvertSkill();
          $skillName = $newAdvertSkill['name'];
          $skill = $manager->getRepository('OCPlatformBundle:Skill')->findOneBy(array('name' => $skillName));
          $advertSkill->setLevel($newAdvertSkill['level']);
          $advertSkill->setSkill($skill);
          $advertSkill->setAdvert($advert);

          $manager->persist($advertSkill);
        }
      }
      // On la persiste
      $manager->persist($advert);
    }

    // On déclenche l'enregistrement de toutes les adverts
    $manager->flush();
  }
}
