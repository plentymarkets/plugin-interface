<?php
namespace Plenty\Modules\Document\Builder\Variables\Contracts;

use Plenty\Modules\Document\Builder\Variables\Exceptions\VariableGroupRegistrationException;
use Plenty\Modules\Document\Builder\Variables\Exceptions\VariableRegistrationException;
use Plenty\Modules\Document\Builder\Variables\Models\Variable;
use Plenty\Modules\Document\Builder\Variables\Models\VariableGroup;
use Plenty\Modules\Document\Builder\Variables\Models\VariableGroupContainer;

/**
 * A container service for DocumentBuilder variables and variable groups registration
 */
interface DocumentBuilderVariablesContainerContract 
{

	/**
	 * Register a variable group.
	 */
	public function registerVariableGroup(
		VariableGroup $group
	);

	public function registerVariable(
		Variable $variable
	);

}