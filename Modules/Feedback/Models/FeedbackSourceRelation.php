<?php
namespace Plenty\Modules\Feedback\Models;


/**
 * The feedback source relation model.
 */
abstract class FeedbackSourceRelation 
{

	const AUTHOR_NAME_ANONYMOUS = 'Anonymous';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$feedbackId;
	
public		$feedbackRelationType;
	
public		$feedbackRelationSourceId;
	
public		$sourceRelationLabel;
	
public		$sourceRelationTypeLabel;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}