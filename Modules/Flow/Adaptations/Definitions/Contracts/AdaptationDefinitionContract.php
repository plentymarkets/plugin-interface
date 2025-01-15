<?php
namespace Plenty\Modules\Flow\Adaptations\Definitions\Contracts;

use Illuminate\Translation\Translator;
use Plenty\Modules\Flow\Adaptations\Definitions\Exceptions\AdaptationDefinitionException;
use Plenty\Modules\Flow\DataModels\ConfigForm\FormField;
use Plenty\Modules\Flow\Models\Input;
use Plenty\Modules\Flow\Models\Output;

/**
 * Flow Adaptation
 */
abstract class AdaptationDefinitionContract 
{

	abstract public function getIdentifier(
	):string;

	abstract public function getFrom(
	):string;

	abstract public function getTo(
	):string;

	abstract public function performTask(
		array $inputs, 
		string $replaceOption
	):array;

}