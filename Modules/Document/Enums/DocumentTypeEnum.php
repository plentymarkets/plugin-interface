<?php
namespace Plenty\Modules\Document\Enums;


/**
 * A list of document types
 */
abstract class DocumentTypeEnum 
{

	const INVOICE = 'invoice';

	const REVERSAL_INVOICE = 'reversal_document';

	const PRO_FORMA_INVOICE = 'pro_forma_invoice';

	const DELIVERY_NOTE = 'delivery_note';

	const ORDER_CONFIRMATION = 'order_confirmation';

	const MULTI_INVOICE = 'multi_invoice';

	const MULTI_CREDIT_NOTE = 'multi_credit_note';

	const OFFER = 'offer';

	const ENTRY_CERTIFICATE = 'success_confirmation';

	const PICKUP_DELIVERY = 'pickup_delivery';

	const CREDIT_NOTE = 'credit_note';

	const REVERSAL_CREDIT_NOTE = 'reversal_refund';

	const ADJUSTMENT_FORM = 'correction_document';

	const DUNNING_LETTER = 'dunning_letter';

	const REVERSAL_DUNNING_LETTER = 'reversal_dunning_letter';

	const RETURN_SLIP = 'return_note';

	const REPAIR_BILL = 'repair_bill';

	const REORDER = 'reorder';

	const PO_DELIVERY_NOTE = 'po_delivery_note';

	const VOUCHER = 'voucher';

	const COUPON = 'coupon';

	const EXTERNAL_INVOICE = 'invoice_external';

	const EXTERNAL_CREDIT_NOTE = 'credit_note_external';

	const UPLOADED = 'uploaded';

	const ORDER_CUSTOM = 'order_custom';

	const INCOMING_ITEMS_RECEIPT = 'incoming_items_receipt';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}