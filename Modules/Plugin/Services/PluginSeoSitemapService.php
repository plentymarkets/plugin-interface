<?php
namespace Plenty\Modules\Plugin\Services;


/**
 * The PluginSeoSitemapService collect the sitemap patterns.
 */
abstract class PluginSeoSitemapService 
{

	abstract public function loadPatterns(
		string $url
	):bool;

	abstract public function getPatterns(
	):array;

	abstract public function setItemPattern(
		array $pattern
	);

	abstract public function setBlogPattern(
		array $pattern
	);

	abstract public function setBlogContent(
		array $data
	);

	abstract public function setContentCategoryPattern(
		array $pattern
	);

	abstract public function setItemCategoryPattern(
		array $pattern
	);

	abstract public function getItemPattern(
	):string;

	abstract public function getBlogPattern(
	):string;

	abstract public function getBlogContent(
	):array;

	abstract public function getItemCategoryPattern(
	):string;

	abstract public function getContentCategoryPattern(
	):string;

}