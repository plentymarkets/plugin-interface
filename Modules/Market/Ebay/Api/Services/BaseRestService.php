<?php
namespace Plenty\Modules\Market\Ebay\Api\Services;

use Ebay\DigitalSignature\Signature;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Crypt;
use Plenty\Legacy\Repositories\Market\Ebay\AccountPolicy\AccountPolicyHelper;
use Plenty\Log\Factories\LoggerFactory;
use Plenty\Log\Traits\Loggable;
use Plenty\Modules\Cloud\SecretsManager\Contracts\CachedSecretsManagerRepositoryContract;
use Plenty\Modules\Cloud\Storage\Contracts\GlobalStorageProviderRepositoryContract;
use Plenty\Modules\Market\Credentials\Models\Credentials;
use Plenty\Modules\Market\Ebay\Api\Exceptions\CredentialsIdMissingException;
use Plenty\Modules\Market\Ebay\Api\Exceptions\InvalidEndPointException;
use Plenty\Modules\Market\Ebay\Api\Exceptions\TokenRetrievalException;
use Plenty\Modules\Market\Ebay\Api\Handlers\HttpHandler;
use Plenty\Modules\Market\Ebay\Api\Helpers\Helper;
use Plenty\Modules\Market\Ebay\Api\Helpers\SignatureHelper;
use Plenty\Modules\Market\Ebay\Api\Resolvers\ConfigurationResolver;
use Plenty\Modules\Market\Ebay\Api\Resolvers\UriResolver;
use Plenty\Modules\Market\Ebay\Api\Types\BaseType;
use Plenty\Modules\Market\Ebay\Auth\Helpers\AuthHelper;
use Plenty\Modules\Market\Ebay\Auth\Services\AuthService;
use Plenty\Modules\Market\MarketLogIdentifier;
use Psr\Http\Message\ResponseInterface;
use Throwable;

/**
 * The service for making eBay REST calls.
 */
abstract class BaseRestService 
{

	const SIGNATURE_TOKEN_KEY_PATH = 'multichannel/ebay/signature/mc-ebay-signing-key';

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