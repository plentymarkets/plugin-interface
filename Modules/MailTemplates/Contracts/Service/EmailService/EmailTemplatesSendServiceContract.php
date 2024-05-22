<?php
namespace Plenty\Modules\Mail\Templates\Contracts\Service\EmailService;

use Illuminate\Support\Collection;
use Plenty\Modules\ContentBuilder\Exceptions\ContentBuilderException;
use Plenty\Modules\Mail\Templates\Exceptions\MailTemplateFactoryException;
use Plenty\Modules\Mail\Templates\Exceptions\MailTemplateMailerException;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * The EmailTemplatesSendServiceContract is the interface for the email service.
 * This interface defines methods to list available accounts, get list of templates, get send email history,
 * render a template preview, send a template or send a custom email.
 */
interface EmailTemplatesSendServiceContract 
{

	/**
	 * List all email accounts that can be used to send emails (e.g. Webstore or Messenger inboxes)
	 */
	public function getAccounts(
		array $filters
	):array;

	/**
	 * List all EmailBuilder templates and folders structured as a nested tree
	 */
	public function getTemplatesTree(
		string $sortBy = "id", 
		string $sortOrder = "asc", 
		array $filters = []
	):Collection;

	/**
	 * List all sent email for a specific entity (e.g order, contact, etc.)
	 */
	public function getEmailHistory(
		array $filters = []
	):array;

	/**
	 * Generates a render preview of a specific template
	 */
	public function getPreview(
		int $templateId, 
		array $data = []
	):array;

	/**
	 * Renders a template and sends an email to the specified recipients
	 */
	public function sendEmail(
		int $templateId, 
		array $data = []
	):array;

	/**
	 * Sends a direct email to the specified recipients (a preview of a template or any other custom content email)
	 */
	public function sendPreview(
		array $data = []
	):array;

}