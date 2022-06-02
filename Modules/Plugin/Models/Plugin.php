<?php
namespace Plenty\Modules\Plugin\Models;


/**
 * Eloquent model representing a Plugin.
 */
abstract class Plugin 
{

	const TYPE_EXPORT = 'export';

	const TYPE_TEMPLATE = 'template';

	const TYPE_PAYMENT = 'payment';

	const TYPE_SHIPPING = 'shipping';

	const TYPE_RETURNS = 'returns';

	const DEFAULT_ITEMS_PER_PAGE = 150;

	const CREATED_AT = 'created_at';

	const UPDATED_AT = 'updated_at';
	
public		$id;
	
public		$name;
	
public		$position;
	
public		$activeStage;
	
public		$activeProductive;
	
public		$created_at;
	
public		$updated_at;
	
public		$inStage;
	
public		$inProductive;
	
public		$isConnectedWithGit;
	
public		$updateInformation;
	
public		$type;
	
public		$installed;
	
public		$version;
	
public		$versionStage;
	
public		$versionProductive;
	
public		$marketplaceVariations;
	
public		$description;
	
public		$namespace;
	
public		$dependencies;
	
public		$author;
	
public		$price;
	
public		$keywords;
	
public		$require;
	
public		$platform;
	
public		$notInstalledRequirements;
	
public		$notActiveStageRequirements;
	
public		$notActiveProductiveRequirements;
	
public		$serviceProvider;
	
public		$runOnBuild;
	
public		$checkOnBuild;
	
public		$pluginPath;
	
public		$authorIcon;
	
public		$pluginIcon;
	
public		$license;
	
public		$shortDescription;
	
public		$isClosedSource;
	
public		$inboxPath;
	
public		$marketplaceName;
	
public		$source;
	
public		$javaScriptFiles;
	
public		$containers;
	
public		$dataProviders;
	
public		$categories;
	
public		$webhookUrl;
	
public		$isExternalTool;
	
public		$directDownloadLinks;
	
public		$forwardLink;
	
public		$branch;
	
public		$commit;
	
public		$subscriptionInformation;
	
public		$offerTrial;
	
public		$offerFreemium;
	
public		$configurations;
	
public		$webstores;
	
public		$linkedDataProviders;
	
public		$linkedContainers;
	
public		$repository;
	
public		$installedPlugins;
	
public		$pluginSetIds;
	
public		$pluginSetEntries;
	
public		$pluginSetEntriesWithTrashed;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}