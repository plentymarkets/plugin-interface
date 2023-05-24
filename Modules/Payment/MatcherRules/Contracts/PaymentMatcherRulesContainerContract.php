<?php
namespace Plenty\Modules\Payment\MatcherRules\Contracts;


/**
 * Payment Matcher Rules Container Service
 */
interface PaymentMatcherRulesContainerContract 
{

	/**
	 * Register a specific rule class, either for specific methods of payment, or, lacking the second param, for all
	 */
	public function registerRule(
		string $ruleClass, 
		array $mopIds = []
	);

	/**
	 * Gets all registered rules that apply to a specific method of payment
If the payment method doesn't have any specificity, the rule set that applies generically is returned
	 */
	public function getRegisteredRules(
		int $mopId
	):array;

	/**
	 * Excludes the specified rule from the method's ruleset.
	 */
	public function excludeRuleForMethods(
		string $ruleClass, 
		array $mopIds
	);

}