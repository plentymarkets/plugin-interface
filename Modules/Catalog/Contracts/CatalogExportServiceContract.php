<?php
namespace Plenty\Modules\Catalog\Contracts;

use Carbon\Carbon;
use Plenty\Modules\Catalog\Models\CatalogExportResult;
use Plenty\Modules\Catalog\Services\Queue\Models\Bundle;

/**
 * The CatalogExportServiceContract is the interface for the catalogue export service. It allows you to configure and start the export of a catalogue.
 */
interface CatalogExportServiceContract 
{

	/**
	 * Specifies fields that should be exported in addition to the mappings configured in the catalogue.
	 */
	public function setAdditionalFields(
		array $additionalFields
	);

	public function addMutator(
		callable $mutator
	);

	/**
	 * Defines the settings that are used in the mappings and for filtering.
	 */
	public function setSettings(
		array $settings
	);

	public function setNumberOfDocumentsPerShard(
		int $numberOfDocumentsPerShard
	);

	/**
	 * Defines the amount of items that will be returned in each iteration of the export. In specific formats such as variation, it can have more results e.g. if items per page is set to 500, but variations 500 and 501 belong to the same item. In this case, variation 501 will also be returned.
	 */
	public function setItemsPerPage(
		int $itemsPerPage
	);

	/**
	 * Defines the page number that will be returned
	 */
	public function setPage(
		int $page
	);

	/**
	 * Limits the results of items to only those that were updated after the given timestamp.
	 */
	public function setUpdatedSince(
		Carbon $timestamp
	);

	/**
	 * Returns an instance of CatalogExportResult, which can be iterated to receive the different pages of the exported data.
	 */
	public function getResult(
	):CatalogExportResult;

	/**
	 * ASYNC - Returns an instance of CatalogExportResult, which can be iterated to receive the different pages of the exported data.
	 */
	public function buildQueuedAsyncExport(
	);

	/**
	 * Builds a single page of the export and uploads it to S3
	 */
	public function getAsyncResultPage(
		int $page
	):array;

	public function getPreview(
	);

	/**
	 * Defines a list of keys that will be considered in the export. That means that only keys that exist in the catalog
and are defined in this list will be contained in the export result. This will overwrite the forbidden keys that
were defined by the forbidExportKeys method.
	 */
	public function allowExportKeys(
		string $keys
	);

	/**
	 * Defines a list of keys that will not be considered in the export. That means that only keys that exist in the
catalog and are not defined in this list will be contained in the export result. This will overwrite the allowed
keys that were defined by the allowExportKeys method.
	 */
	public function forbidExportKeys(
		string $keys
	);

}