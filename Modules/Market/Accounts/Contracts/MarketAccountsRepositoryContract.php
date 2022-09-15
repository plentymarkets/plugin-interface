<?php
namespace Plenty\Modules\Market\Accounts\Contracts;


/**
 * The contract for the market accounts repository.
 */
interface MarketAccountsRepositoryContract 
{

	public function getAll(
	):array;

	public function getByReferrerId(
		 $referrerId
	):array;

}