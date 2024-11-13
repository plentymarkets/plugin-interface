<?php
namespace Plenty\Modules\Webshop\Seo\Models;


/**
 * The sitemap configuration model
 */
abstract class SitemapConfiguration 
{
	
public		$contentCategory;
	
public		$itemCategory;
	
public		$itemImage;
	
public		$item;
	
public		$blog;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}