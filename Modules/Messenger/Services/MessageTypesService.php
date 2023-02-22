<?php
namespace Plenty\Modules\Messenger\Services;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Authentication\Configuration\AuthenticationConfiguration;
use Plenty\Modules\Authentication\Contracts\UserRepositoryContract;
use Plenty\Modules\Plugin\Services\PluginMonitor;
use Ramsey\Uuid\Uuid;

/**
 * Types and type validation for several types in the messenger.
 */
abstract class MessageTypesService 
{

	const LINKED_TO_SEPARATOR_SIGN = '|';

	const REFERRER_SEPARATOR_SIGN = '|';

	const TO_SEPARATOR_SIGN = '|';

	const FROM_SEPARATOR_SIGN = '|';

	const LINKED_TO_TYPE_CONTACT = 'contact';

	const LINKED_TO_TYPE_ORDER = 'order';

	const LINKED_TO_TYPE_MESSAGE = 'message';

	const LINKED_TO_TYPE_PAYMENT = 'payment';

	const LINKED_TO_TYPE_EMAIL = 'email';

	const LINKED_TO_TYPE_USER = 'user';

	const REFERRER_TYPE_SYSTEM = 'system';

	const REFERRER_TYPE_BACKEND = 'backend';

	const REFERRER_TYPE_REST = 'rest';

	const REFERRER_TYPE_PLUGIN = 'plugin';

	const REFERRER_TYPE_EMAIL = 'email';

	const TO_TYPE_USER = 'user';

	const TO_TYPE_ROLE = 'role';

	const TO_TYPE_EMAIL = 'email';

	const TO_TYPE_ALL_USER = 'allUsers';

	const FROM_TYPE_USER = 'user';

	const FROM_TYPE_CONTACT = 'contact';

	const FROM_TYPE_EMAIL = 'email';

	/**
	 * Gets the valid types for "linked to" references.
	 */
	abstract public static function getValidLinkedToTypes(
	):array;

	/**
	 * Checks whether the given link is valid or not.
	 */
	abstract public static function isValidLinkedTo(
		string $linkType, 
		 $linkValue
	):bool;

	/**
	 * Gets the valid types for "from" references.
	 */
	abstract public static function getValidFromTypes(
	):array;

	/**
	 * Checks whether the given from is valid or not.
	 */
	abstract public static function isValidFrom(
		string $fromType, 
		 $fromValue
	):bool;

	/**
	 * Gets the valid types for "referrer" references.
	 */
	abstract public static function getValidReferrerTypes(
	):array;

	/**
	 * Checks whether the given referrer reference is valid or not.
	 */
	abstract public static function isValidReferrer(
		string $referrerType, 
		 $referrerValue, 
		string $referrerName = null
	):bool;

	/**
	 * Gets the valid key types for the 'to' array.
	 */
	abstract public static function getValidToTypes(
	):array;

	/**
	 * Checks whether the given key has a valid value for to.
	 */
	abstract public static function isValidTo(
		string $toKey
	):bool;

}