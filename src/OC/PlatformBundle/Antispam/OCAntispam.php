<?php 

// src/OC/PlatformBundle/Antispam/OCAntispam.php

namespace OC\PlatformBundle\Antispam;

class OCAntispam
{	
	private $mailer;
	private $locale;
	private $minLenght;

	public function __construct(\Swift_Mailer $mailer, $locale, $minLenght)
	{
		$this->mailer = $mailer;
		$this->locale = $locale;
		$this->minLenght = (int) $minLenght;
	}

	/**
	 * Vérifie si le text est un span ou non
	 * 
	 * @param string $test
	 * @return bool
	 */
	public function isSpam($text)
	{
		return strlen($text) < $this->minLenght;
	}
}
