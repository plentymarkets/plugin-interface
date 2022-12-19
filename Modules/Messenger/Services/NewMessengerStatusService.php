<?php
namespace Plenty\Modules\Messenger\Services;


/**
 * New messenger status checker service
 */
abstract class NewMessengerStatusService 
{

	const ALLOWED_PIDS = [51054,40650,54545];

	abstract public static function isActive(
	);

}