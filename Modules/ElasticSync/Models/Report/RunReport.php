<?php
namespace Plenty\Modules\ElasticSync\Models\Report;


/**
 * The run report model.
 */
abstract class RunReport 
{

	const MAX_ITEMS_PER_PAGE = 100;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$sync_id;
	
public		$jobs_total;
	
public		$jobs_completed;
	
public		$errors;
	
public		$sync_type;
	
public		$children_identifier;
	
public		$report_filename;
	
public		$rows;
	
public		$rows_successful;
	
public		$date;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}