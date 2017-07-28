<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadSkill.php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Skill;

class LoadSkill implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		//Liste des noms de compétences à ajouter
		$names = array('PHP', 'Symfony', 'C++', 'Java', 'Photoshop', 'Blender', 'Bloc-Note');

		foreach ($names as $name) {
			//on crée la compétence
			$skill = new Skill();
			$skill->setName($name);

			//on la persiste
			$manager->persist($skill);
		}

		//on déclencle l'enregistrement de toutes les skills
		$manager->flush();
	}
}
