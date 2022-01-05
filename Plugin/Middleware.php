<?php
namespace Plenty\Plugin;

use Illuminate\Support\Str;
use Plenty\Plugin\Http\Request;
use Plenty\Plugin\Http\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Middleware
 */
abstract class Middleware 
{

	abstract public function before(
		Request $request
	);

	abstract public function after(
		Request $request, 
		Response $response
	):Response;

}