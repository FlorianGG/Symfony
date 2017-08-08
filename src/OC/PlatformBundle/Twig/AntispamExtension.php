<?php
// src/OC/PlatformBundle/Twig/AntispamExtension.php

namespace OC\PlatformBundle\Twig;

use OC\PlatformBundle\Antispam\OCAntispam;

class AntispamExtension extends \Twig_Extension
{
	/**
	 * @var $ocAntispam
	 */
	private $ocAntispam;

	public function __construct(OCAntispam $antispam)
	{
		$this->ocAntispam = $antispam;
	}

	public function checkIfArgumentIsSpam($text)
	{
		return $this->ocAntispam->isSpam($text);
	}

	// Twig va exécuter cette méthode pour savoir quelle(s) fonction(s) ajoute notre service
	public function getFunction()
	{
		return array(
			new \Twig_Simplefunction('checkIfSpam', array($this, 'checkIfArgumentIsSpam')),
			);
	}

	// La méthode getName() identifie votre extension Twig, elle est obligatoire
	public function getNam()
	{
		return 'OCAntispam';
	}
}
