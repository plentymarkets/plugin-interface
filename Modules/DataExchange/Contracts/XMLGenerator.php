<?php
namespace Plenty\Modules\DataExchange\Contracts;

use DOMAttr;
use DOMCdataSection;
use DOMElement;
use DOMText;
use Plenty\Modules\DataExchange\Models\FormatSetting;

/**
 * generator for xml content
 */
abstract class XMLGenerator 
{
	
protected		$version = "1.0";
	
protected		$encoding = "UTF-8";
	
protected		$formatOutput = true;
	
protected		$preserveWhiteSpace = true;
	
	/**
	 * Initializes the xml document and the root element.
	 */
	protected function init(
		string $rootName
	)
	{
	}

	protected function root(
	):\DOMElement
	{
		return new \DOMElement(null);
	}

	/**
	 * Build the XML.
	 */
	protected function build(
	)
	{
	}

	/**
	 * Create an XML element.
	 */
	protected function createElement(
		string $name, 
		 $value = null
	):\DOMElement
	{
		return new \DOMElement(null);
	}

	/**
	 * Create a CDATA section.
	 */
	protected function createCDATASection(
		string $data
	):\DOMCdataSection
	{
		return new \DOMCdataSection(null);
	}

	/**
	 * Create an XML attribute.
	 */
	protected function createAttribute(
		string $name, 
		 $value = null
	):\DOMAttr
	{
		return new \DOMAttr(null);
	}

	/**
	 * Create new text node.
	 */
	protected function createTextNode(
		string $content
	):\DOMText
	{
		return new \DOMText(null);
	}

	protected function addContent(
		string $content
	)
	{
	}

	abstract protected function generateContent(
		 $resultData, 
		array $formatSettings = []
	);

}