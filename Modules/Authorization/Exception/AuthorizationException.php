<?php
namespace Plenty\Modules\Authorization\Exception;

use Illuminate\Support\Collection;
use JsonSerializable;

/**
 * Class AuthorizationException
 */
abstract class AuthorizationException extends AuthorizationException 

{

	/**
	 * name is missing
	 */
	const NAME_IS_MISSING = 1;

	const ID_IS_MISSING = 2;

	const NO_USER_IDS_GIVEN = 3;

	const ROLE_ID_FROM_SOURCE_IS_MISSING = 4;

	const ROLE_ID_FROM_TARGET_IS_MISSING = 5;

	const ROLE_NAME_FROM_TRAGET_IS_MISSING = 6;

	const ROLE_ID_NOT_EXIST = 7;

	const ROLE_COULD_NOT_BE_DELETED = 8;

	const ROLE_DOESNT_EXIST = 9;

	const WRONG_VISIBILITIES_FORMAT = 10;

	const WRONG_PERMISSIONS_FORMAT = 11;

	abstract public function __construct(
		string $message = "", 
		int $code = 0, 
		\Exception $previous = null
	);

	abstract public function missingPermissions(
	):Collection;

	abstract public function addMissingPermission(
		string $permissionKey
	);

	abstract public function jsonSerialize(
	);

}