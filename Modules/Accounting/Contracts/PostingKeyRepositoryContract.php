<?php
namespace Plenty\Modules\Accounting\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Accounting\Models\PostingKeyConfiguration;

/**
 * The PostingKeyRepositoryContract is the interface for the PostingKeyRepository. This interface provides the functionality to find the posting keys for an accounting location.
 */
interface PostingKeyRepositoryContract 
{

	/**
	 * Get the posting key configuration of an accounting location. The ID of the accounting location must be specified.
	 */
	public function findByLocationId(
		int $locationId
	):PostingKeyConfiguration;

	/**
	 * Updates a posting key configuration of an accounting location. The ID of the accounting location has to be specified.
	 */
	public function update(
		int $locationId, 
		array $data
	):PostingKeyConfiguration;

}