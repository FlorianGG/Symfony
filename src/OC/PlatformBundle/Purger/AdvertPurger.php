<?php
// src/OC/PlatformBundle/Email/ApplicationMailer.php

namespace OC\PlatformBundle\Purger;

use OC\PlatformBundle\Entity\Advert;
use Doctrine\ORM\EntityManagerInterface;

class AdvertPurger
{
	/**
	 * @var EntityManagerInterface
	 */
	private $em;

	public function __construct(EntityManagerInterface $em)
	{
		$this->em = $em;
	}


	public function purge($days) //days est un nombre de jour
	{
		//Tout d'abord on définit la date butoire en fonction du paramètre $days
		$date = (new \Datetime())->sub(new \DateInterval('P' . $days . 'D'));

		//Avant de récupérer le repository des adverts, on doit également récupérer le répository d'AdvertSkill
		
		$skillsRepository = $this->em->getRepository('OCPlatformBundle:AdvertSkill');
		$advertRepository = $this->em->getRepository('OCPlatformBundle:Advert');

		//on récupère les adverts en fonction du paramètre $date
		$adverts = $advertRepository->getAdvertsWithDeadline($date);

		//on crée une pouble qui va remove tous les skills dont l'advert a été selectionné ici
		foreach ($adverts as $advert) {
			//on récupère d'abord pour chaque advert tous les skills
			$skills = $skillsRepository->findBy(array('advert' => $advert));

			//on boucle sur le résultat pour les supprimer 1 à 1
			foreach ($skills as $skill) {
				$this->em->remove($skill);
			}

			//maintenant que les skills sont supprimés on peut supprimer les adverts
			$this->em->remove($advert);
		}

		//on flush les removes
		$this->em->flush();

	}
}
