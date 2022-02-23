<?php
namespace Plenty\Modules\Catalog\Contracts;

use Exception;
use Plenty\Modules\Catalog\Services\CatalogExportService;
use Plenty\Modules\Catalog\Services\Collections\CatalogLazyCollection;

/**
 * The CatalogExportRepositoryContract is the interface for the catalogue export repository. It allows to receive an instance of CatalogExportServiceContract to export a specific catalogue.
 */
interface CatalogExportRepositoryContract 
{

	/**
	 * Returns an instance of CatalogExportServiceContract to export a specific catalogue.
	 */
	public function exportById(
		string $id
	):CatalogExportServiceContract;

	/**
	 * Initiates the queue which exports a specific catalogue.
	 */
	public function initiateQueue(
		string $id
	);

	/**
	 * Provides the response with file attachment to download in browser
	 */
	public function download(
		string $id, 
		string $hash = "", 
		string $converterKey = "csv", 
		bool $public = false, 
		string $token = ""
	):array;

	/**
	 * Initiates the dev queue. Stores the file on S3 and can be fetched using getDevCachedResult()
	 */
	public function initiateDevQueue(
		string $id
	):bool;

	/**
	 * Gets the latest prebuilt, cached result
	 */
	public function getDevCachedResult(
		string $id, 
		int $maximumAgeInSeconds = 14400
	):CatalogLazyCollection;

	/**
	 * Export by id and version
	 */
	public function exportByIdAndVersion(
		string $id, 
		string $version
	):CatalogExportServiceContract;

}