<?php
namespace Plenty\Modules\Document\TemplateSetting\Models;


/**
 * The DocumentBuilder template output setting model
 */
abstract class DocumentTemplateOutputSetting 
{

	const AMOUNT_FORMAT_DEFAULT = 'default';

	const AMOUNT_FORMAT_COMMA_SEPARATOR = 'commaSeparator';

	const AMOUNT_FORMAT_DOT_SEPARATOR = 'dotSeparator';

	const CURRENCY_FORMAT_ISO = 'iso';

	const CURRENCY_FORMAT_SIGN = 'sign';

	const DATE_FORMAT_DEFAULT = 'default';

	const DATE_FORMAT_DOT_DATE = 'dotDate';

	const DATE_FORMAT_DASH_DAY_DATE = 'dashDayDate';

	const DATE_FORMAT_DASH_MONTH_DATE = 'dashMonthDate';

	const DATE_FORMAT_DASH_YEAR_DATE = 'dashYearDate';

	const DATE_FORMAT_SLASH_DATE = 'slashDate';

	const OUTPUT_TYPE_PDF = 'pdf';

	const OUTPUT_TYPE_XML = 'xml';

	const OUTPUT_TYPE_PDF_XML = 'pdf-xml';

	const XML_TYPE_X_RECHNUNG = 'xRechnung';

	const XML_TYPE_FACTUR_X_BASIC = 'facturXBasic';

	const REPEAT_FIRST_PAGE = 'firstPage';

	const REPEAT_EACH_PAGE = 'everyPage';

	const REPEAT_LAST_PAGE = 'lastPage';

	const REPEAT_NONE = 'none';

	const UNIT_FORMAT_LONG_FORM = 'longForm';

	const UNIT_FORMAT_SHORT_FORM = 'shortForm';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$templateId;
	
public		$pageWidth;
	
public		$pageHeight;
	
public		$marginTop;
	
public		$marginBottom;
	
public		$marginLeft;
	
public		$marginRight;
	
public		$header;
	
public		$footer;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$fontFamily;
	
public		$fontSize;
	
public		$amountFormat;
	
public		$currencyFormat;
	
public		$dateFormat;
	
public		$pdfBackground;
	
public		$outputType;
	
public		$xmlFormat;
	
public		$repeatPdfBackground;
	
public		$unitFormat;
	
public		$documentTemplateSetting;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}