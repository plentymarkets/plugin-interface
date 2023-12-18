<?php
namespace Plenty\Modules\Messenger\Conversations\Marketplaces\Ebay\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Messenger\Conversations\Marketplaces\Ebay\Models\EbayAccount;

/**
 * The EbayAccountsRepositoryContract is the interface for Merketplaces Ebay EbayAccount
 */
interface EbayAccountsRepositoryContract 
{

	/**
	 * Get all ebay accounts
	 */
	public function listEbayAccounts(
	):Collection;

	/**
	 * Get all ebay active accounts
	 */
	public function getActiveEbayAccounts(
	):Collection;

	/**
	 * Create a new Ebay account
	 */
	public function createEbayAccount(
		array $data
	):EbayAccount;

	/**
	 * Update an existing array of Ebay account settings
	 */
	public function updateEbayAccounts(
		array $data
	):Collection;

	/**
	 * Delete an Ebay account (the account will be flagged with deleted=1)
The action will not delete the account
	 */
	public function deleteEbayAccount(
		int $accountSettingsId
	):bool;

	/**
	 * Get Ebay account details
	 */
	public function getEbayAccount(
		int $accountSettingsId
	):EbayAccount;

}