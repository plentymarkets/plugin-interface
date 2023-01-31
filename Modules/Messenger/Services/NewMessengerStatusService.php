<?php
namespace Plenty\Modules\Messenger\Services;


/**
 * New messenger status checker service
 */
abstract class NewMessengerStatusService 
{

	const ALLOWED_PIDS = [51054,40650,54545,48250,52261,53033,54173,54802,55054,56153,52469,61426,61653];

	const ALLOWED_CLOUDS = [92,94,104,105,107,108,109,110,111,112,113,114,115,116,117,119,120];

	abstract public static function isActive(
	);

}