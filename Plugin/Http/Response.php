<?php
namespace Plenty\Plugin\Http;

use Symfony\Component\HttpFoundation\Response as BaseResponse;

/**
 * Class to create different types of http response.
 */
abstract class Response extends \Symfony\Component\HttpFoundation\Response 

{

	const HTTP_CONTINUE = 100;

	const HTTP_SWITCHING_PROTOCOLS = 101;

	const HTTP_PROCESSING = 102;

	const HTTP_EARLY_HINTS = 103;

	const HTTP_OK = 200;

	const HTTP_CREATED = 201;

	const HTTP_ACCEPTED = 202;

	const HTTP_NON_AUTHORITATIVE_INFORMATION = 203;

	const HTTP_NO_CONTENT = 204;

	const HTTP_RESET_CONTENT = 205;

	const HTTP_PARTIAL_CONTENT = 206;

	const HTTP_MULTI_STATUS = 207;

	const HTTP_ALREADY_REPORTED = 208;

	const HTTP_IM_USED = 226;

	const HTTP_MULTIPLE_CHOICES = 300;

	const HTTP_MOVED_PERMANENTLY = 301;

	const HTTP_FOUND = 302;

	const HTTP_SEE_OTHER = 303;

	const HTTP_NOT_MODIFIED = 304;

	const HTTP_USE_PROXY = 305;

	const HTTP_RESERVED = 306;

	const HTTP_TEMPORARY_REDIRECT = 307;

	const HTTP_PERMANENTLY_REDIRECT = 308;

	const HTTP_BAD_REQUEST = 400;

	const HTTP_UNAUTHORIZED = 401;

	const HTTP_PAYMENT_REQUIRED = 402;

	const HTTP_FORBIDDEN = 403;

	const HTTP_NOT_FOUND = 404;

	const HTTP_METHOD_NOT_ALLOWED = 405;

	const HTTP_NOT_ACCEPTABLE = 406;

	const HTTP_PROXY_AUTHENTICATION_REQUIRED = 407;

	const HTTP_REQUEST_TIMEOUT = 408;

	const HTTP_CONFLICT = 409;

	const HTTP_GONE = 410;

	const HTTP_LENGTH_REQUIRED = 411;

	const HTTP_PRECONDITION_FAILED = 412;

	const HTTP_REQUEST_ENTITY_TOO_LARGE = 413;

	const HTTP_REQUEST_URI_TOO_LONG = 414;

	const HTTP_UNSUPPORTED_MEDIA_TYPE = 415;

	const HTTP_REQUESTED_RANGE_NOT_SATISFIABLE = 416;

	const HTTP_EXPECTATION_FAILED = 417;

	const HTTP_I_AM_A_TEAPOT = 418;

	const HTTP_MISDIRECTED_REQUEST = 421;

	const HTTP_UNPROCESSABLE_ENTITY = 422;

	const HTTP_LOCKED = 423;

	const HTTP_FAILED_DEPENDENCY = 424;

	const HTTP_TOO_EARLY = 425;

	const HTTP_UPGRADE_REQUIRED = 426;

	const HTTP_PRECONDITION_REQUIRED = 428;

	const HTTP_TOO_MANY_REQUESTS = 429;

	const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

	const HTTP_UNAVAILABLE_FOR_LEGAL_REASONS = 451;

	const HTTP_INTERNAL_SERVER_ERROR = 500;

	const HTTP_NOT_IMPLEMENTED = 501;

	const HTTP_BAD_GATEWAY = 502;

	const HTTP_SERVICE_UNAVAILABLE = 503;

	const HTTP_GATEWAY_TIMEOUT = 504;

	const HTTP_VERSION_NOT_SUPPORTED = 505;

	const HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL = 506;

	const HTTP_INSUFFICIENT_STORAGE = 507;

	const HTTP_LOOP_DETECTED = 508;

	const HTTP_NOT_EXTENDED = 510;

	const HTTP_NETWORK_AUTHENTICATION_REQUIRED = 511;

	/**
	 * Get the headers for the response.
	 */
	abstract public function getHeaders(
	);

	/**
	 * Get the status code for the response.
	 */
	abstract public function status(
	):int;

	/**
	 * Get the content of the response.
	 */
	abstract public function content(
	):string;

	/**
	 * Return a new response from the application.
	 */
	abstract public function make(
		string $content = "", 
		int $status = 200, 
		array $headers = []
	):Response;

	/**
	 * Return a new view response from the application.
	 */
	abstract public function view(
		string $view, 
		array $data = [], 
		int $status = 200, 
		array $headers = []
	):Response;

	/**
	 * Return a new JSON response from the application.
	 */
	abstract public function json(
		 $data = [], 
		int $status = 200, 
		array $headers = [], 
		int $options = 0
	):BaseResponse;

	/**
	 * Return a new JSONP response from the application.
	 */
	abstract public function jsonp(
		string $callback, 
		 $data = [], 
		int $status = 200, 
		array $headers = [], 
		int $options = 0
	):BaseResponse;

	/**
	 * Return a new streamed response from the application.
	 */
	abstract public function stream(
		callable $callback, 
		int $status = 200, 
		array $headers = []
	):BaseResponse;

	/**
	 * Create a new redirect response to the given path.
	 */
	abstract public function redirectTo(
		string $path, 
		int $status = 302, 
		array $headers = [], 
		bool $secure = null
	):BaseResponse;

	/**
	 * Create a new redirect response to a named route.
	 */
	abstract public function redirectToRoute(
		string $route, 
		array $parameters = [], 
		int $status = 302, 
		array $headers = []
	):BaseResponse;

	/**
	 * Create a new redirect response to a controller action.
	 */
	abstract public function redirectToAction(
		string $action, 
		array $parameters = [], 
		int $status = 302, 
		array $headers = []
	):BaseResponse;

	/**
	 * Create a new redirect response, while putting the current URL in the session.
	 */
	abstract public function redirectGuest(
		string $path, 
		int $status = 302, 
		array $headers = [], 
		bool $secure = null
	):BaseResponse;

	/**
	 * Create a new redirect response to the previously intended location.
	 */
	abstract public function redirectToIntended(
		string $default = "/", 
		int $status = 302, 
		array $headers = [], 
		bool $secure = null
	):BaseResponse;

	/**
	 * Send the HTTP headers without sending the whole response.
	 */
	abstract public function sendHeaders(
	):self;

	/**
	 * Force sending response with defined status instead of falling back to default handlers in case of 40* status codes.
	 */
	abstract public function forceStatus(
		int $status = 200
	):self;

	/**
	 * Check if response should be send instead of falling back to default handlers in case of 40* status codes.
	 */
	abstract public function isStatusForced(
	):bool;

}