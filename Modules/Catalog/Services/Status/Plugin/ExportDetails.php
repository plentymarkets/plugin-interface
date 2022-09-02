<?php
namespace Plenty\Modules\Catalog\Services\Status\Plugin;

use Exception;
use Plenty\Modules\Catalog\Models\Catalog;
use Plenty\Modules\Catalog\Services\Status\Run;

/**
 * Export details. Only use this class if you know how Catalog Export Runs work.
 */
abstract class ExportDetails 
{

	abstract public function getCatalog(
	):Catalog;

}