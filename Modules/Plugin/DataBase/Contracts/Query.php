<?php
namespace Plenty\Modules\Plugin\DataBase\Contracts;

use Illuminate\Database\Query\Builder;
use Plenty\Modules\Plugin\DataBase\Models\Schema;
use Plenty\Modules\Plugin\Services\Monitoring\Facades\MysqlCounter;

/**
 * database query
 */
abstract class Query 
{

	/**
	 * Add a basic select clause to the query.
	 */
	abstract public function select(
		array $columns = []
	):self;

	/**
	 * Add a basic where clause to the query.
	 */
	abstract public function where(
		string $fieldName, 
		string $operator = null, 
		 $value = null
	):self;

	/**
	 * Add a "where in" clause to the query.
	 */
	abstract public function whereIn(
		string $fieldName, 
		array $values, 
		string $boolean = "and", 
		bool $not = false
	):self;

	/**
	 * Add an "or where in" clause to the query.
	 */
	abstract public function orWhereIn(
		string $fieldName, 
		array $values
	):self;

	/**
	 * Add an "or where" clause to the query.
	 */
	abstract public function orWhere(
		string $fieldName, 
		string $operator = null, 
		 $value = null
	):self;

	/**
	 * Add a "where null" clause to the query.
	 */
	abstract public function whereNull(
		string $fieldName, 
		string $boolean = "and", 
		bool $not = false
	):self;

	/**
	 * Add an "or where null" clause to the query.
	 */
	abstract public function orWhereNull(
		string $fieldName
	):self;

	/**
	 * Add a where between statement to the query.
	 */
	abstract public function whereBetween(
		string $column, 
		array $values, 
		string $boolean = "and", 
		bool $not = false
	):self;

	/**
	 * Add a where not between statement to the query.
	 */
	abstract public function whereNotBetween(
		string $column, 
		array $values, 
		string $boolean = "and"
	):self;

	/**
	 * Add a "where date" statement to the query.
	 */
	abstract public function whereDate(
		string $column, 
		string $operator, 
		 $value = null, 
		string $boolean = "and"
	):self;

	/**
	 * Add a "where month" statement to the query.
	 */
	abstract public function whereMonth(
		string $column, 
		string $operator, 
		 $value = null, 
		string $boolean = "and"
	):self;

	/**
	 * Add a "where day" statement to the query.
	 */
	abstract public function whereDay(
		string $column, 
		string $operator, 
		 $value = null, 
		string $boolean = "and"
	):self;

	/**
	 * Add a "where year" statement to the query.
	 */
	abstract public function whereYear(
		string $column, 
		string $operator, 
		 $value = null, 
		string $boolean = "and"
	):self;

	/**
	 * Add a "where time" statement to the query.
	 */
	abstract public function whereTime(
		string $column, 
		string $operator, 
		int $value = null, 
		string $boolean = "and"
	):self;

	/**
	 * Create a nested where condition
	 */
	abstract public function whereNested(
		callable $callback
	):self;

	/**
	 * Add a "group by" statement to the query.
	 */
	abstract public function groupBy(
		 $groups
	):self;

	/**
	 * Add a "having" clause to the query.
	 */
	abstract public function having(
		string $fieldName, 
		string $operator = null, 
		string $value = null, 
		string $boolean = "and"
	):self;

	/**
	 * Add a "or having" clause to the query.
	 */
	abstract public function orHaving(
		string $fieldName, 
		string $operator = null, 
		string $value = null
	):self;

	/**
	 * Add an "order by" clause to the query.
	 */
	abstract public function orderBy(
		string $fieldName, 
		string $direction = "asc"
	):self;

	/**
	 * Set the limit and offset for a given page.
	 */
	abstract public function forPage(
		int $page, 
		int $perPage = 15
	):self;

	/**
	 * Retrieve the "count" result of the query.
	 */
	abstract public function count(
		string $columns = "*"
	):int;

	/**
	 * Set the "limit" value of the query.
	 */
	abstract public function limit(
		int $value
	):self;

	/**
	 * Set the "offset" value of the query.
	 */
	abstract public function offset(
		int $value
	):self;

	/**
	 * Get the count of the total records for the paginator.
	 */
	abstract public function getCountForPagination(
		array $columns = []
	):int;

	abstract public function get(
	):array;

	abstract public function delete(
	):bool;

}