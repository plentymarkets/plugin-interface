<?php
namespace Plenty\Modules\Flow\Triggers\Definitions\Contracts;

use Plenty\Modules\Flow\DataModels\ConfigForm\FormField;
use Plenty\Modules\Flow\Triggers\Definitions\Models\FlowUiTrigger;

/**
 * Flow trigger definition
 */
interface FlowTriggerDefinitionContract 
{

	public function getTriggerType(
	):string;

	public function getTriggerObject(
	):string;

	public function getTriggerIdentifier(
	):string;

	public function getTriggerName(
	):string;

	public function getTriggerDescription(
	):string;

	public function getUIConfigField(
	):array;

}