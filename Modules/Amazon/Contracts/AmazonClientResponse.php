<?php
namespace Plenty\Modules\Amazon\Contracts;


interface AmazonClientResponse 
{

	public function getResponseContent(
	):array;

	public function getResponseMetaData(
	):array;

}