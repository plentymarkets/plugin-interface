<?php
namespace Plenty\Modules\Catalog\Models\Status;


/**
 * The catalog status model.
 */
abstract class CatalogStatus 
{

	const ITEMS_PER_PAGE = 50;

	const MAX_ITEMS_PER_PAGE = 100;

	const STATE_STARTING = 'starting';

	const STATE_QUEUEING = 'queueing';

	const STATE_PROCESSING = 'processing';

	const STATE_COMPLETE = 'complete';

	const STATE_CANCELED = 'canceled';

	const STATE_FAILED = 'failed';

	const FINAL_STATES = ['complete','canceled','failed'];

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$catalog_id;
	
public		$version_id;
	
public		$type;
	
public		$subtype;
	
public		$has_data;
	
public		$has_logs;
	
public		$initiator;
	
public		$initiator_id;
	
public		$state;
	
public		$total;
	
public		$processed;
	
public		$successful;
	
public		$createdAt;
	
public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}