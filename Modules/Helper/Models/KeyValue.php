<?php
namespace Plenty\Modules\Helper\Models;


/**
 * key value data
 */
abstract class KeyValue 
{

	abstract public function get(
		string $key, 
		 $default = null
	);

}