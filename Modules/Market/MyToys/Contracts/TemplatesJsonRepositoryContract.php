<?php
namespace Plenty\Modules\Market\MyToys\Contracts;


/**
 * The contract for the myToys template json repository.
 */
interface TemplatesJsonRepositoryContract 
{

	public function getTemplateByFilename(
		 $fileName
	);

	public function loadCategoryList(
	);

	public function loadGlobalFields(
	);

}