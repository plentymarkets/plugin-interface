<?php
namespace Plenty\Modules\System\Models;


/**
 * The Webstore Configuration Model
 */
abstract class WebstoreConfiguration 
{
	
public		$webstoreId;
	
public		$error404ContentPageId;
	
public		$attributesDropDown;
	
public		$attributeSelectDefaultOption;
	
public		$attributeVariantCheck;
	
public		$attributeWithMarkup;
	
public		$bankContentPageId;
	
public		$basketReservationTime;
	
public		$cancellationRightsContentPageId;
	
public		$categoryItemCount;
	
public		$categoryLevelLimit;
	
public		$closed;
	
public		$defaultAccountingLocation;
	
public		$defaultCurrency;
	
public		$defaultLanguage;
	
public		$defaultLayout;
	
public		$defaultShippingCountryId;
	
public		$defaultShippingCountryList;
	
public		$defaultCurrencyList;
	
public		$defaultParcelServiceId;
	
public		$defaultParcelServicePresetId;
	
public		$defaultMethodOfPaymentId;
	
public		$defaultCustomerClassId;
	
public		$dhlPackstationValidation;
	
public		$dhlAllowPackstationActive;
	
public		$dhlLimitOrderAmountForPackstation;
	
public		$dhlAllowPostidentActive;
	
public		$displayAttributeMarkup;
	
public		$displayItemName;
	
public		$displayItemOnly4Customer;
	
public		$displayPriceColumn;
	
public		$displayPriceNetto;
	
public		$doctype;
	
public		$domain;
	
public		$domainSsl;
	
public		$dontSplitItemBundle;
	
public		$faviconPath;
	
public		$frontPageContentPageId;
	
public		$helpContentPageId;
	
public		$itemNotFoundContentPageId;
	
public		$paymentMethodsContentPageId;
	
public		$contactContentPageId;
	
public		$legalDisclosureContentPageId;
	
public		$blogRatingActive;
	
public		$blogMaxRatingPoints;
	
public		$blogCommentsActive;
	
public		$blogNewFeedbackVisibility;
	
public		$blogCustomerNameVisibility;
	
public		$itemMaxRatingPoints;
	
public		$itemCommentsActive;
	
public		$itemNewFeedbackVisibility;
	
public		$itemCustomerNameVisibility;
	
public		$categoryRatingActive;
	
public		$categoryMaxRatingPoints;
	
public		$categoryCommentsActive;
	
public		$categoryNewFeedbackVisibility;
	
public		$categoryCustomerNameVisibility;
	
public		$choiceNominationRatingActive;
	
public		$choiceNominationMaxRatingPoints;
	
public		$choiceNominationCommentsActive;
	
public		$choiceNominationNewFeedbackVisibility;
	
public		$choiceNominationCustomerNameVisibility;
	
public		$feedbackRatingActive;
	
public		$feedbackMaxRatingPoints;
	
public		$feedbackCommentsActive;
	
public		$feedbackNewFeedbackVisibility;
	
public		$feedbackCustomerNameVisibility;
	
public		$languageList;
	
public		$languageMode;
	
public		$loginMode;
	
public		$oversellingWarning;
	
public		$maxLoginAttempts;
	
public		$mobileRedirectActive;
	
public		$mobileRedirectUrl;
	
public		$mobileRedirectItemUrl;
	
public		$name;
	
public		$newsletterDirId;
	
public		$paypalAccount;
	
public		$ebayAccount;
	
public		$privacyPolicyContentPageId;
	
public		$rootDir;
	
public		$sessionLifetime;
	
public		$shippingContentPageId;
	
public		$socialMedia;
	
public		$termsConditionsContentPageId;
	
public		$trustedShopsCertificationDeSealHtml;
	
public		$trustedShopsCertificationDeTrustedShopsId;
	
public		$trustedShopsCertificationEnSealHtml;
	
public		$trustedShopsCertificationEnTrustedShopsId;
	
public		$trustedShopsCertificationFrSealHtml;
	
public		$trustedShopsCertificationFrTrustedShopsId;
	
public		$urlFacebook;
	
public		$urlFileExtension;
	
public		$urlGooglePlus;
	
public		$urlItemCategory;
	
public		$urlItemContent;
	
public		$urlLinking;
	
public		$urlNeedle;
	
public		$urlTitleItemContent;
	
public		$urlTitleItemName;
	
public		$urlTwitter;
	
public		$useCharacterCrossSelling;
	
public		$useDefaultShippingCountryAsShopCountry;
	
public		$calcEbayShippingCostsActive;
	
public		$autoGroupOpenEbayTransactions;
	
public		$calcRicardoShippingCostsActive;
	
public		$calcHoodShippingCostsActive;
	
public		$ebayDownsellingActive;
	
public		$addressCheckRegistrationSave;
	
public		$addressCheckRegistrationInput;
	
public		$addressCheckInvoiceDetailsSave;
	
public		$addressCheckInvoiceDetailsInput;
	
public		$addressCheckShippingDetailsSave;
	
public		$addressCheckShippingDetailsInput;
	
public		$addressCheckCustomerDetailsSave;
	
public		$addressCheckCustomerDetailsInput;
	
public		$addressCheckAfterDays;
	
public		$facebookLoginActive;
	
public		$itemCategorySorting1;
	
public		$itemCategorySorting2;
	
public		$itemSortByMonthlySales;
	
public		$showBasePriceActive;
	
public		$jumpPaymentActive;
	
public		$jumpShippingActive;
	
public		$showContentTermsFsk;
	
public		$newsletterRegistrationActive;
	
public		$ignoreCouponMinOrderValueActive;
	
public		$ipAddressSaveInactive;
	
public		$reuseOrderActive;
	
public		$editOrderActive;
	
public		$currencySymbol;
	
public		$externalVatCheckInactive;
	
public		$externalVatCheckServiceUnavailableFallbackStatus;
	
public		$customerRegistrationCheck;
	
public		$schedulerPropertyID;
	
public		$customerLoginMethod;
	
public		$watchlistActive;
	
public		$itemwishlistActive;
	
public		$documentsActive;
	
public		$dynamicExportActive;
	
public		$couponVisibilityActive;
	
public		$retoureMethod;
	
public		$itemlistPrice;
	
public		$itemlistWeight;
	
public		$schedulerActive;
	
public		$editSchedulerPaymentMethodActive;
	
public		$showSEPAMandateDownload;
	
public		$changeEmailActive;
	
public		$changePasswordActive;
	
public		$changePasswordSendmail;
	
public		$logoutHiddenActive;
	
public		$displayStatusInactive;
	
public		$displayMyAccountPaymentDateInactive;
	
public		$displayMyAccountDeliveryDateInactive;
	
public		$displayWeightInactive;
	
public		$displayInvoiceDownload;
	
public		$displayShippingDateActive;
	
public		$minimumOrderValue;
	
public		$itemAvailabilityDisabledList;
	
public		$itemMeasureUnit;
	
public		$quickloginValidDays;
	
public		$captchaCodeInactive;
	
public		$itemListingOrderImportItemName;
	
public		$orderRowDeliveryDate;
	
public		$browserLanguage;
	
public		$categoryRedirectActive;
	
public		$itemRedirectActive;
	
public		$googleRecaptchaApiWebsitekey;
	
public		$itemSearchEngine;
	
public		$itemRatingAllowComments;
	
public		$itemRatingMaxRatingPoints;
	
public		$itemRatingActive;
	
public		$currencyConversion;
	
public		$urlTrailingSlash;
	
public		$isCookieSubdomainIndependent;
	
public		$useVariationOrderProperties;
	
public		$itemSearchOperator;
	
public		$itemAutocompleteSearchOperator;
	
public		$defaultOrderItemName;
	
public		$serviceWorkerScope;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}