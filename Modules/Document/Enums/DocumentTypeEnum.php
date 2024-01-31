<?php
namespace Plenty\Modules\Document\Enums;


/**
 * A list of document types
 */
abstract class DocumentTypeEnum 
{

	const Invoice = 'invoice';

	const ReversalInvoice = 'reversal_document';

	const ProFormaInvoice = 'pro_forma_invoice';

	const DeliveryNote = 'delivery_note';

	const OrderConfirmation = 'order_confirmation';

	const MultiInvoice = 'multi_invoice';

	const MultiCreditNote = 'multi_credit_note';

	const Offer = 'offer';

	const EntryCertificate = 'success_confirmation';

	const PickupDelivery = 'pickup_delivery';

	const CreditNote = 'credit_note';

	const ReversalCreditNote = 'reversal_refund';

	const AdjustmentForm = 'correction_document';

	const DunningLetter = 'dunning_letter';

	const ReversalDunningLetter = 'reversal_dunning_letter';

	const ReturnSlip = 'return_note';

	const RepairBill = 'repair_bill';

	const Reorder = 'reorder';

	const PODeliveryNote = 'po_delivery_note';

	const Voucher = 'voucher';

	const Coupon = 'coupon';

	const ExternalInvoice = 'invoice_external';

	const ExternalCreditNote = 'credit_note_external';

	const Uploaded = 'uploaded';

	const OrderCustom = 'order_custom';

	const IncomingItemReceipt = 'incoming_items_receipt';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}