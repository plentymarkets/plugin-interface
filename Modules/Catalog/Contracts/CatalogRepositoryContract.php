<?php
namespace Plenty\Modules\Catalog\Contracts;

use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Catalog\Models\Catalog;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The CatalogRepositoryContract is the interface for the catalogue repository. It allows you to create, read, update and delete catalogues.
 */
interface CatalogRepositoryContract 
{

	/**
	 * Create a catalog
	 */
	public function create(
		array $data
	):Catalog;

	/**
	 * Update a catalog
	 */
	public function update(
		string $id, 
		array $data
	):Catalog;

	/**
	 * Get the latest version of a catalog
	 */
	public function get(
		string $id
	):Catalog;

	/**
	 * Get a specific version of a catalog
	 */
	public function getByVersion(
		string $id, 
		string $version = ""
	):Catalog;

	/**
	 * Restore a past version of a catalog to become latest
	 */
	public function restoreVersion(
		string $id, 
		string $version = ""
	):Catalog;

	/**
	 * Lists catalog versions
	 */
	public function listVersions(
		string $id
	):Collection;

	/**
	 * Gets the archive
	 */
	public function getArchive(
	):array;

	/**
	 * Restores an archived catalog
	 */
	public function restoreArchived(
		string $id
	):Catalog;

	/**
	 * Delete a catalog
	 */
	public function delete(
		string $id
	):bool;

	/**
	 * Copy a catalog or multiple catalogs
	 */
	public function copy(
		array $data
	):array;

	/**
	 * Copy a single catalog
	 */
	public function copyCatalog(
		string $id, 
		array $modifiedAttributes
	):Catalog;

	/**
	 * Copy a catalog format
	 */
	public function copyCatalogFormat(
		string $catalogId, 
		array $data
	):array;

	/**
	 * Get list of all catalogs
	 */
	public function all(
		int $page = 1, 
		int $perPage = 25
	):PaginatedResult;

	/**
	 * Activate a catalog
	 */
	public function activate(
		string $id, 
		bool $active
	):array;

	/**
	 * Enable a catalog's devcache
	 */
	public function enableDevcache(
		string $id
	):Catalog;

	/**
	 * Disable a catalog's devcache
	 */
	public function disableDevcache(
		string $id
	):Catalog;

	/**
	 * Gets the preview for an export with a specific catalog
	 */
	public function getCatalogPreview(
		string $id
	):array;

	/**
	 * Migrates catalogs from Dynamo DB to S3
	 */
	public function migrate(
	):bool;

	/**
	 * Generates an alphanumeric token
	 */
	public function generateToken(
	):string;

	/**
	 * Builds the catalog's public download url
	 */
	public function buildDownloadPublicURL(
		string $id, 
		array $data
	):string;

	/**
	 * Builds the catalog's private download url
	 */
	public function buildDownloadPrivateURL(
		string $id, 
		array $data
	):string;

	/**
	 * Exports the catalog. The catalog ID is required.
	 */
	public function exportCatalog(
		string $id
	):array;

	/**
	 * Imports the catalog. The catalog ID is required.
	 */
	public function importCatalog(
		string $content
	):Catalog;

	/**
	 * Get schedule days
	 */
	public function getScheduleDays(
	):array;

	/**
	 * Sets the filter array.
	 */
	public function setFilters(
		array $filters = []
	);

	/**
	 * Returns the filter array.
	 */
	public function getFilters(
	);

	/**
	 * Returns a collection of parsed filters as Condition object
	 */
	public function getConditions(
	);

	/**
	 * Clears the filter array.
	 */
	public function clearFilters(
	);

}