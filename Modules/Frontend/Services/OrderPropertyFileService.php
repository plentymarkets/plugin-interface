<?php
namespace Plenty\Modules\Frontend\Services;

use Plenty\Modules\Account\Contact\Models\Contact;
use Plenty\Modules\Authentication\Models\User;
use Plenty\Modules\Basket\Contracts\BasketRepositoryContract;
use Plenty\Modules\Basket\Models\Basket;
use Plenty\Modules\Cloud\Storage\Contracts\StorageProviderRepositoryContract;
use Plenty\Modules\Cloud\Storage\Exceptions\StorageException;
use Plenty\Modules\Cloud\Storage\Factories\StorageFactory;
use Plenty\Modules\Cloud\Storage\Models\StorageObject;
use Plenty\Modules\Frontend\Session\Storage\Models\Order as SessionOrder;
use Plenty\Modules\Frontend\Validators\OrderPropertyFileValidator;
use Plenty\Modules\Order\Contracts\InternalOrderRepositoryContract;
use Plenty\Modules\Order\Models\Order;

/**
 * Frontend-service for order property files
 */
abstract class OrderPropertyFileService 
{

	const STORAGE = 'orderPropertyFiles';

	const TMP_PREFIX = 'temp';

	const SALT = '%oPF__';

	const ORDER_ITEM_PROPERTY_REGEX = '^[0-9a-f]{8}\/[0-9a-f]{8}\/';

	/**
	 * Upload an order property file.
	 */
	abstract public function uploadFile(
		array $fileData
	):string;

	/**
	 * Get the URL for the specified key.
	 */
	abstract public function getFileURL(
		string $key
	):string;

	/**
	 * Get the file for a specified key.
	 */
	abstract public function getFile(
		string $key
	):StorageObject;

	/**
	 * Copy the uploaded file to the order.
	 */
	abstract public function copyBasketFileToOrder(
		string $filename, 
		string $collectDeletingFiles = false
	):string;

	/**
	 * Delete collected files on s3 temp directory
	 */
	abstract public function deleteCollectedFiles(
	);

	/**
	 * Delete the specified file.
	 */
	abstract public function deleteFile(
		string $filename
	);

}