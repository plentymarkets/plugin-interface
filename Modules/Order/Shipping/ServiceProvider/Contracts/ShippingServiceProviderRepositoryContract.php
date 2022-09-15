<?php
namespace Plenty\Modules\Order\Shipping\ServiceProvider\Contracts;

use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Order\Shipping\ServiceProvider\Models\ShippingServiceProvider;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ShippingServiceProviderRepositoryContract is the interface for the shipping service provider repository. This interface allows to list shipping service providers.
 */
interface ShippingServiceProviderRepositoryContract 
{

	/**
	 * Lists shipping service providers.
	 */
	public function all(
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $filters = [], 
		array $with = []
	):array;

	/**
	 * Gets a shipping service provider. The ID of the shipping service provider must be specified.
	 */
	public function find(
		int $shippingServiceProviderId
	):ShippingServiceProvider;

	/**
	 * Gets a shipping service provider. The name of the shipping service provider must be specified.
	 */
	public function findByName(
		string $shippingServiceProviderName
	):ShippingServiceProvider;

	/**
	 * Creates a shipping service provider or updates it if already existing
	 */
	public function saveShippingServiceProvider(
		string $pluginName, 
		string $shippingServiceProviderName, 
		string $icon = null
	):ShippingServiceProvider;

	/**
	 * Resets all Criteria filters by creating a new instance of the builder object.
	 */
	public function clearCriteria(
	);

	/**
	 * Applies criteria classes to the current repository.
	 */
	public function applyCriteriaFromFilters(
	);

}