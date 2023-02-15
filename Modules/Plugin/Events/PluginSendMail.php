<?php
namespace Plenty\Modules\Plugin\Events;


/**
 * PluginSendMail
 */
abstract class PluginSendMail 
{

	abstract public function getTemplate(
	);

	abstract public function getContactEmail(
	);

	abstract public function getCallFunction(
	);

	abstract public function getWebstoreId(
	);

}