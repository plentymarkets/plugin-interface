<?php
namespace Plenty\Modules\Messenger\Services;


/**
 * New messenger status checker service
 */
abstract class NewMessengerStatusService 
{

	const ALLOWED_PIDS = [];

	abstract public static function isActive(
	);

}