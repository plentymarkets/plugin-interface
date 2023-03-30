<?php
namespace Plenty\Modules\BI\RawData\Contracts;

use Plenty\Modules\Authorization\Exception\AuthorizationException;
use Plenty\Modules\BI\RawData\Models\RawDataConfigs;
use Plenty\Modules\BI\RawData\Models\RawDataSearchResult;

/**
 * This interface allows you to get a list of generated raw data files
 */
interface RawDataRepositoryContract 
{

	/**
	 * Get list of raw data. Valid filter combinations: (dataName), (dataName & processStatus), (createdAtTimestamp)
	 */
	public function searchRawData(
		string $dataName, 
		int $createdAtTimestamp, 
		string $processStatus, 
		int $itemsPerPage = 20, 
		string $sortOrder = "asc", 
		int $page = 1
	):RawDataSearchResult;

	/**
	 * Get a raw data file from the storage, the storage path of the file must be specified.
	 */
	public function getRawDataFile(
		string $path
	);

	public function deleteRawData(
		string $dataName, 
		array $primaryIds
	);

	/**
	 * Get list of all raw data creators
	 */
	public function getRawDataCreatorModels(
	):array;

	/**
	 * Returns list of all saved configurations
	 */
	public function getRawDataConfigs(
	):RawDataConfigs;

	/**
	 * Resets all saved raw data configurations with given data
	 */
	public function updateRawDataConfigs(
		array $data
	):RawDataConfigs;

}