<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadCategory.php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Category;

class LoadCategory implements FixtureInterface
{
	// Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
	public function load(ObjectManager $manager)
	{
		$names = array(
			'Développement Web',
			'Développement mobile',
			'Graphisme',
			'Intégration',
			'Réseau'
		);

		foreach ($names as $name) {
			$category = new Category();
			$category->setName($name);

			//on persist la catégorie
			$manager->persist($category);
		}

		//On déclenche l'enregistrement de toute les catégories
		$manager->flush();
	}
}
