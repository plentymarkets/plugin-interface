<?php
namespace Plenty\Plugin\Templates;

use Illuminate\Support\Str;

/**
 * A simple markdown converter.
 */
abstract class Markdown 
{

	abstract public function renderToHtml(
		string $markdownContent
	):string;

}