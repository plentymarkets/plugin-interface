<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\Attributes;

use Exception;
use Plenty\Legacy\Services\Item\Image\ImageService;
use Plenty\Modules\Core\Data\Services\LazyLoader;
use Plenty\Modules\Feedback\Models\FeedbackAverage;
use Plenty\Modules\ItemSet\Models\ItemSetConfig;
use Plenty\Modules\Item\Availability\Models\Availability;
use Plenty\Modules\Item\ItemCrossSelling\Models\ItemCrossSelling;
use Plenty\Modules\Item\ItemImage\Models\ItemImage;
use Plenty\Modules\Item\ItemSerialNumber\Models\ItemSerialNumber;
use Plenty\Modules\Item\ItemShippingProfiles\Models\ItemShippingProfiles;
use Plenty\Modules\Item\Item\Models\Item;
use Plenty\Modules\Item\Item\Models\ItemEbayTitle;
use Plenty\Modules\Item\PackingUnit\Models\PackingUnit;
use Plenty\Modules\Item\VariationBundle\Models\VariationBundle;
use Plenty\Modules\Item\VariationDescription\Models\VariationDescription;
use Plenty\Modules\Item\VariationProperty\Models\VariationPropertyValue;
use Plenty\Modules\Pim\DocumentService\Models\Variation\Base;
use Plenty\Modules\Pim\VariationDataInterface\Contracts\AttributeInterface;
use Plenty\Modules\Pim\VariationDataInterface\Model\Variation;
use Plenty\Modules\Pim\VariationDataInterface\Model\VariationDataInterfaceContext;
use Plenty\Modules\StockManagement\Stock\Models\Stock;
use Plenty\Modules\StockManagement\Stock\Models\StockStorageLocation;

/**
 * The base part of the variation
 */
abstract class VariationBaseAttribute 
{

	const ITEM = 'Plenty\Modules\Item\Item\Models\Item';

	const SERIAL_NUMBER = 'Plenty\Modules\Item\ItemSerialNumber\Models\ItemSerialNumber';

	const FEEDBACK = 'Plenty\Modules\Feedback\Models\FeedbackAverage';

	const ITEM_EBAY_TITLE = 'Plenty\Modules\Item\Item\Models\ItemEbayTitle';

	const CHARACTERISTIC = 'Plenty\Modules\Item\VariationProperty\Models\VariationPropertyValue';

	const CROSS_SELLING = 'Plenty\Modules\Item\ItemCrossSelling\Models\ItemCrossSelling';

	const CROSS_SELLING_FOR = 'Plenty\Modules\Item\ItemCrossSelling\Models\ItemCrossSelling';

	const TEXTS = 'Plenty\Modules\Item\VariationDescription\Models\VariationDescription';

	const PACKING_UNITS = 'Plenty\Modules\Item\PackingUnit\Models\PackingUnit';

	const AVAILABILITY = 'Plenty\Modules\Item\Availability\Models\Availability';

	const VARIATION_BUNDLE = 'Plenty\Modules\Item\VariationBundle\Models\VariationBundle';

	const SHIPPING_PROFILE = 'Plenty\Modules\Item\ItemShippingProfiles\Models\ItemShippingProfiles';

	const IMAGE = 'Plenty\Modules\Item\ItemImage\Models\ItemImage';

	const STOCK = 'Plenty\Modules\StockManagement\Stock\Models\Stock';

	const STOCK_STORAGE_LOCATION = 'Plenty\Modules\StockManagement\Stock\Models\StockStorageLocation';

	const ITEM_SET = 'Plenty\Modules\ItemSet\Models\ItemSetConfig';

	const PRIMARY_KEY = 'variationId';

	/**
	 * Get the related key on the variation model.
	 */
	abstract public static function getVariationAttribute(
	):string;

	abstract public function getName(
	):string;

	abstract public function addLazyLoadParts(
		 $lazyLoadParts
	);

	abstract public function getLazyLoadParts(
	);

}