<?php
namespace Plenty\Modules\EventProcedures\Services;

use Plenty\Legacy\Services\LegacyEventService;
use Plenty\Log\Traits\Loggable;
use Plenty\Modules\EventProcedures\Exceptions\EventProcedureEntryNotFoundException;
use Plenty\Modules\EventProcedures\Exceptions\EventProceduresRegisterException;
use Plenty\Modules\EventProcedures\Services\Entries\FilterEntry;
use Plenty\Modules\EventProcedures\Services\Entries\ProcedureEntry;
use Plenty\Modules\EventProcedures\Services\Entries\TriggerEntry;
use Plenty\Modules\Flow\Services\EventTriggerService;
use Plenty\Modules\Flow\Services\FilterRegistrationService;
use Plenty\Modules\Flow\Services\StepActionRegistrationService;
use Plenty\Modules\Flow\Services\TriggerRegistrationService;
use Plenty\Modules\Flow\Triggers\Objects\FlowTriggerObjectOrder;

/**
 * The EventProcedureService class offers the possibility to register a procedure class and method that can be called by plentymarkets event procedures.
 */
abstract class EventProceduresService 
{

	/**
	 * Register a procedure class
	 */
	abstract public function registerProcedure(
		string $moduleName, 
		string $eventType, 
		array $procedureNames, 
		string $procedureClass, 
		string $procedureGroup = \Plenty\Modules\EventProcedures\Services\Entries\ProcedureEntry::PROCEDURE_GROUP_ORDER
	):bool;

	/**
	 * Register a filter class
	 */
	abstract public function registerFilter(
		string $moduleName, 
		string $eventType, 
		array $filterNames, 
		string $filterClass
	):bool;

	/**
	 * Register a trigger
	 */
	abstract public function registerTrigger(
		string $moduleName, 
		string $eventType, 
		string $triggerIdentifier, 
		array $triggerNames
	):bool;

	/**
	 * Fire a trigger
	 */
	abstract public function fireTrigger(
		int $orderId, 
		string $moduleName, 
		string $triggerIdentifier
	);

}