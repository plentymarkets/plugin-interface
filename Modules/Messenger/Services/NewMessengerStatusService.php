<?php
namespace Plenty\Modules\Messenger\Services;


/**
 * New messenger status checker service
 */
abstract class NewMessengerStatusService 
{

	abstract public static function isActive(
	);

}