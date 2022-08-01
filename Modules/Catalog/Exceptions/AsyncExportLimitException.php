<?php
namespace Plenty\Modules\Catalog\Exceptions;

use Exception;
use Plenty\Modules\Catalog\Contracts\Status\InternalCatalogStatusRepositoryContract;
use Plenty\Modules\Catalog\Helpers\Config\ConfigHelper;
use Plenty\Modules\Catalog\Models\Catalog;
use Plenty\Modules\Catalog\Models\Status\CatalogStatus;
use Plenty\Modules\Catalog\Services\Status\Run;

/**
 * Exception for async export limits.
 */
abstract class AsyncExportLimitException 
{

	const ASYNC_COOLDOWN = 120;

	abstract public static function checkAsyncLimit(
		 $catalog
	);

	abstract public function getMessage(
	);

	abstract public function getCode(
	);

	abstract public function getFile(
	);

	abstract public function getLine(
	);

	abstract public function getTrace(
	);

	abstract public function getPrevious(
	);

	abstract public function getTraceAsString(
	);

}