<?php
namespace Plenty\Modules\Market\Ebay\Api\Services;

use Ebay\DigitalSignature\Signature;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Plenty\Legacy\Repositories\Market\Ebay\AccountPolicy\AccountPolicyHelper;
use Plenty\Log\Factories\LoggerFactory;
use Plenty\Log\Traits\Loggable;
use Plenty\Modules\Market\Credentials\Models\Credentials;
use Plenty\Modules\Market\Ebay\Api\Exceptions\InvalidEndPointException;
use Plenty\Modules\Market\Ebay\Api\Handlers\HttpHandler;
use Plenty\Modules\Market\Ebay\Api\Helpers\Helper;
use Plenty\Modules\Market\Ebay\Api\Helpers\SignatureHelper;
use Plenty\Modules\Market\Ebay\Api\Resolvers\ConfigurationResolver;
use Plenty\Modules\Market\Ebay\Api\Resolvers\UriResolver;
use Plenty\Modules\Market\Ebay\Api\Types\BaseType;
use Plenty\Modules\Market\Ebay\Auth\Helpers\AuthHelper;
use Plenty\Modules\Market\Ebay\Auth\Services\AuthService;
use Psr\Http\Message\ResponseInterface;

/**
 * The service for making eBay REST calls.
 */
abstract class BaseRestService 
{

	const HDR_REQUEST_LANGUAGE = 'Content-Language';

	const HDR_RESPONSE_LANGUAGE = 'Accept-Language';

	const HDR_AUTHORIZATION = 'Authorization';

	public function __construct(
		array $config
	)
	{
		//proxy method
	}

	/**
	 * Returns definitions for each configuration option that is supported.
	 */
	public static function getConfigDefinitions(
	):array
	{
		return null;
	}

	/**
	 * Method to get the service's configuration.
	 */
	public function getConfig(
		string $option = null, 
		 $default = null
	)
	{
		return null;
	}

	/**
	 * Set a value
	 */
	public function setConfig(
		string $option, 
		 $value
	):self
	{
		$this->config[$option] = $value;

        return $this;
	}

	/**
	 * Build API request and send.
	 */
	protected function callOperation(
		string $name, 
		BaseType $request = null
	):BaseType
	{
		return null;
	}

	/**
	 * Derived classes must implement this method that will build the needed eBay http headers.
	 */
	abstract protected function getEbayHeaders(
	):array;

}