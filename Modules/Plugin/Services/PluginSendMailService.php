<?php
namespace Plenty\Modules\Plugin\Services;

use Plenty\Modules\Plugin\PluginSet\Contracts\PluginSetRepositoryContract;

/**
 * The PluginSendMailService send mails in plugins
 */
abstract class PluginSendMailService 
{

	const PASSWORD_RESET = 'pw_reset';

	const FUNCTION_COLLECT_PLACEHOLDER = 'collect_placeholder';

	abstract public static function getInstance(
		 $webstoreId
	);

	abstract public function sendMail(
		string $url, 
		string $template = "", 
		string $email = "", 
		string $callFunction = "", 
		int $webstoreId = null
	):bool;

	abstract public function getStatus(
	):bool;

	abstract public function setStatus(
		bool $status
	);

	abstract public function isInitialized(
	):bool;

	abstract public function setInitialized(
		bool $initialized
	);

	abstract public function getEmailPlaceholder(
	):array;

	abstract public function addEmailPlaceholder(
		string $placeholder, 
		string $value
	);

	abstract public function setEmailPlaceholder(
		array $emailPlaceholder
	);

	abstract public function getEmailPlaceholderKey(
		string $key, 
		string $default = ""
	):string;

}