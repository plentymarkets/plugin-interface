<?php
namespace Plenty\Modules\Plentychannel\Services\Connectors;

use phpseclib3\Net\SFTP;

/**
 * SFTP Connector
 */
abstract class SFTPConnector 
{

	const DEFAULT_PORT = 22;

	const CONNECTION_TYPE = 'sftp';

	/**
	 * Open the connection and log in
	 */
	abstract public function login(
	):bool;

	/**
	 * Creates directory
	 */
	abstract public function createDirectory(
		string $folder, 
		int $mode = 511
	):bool;

	/**
	 * Uploads content into file
	 */
	abstract public function uploadContent(
		string $filename, 
		string $content
	):bool;

	/**
	 * Gets content of file
	 */
	abstract public function getContent(
		string $filename
	);

	/**
	 * Sets list order
	 */
	abstract public function setListOrder(
		 $args
	);

	/**
	 * N-list
	 */
	abstract public function nlist(
		string $folder, 
		bool $recursive = false
	);

	/**
	 * Raw-List
	 */
	abstract public function rawlist(
		string $folder, 
		bool $recursive = false
	);

	/**
	 * Delete file
	 */
	abstract public function deleteFile(
		string $filename
	):bool;

	/**
	 * Delete entire folder. Use with caution!
	 */
	abstract public function deleteFolder(
		string $folder
	):bool;

	/**
	 * Get all SFTP errors
	 */
	abstract public function getAllErrors(
	):array;

	/**
	 * Get last SFTP error
	 */
	abstract public function getLastError(
	):string;

	/**
	 * Initializes the connector
	 */
	abstract public function __construct(
		string $host, 
		string $username, 
		string $password, 
		int $port, 
		string $logPrefix = "Connector"
	);

}