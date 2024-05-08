<?php
namespace Plenty\Modules\Flow\Triggers\Definitions\Contracts;


/**
 * Flow trigger plenty definition
 */
interface FlowTriggerPlentyDefinitionContract 
{

	public function getAreaName(
	):string;

	public function getAreaGroupName(
	):string;

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

	public function getTriggerPath(
	):string;

	public function getUIConfigField(
	):array;

}