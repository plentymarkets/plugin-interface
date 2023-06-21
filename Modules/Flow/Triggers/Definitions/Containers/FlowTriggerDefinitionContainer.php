<?php
namespace Plenty\Modules\Flow\Triggers\Definitions\Containers;

use Plenty\Modules\Flow\Triggers\Definitions\Contracts\FlowTriggerDefinitionContainerContract;
use Plenty\Modules\Flow\Triggers\Definitions\Contracts\FlowTriggerDefinitionContract;
use Plenty\Modules\Flow\Triggers\Definitions\Exceptions\FlowTriggerDefinitionException;

/**
 * The FlowTriggerDefinitionContainer collects and returns multiple flow trigger definitions .
 */
abstract class FlowTriggerDefinitionContainer 
{

	/**
	 * Retrieves all registered trigger definitions
	 */
	abstract public function getRegisteredTriggers(
	):array;

	/**
	 * Register new flow trigger definition
	 */
	abstract public function register(
		FlowTriggerDefinitionContract $triggerDefinition
	);

	/**
	 * Retrieves a trigger definition
	 */
	abstract public function getTrigger(
		string $identifier
	):FlowTriggerDefinitionContract;

}