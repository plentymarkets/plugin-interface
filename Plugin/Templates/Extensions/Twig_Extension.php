<?php
namespace Plenty\Plugin\Templates\Extensions;

use Raider\Extension\AbstractExtension;
use Raider\Extension\GlobalsInterface;

/**
 * Twig extension
 */
abstract class Twig_Extension 
{

	abstract public function getName(
	):string;

	abstract public function getGlobals(
	);

}