<?php
namespace Plenty\Modules\Order\Documents\Contracts;

use Plenty\Modules\Cloud\Storage\Models\StorageObject;

/**
 * * Provides methods to store, get and delete order document files.
 *     The files are stored on an AWS S3 storage by default. The implementation for this contract can be
 *     replaced by your own implementation.
 */
interface OrderDocumentStorageContract 
{

	/**
	 * Check if the file path exists on the storage.
	 */
	public function fileExists(
		string $path
	):bool;

	/**
	 * Store a file on the storage.
	 */
	public function put(
		string $path, 
		string $file
	);

	/**
	 * Get a file from the storage
	 */
	public function get(
		string $path
	):StorageObject;

	/**
	 * Delete a file from the storage.
	 */
	public function delete(
		string $path
	):bool;

	/**
	 * Delete the requested files from the storage.
	 */
	public function deleteMultiple(
		array $paths
	):bool;

}