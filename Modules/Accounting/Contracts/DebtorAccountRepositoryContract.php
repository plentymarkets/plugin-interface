<?php
namespace Plenty\Modules\Accounting\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use Plenty\Modules\Accounting\Models\DebtorAccount;
use Plenty\Modules\Accounting\Models\DebtorAccountConfiguration;

/**
 * The DebtorAccountRepositoryContract is the interface for the DebtorAccountRepository. This interface allows you to either list debtor accounts by locationId or by locationId and mode. The mode describes the criteria that is used to assign pending amounts to debtor accounts.
 */
interface DebtorAccountRepositoryContract 
{

	/**
	 * Get debtor account configuration of an accounting location. The ID of the accounting location must be specified.
	 */
	public function findByLocationId(
		int $locationId
	):DebtorAccountConfiguration;

	/**
	 * Lists debtor accounts by mode for an accounting location . The mode and the accounting location must be specified.
	 */
	public function listByLocationIdAndMode(
		int $locationId, 
		string $mode
	);

	/**
	 * Updates the debtor account configuration of an accounting location. The ID of the accounting location has to be specified.
	 */
	public function update(
		int $locationId, 
		array $data
	):DebtorAccountConfiguration;

}