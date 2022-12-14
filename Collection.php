<?php
namespace Illuminate\Support;

use ArrayAccess;
use ArrayIterator;
use Illuminate\Contracts\Support\CanBeEscapedWhenCastToString;
use Illuminate\Support\Traits\EnumeratesValues;
use Illuminate\Support\Traits\Macroable;
use Traversable;
use stdClass;

abstract class Collection 
{

	/**
	 * Get all of the items in the collection.
	 */
	abstract public function all(
	):array;

	/**
	 * Get the average value of a given key.
	 */
	abstract public function avg(
		 $callback = null
	);

	/**
	 * Get the mode of a given key.
	 */
	abstract public function mode(
		 $key = null
	):array;

	/**
	 * Collapse the collection of items into a single array.
	 */
	abstract public function collapse(
	):Collection;

	/**
	 * Determine if an item exists in the collection.
	 */
	abstract public function contains(
		 $key, 
		 $operator = null, 
		 $value = null
	):bool;

	/**
	 * Determine if an item exists, using strict comparison.
	 */
	abstract public function containsStrict(
		 $key, 
		 $value = null
	):bool;

	/**
	 * Cross join with the given lists, returning all possible permutations.
	 */
	abstract public function crossJoin(
		 $lists
	):Collection;

	/**
	 * Get the items in the collection that are not present in the given items.
	 */
	abstract public function diff(
		 $items
	):Collection;

	/**
	 * Get the items in the collection whose keys and values are not present in the given items.
	 */
	abstract public function diffAssoc(
		 $items
	):Collection;

	/**
	 * Get the items in the collection whose keys are not present in the given items.
	 */
	abstract public function diffKeys(
		 $items
	):Collection;

	/**
	 * Get all items except for those with the specified keys.
	 */
	abstract public function except(
		 $keys
	):Collection;

	/**
	 * Run a filter over each of the items.
	 */
	abstract public function filter(
		callable $callback = null
	):Collection;

	/**
	 * Get the first item from the collection passing the given truth test.
	 */
	abstract public function first(
		callable $callback = null, 
		 $default = null
	);

	/**
	 * Flip the items in the collection.
	 */
	abstract public function flip(
	):Collection;

	/**
	 * Remove an item from the collection by key.
	 */
	abstract public function forget(
		 $keys
	):Collection;

	/**
	 * Get an item from the collection by key.
	 */
	abstract public function get(
		 $key, 
		 $default = null
	);

	/**
	 * Group an associative array by a field or using a callback.
	 */
	abstract public function groupBy(
		 $groupBy, 
		bool $preserveKeys = false
	):Collection;

	/**
	 * Key an associative array by a field or using a callback.
	 */
	abstract public function keyBy(
		 $keyBy
	):Collection;

	/**
	 * Determine if an item exists in the collection by key.
	 */
	abstract public function has(
		 $key
	):bool;

	/**
	 * Concatenate values of a given key as a string.
	 */
	abstract public function implode(
		 $value, 
		string $glue = null
	):string;

	/**
	 * Intersect the collection with the given items.
	 */
	abstract public function intersect(
		 $items
	):Collection;

	/**
	 * Intersect the collection with the given items by key.
	 */
	abstract public function intersectByKeys(
		 $items
	):Collection;

	/**
	 * Determine if the collection is empty or not.
	 */
	abstract public function isEmpty(
	):bool;

	/**
	 * Get the keys of the collection items.
	 */
	abstract public function keys(
	):Collection;

	/**
	 * Get the last item from the collection.
	 */
	abstract public function last(
		callable $callback = null, 
		 $default = null
	);

	/**
	 * Get the values of a given key.
	 */
	abstract public function pluck(
		 $value, 
		string $key = null
	):Collection;

	/**
	 * Run a map over each of the items.
	 */
	abstract public function map(
		callable $callback
	):Collection;

	/**
	 * Run a dictionary map over the items.
	 */
	abstract public function mapToDictionary(
		callable $callback
	):Collection;

	/**
	 * Run an associative map over each of the items.
	 */
	abstract public function mapWithKeys(
		callable $callback
	):Collection;

	/**
	 * Merge the collection with the given items.
	 */
	abstract public function merge(
		 $items
	):Collection;

	/**
	 * Create a collection by using this collection for keys and another for its values.
	 */
	abstract public function combine(
		 $values
	):Collection;

	/**
	 * Union the collection with the given items.
	 */
	abstract public function union(
		 $items
	):Collection;

	/**
	 * Create a new collection consisting of every n-th element.
	 */
	abstract public function nth(
		int $step, 
		int $offset = 0
	):Collection;

	/**
	 * Get the items with the specified keys.
	 */
	abstract public function only(
		 $keys
	):Collection;

	/**
	 * Get and remove the last N items from the collection.
	 */
	abstract public function pop(
		int $count = 1
	):Collection;

	/**
	 * Push an item onto the beginning of the collection.
	 */
	abstract public function prepend(
		 $value, 
		 $key = null
	):Collection;

	/**
	 * Push one or more items onto the end of the collection.
	 */
	abstract public function push(
		 $values
	):Collection;

	/**
	 * Get and remove an item from the collection.
	 */
	abstract public function pull(
		 $key, 
		 $default = null
	);

	/**
	 * Put an item in the collection by key.
	 */
	abstract public function put(
		 $key, 
		 $value
	):Collection;

	/**
	 * Get one or a specified number of items randomly from the collection.
	 */
	abstract public function random(
		 $number = null
	):Collection;

	/**
	 * Reverse items order.
	 */
	abstract public function reverse(
	):Collection;

	/**
	 * Search the collection for a given value and return the corresponding key if successful.
	 */
	abstract public function search(
		 $value, 
		bool $strict = false
	);

	/**
	 * Get and remove the first N items from the collection.
	 */
	abstract public function shift(
		int $count = 1
	):Collection;

	/**
	 * Shuffle the items in the collection.
	 */
	abstract public function shuffle(
		int $seed = null
	):Collection;

	/**
	 * Slice the underlying collection array.
	 */
	abstract public function slice(
		int $offset, 
		int $length = null
	):Collection;

	/**
	 * Split a collection into a certain number of groups.
	 */
	abstract public function split(
		int $numberOfGroups
	):Collection;

	/**
	 * Chunk the collection into chunks of the given size.
	 */
	abstract public function chunk(
		int $size
	):Collection;

	/**
	 * Sort through each item with a callback.
	 */
	abstract public function sort(
		 $callback = null
	):Collection;

	/**
	 * Splice a portion of the underlying collection array.
	 */
	abstract public function splice(
		int $offset, 
		int $length = null, 
		array $replacement = []
	):Collection;

	/**
	 * Take the first or last {$limit} items.
	 */
	abstract public function take(
		int $limit
	):Collection;

	/**
	 * Transform each item in the collection using a callback.
	 */
	abstract public function transform(
		callable $callback
	):Collection;

	/**
	 * Return only unique items from the collection array.
	 */
	abstract public function unique(
		 $key = null, 
		bool $strict = false
	):Collection;

	/**
	 * Reset the keys on the underlying array.
	 */
	abstract public function values(
	):Collection;

	/**
	 * Zip the collection together with one or more arrays.
	 */
	abstract public function zip(
		 $items
	):Collection;

	/**
	 * Pad collection to the specified length with a value.
	 */
	abstract public function pad(
		int $size, 
		 $value
	):Collection;

	/**
	 * Count the number of items in the collection.
	 */
	abstract public function count(
	):int;

	/**
	 * Determine if an item exists at an offset.
	 */
	abstract public function offsetExists(
		 $key
	):bool;

	/**
	 * Get an item at a given offset.
	 */
	abstract public function offsetGet(
		 $key
	);

	/**
	 * Set the item at a given offset.
	 */
	abstract public function offsetSet(
		 $key, 
		 $value
	);

	/**
	 * Unset the item at a given offset.
	 */
	abstract public function offsetUnset(
		 $key
	);

	/**
	 * Create a new collection instance if the value isn't one already.
	 */
	abstract public static function make(
		 $items = []
	):Collection;

	/**
	 * Wrap the given value in a collection if applicable.
	 */
	abstract public static function wrap(
		string $value
	):Collection;

	/**
	 * Get the underlying items from the given collection if applicable.
	 */
	abstract public static function unwrap(
		 $value
	):array;

	/**
	 * Create a new collection by invoking the callback a given amount of times.
	 */
	abstract public static function times(
		int $number, 
		callable $callback = null
	):Collection;

	/**
	 * Alias for the "avg" method.
	 */
	abstract public function average(
		 $callback = null
	);

	/**
	 * Execute a callback over each item.
	 */
	abstract public function each(
		callable $callback
	):Collection;

	/**
	 * Execute a callback over each nested chunk of items.
	 */
	abstract public function eachSpread(
		callable $callback
	):Collection;

	/**
	 * Determine if all items pass the given truth test.
	 */
	abstract public function every(
		 $key, 
		 $operator = null, 
		 $value = null
	):bool;

	/**
	 * Get the first item by the given key value pair.
	 */
	abstract public function firstWhere(
		 $key, 
		 $operator = null, 
		 $value = null
	);

	/**
	 * Determine if the collection is not empty.
	 */
	abstract public function isNotEmpty(
	):bool;

	/**
	 * Run a map over each nested chunk of items.
	 */
	abstract public function mapSpread(
		callable $callback
	):Collection;

	/**
	 * Run a grouping map over the items.
	 */
	abstract public function mapToGroups(
		callable $callback
	):Collection;

	/**
	 * Map a collection and flatten the result by a single level.
	 */
	abstract public function flatMap(
		callable $callback
	):Collection;

	/**
	 * Map the values into a new class.
	 */
	abstract public function mapInto(
		string $class
	):Collection;

	/**
	 * Get the min value of a given key.
	 */
	abstract public function min(
		 $callback = null
	);

	/**
	 * Get the max value of a given key.
	 */
	abstract public function max(
		 $callback = null
	);

	/**
	 * "Paginate" the collection by slicing it into a smaller collection.
	 */
	abstract public function forPage(
		int $page, 
		int $perPage
	):Collection;

	/**
	 * Partition the collection into two arrays using the given callback or key.
	 */
	abstract public function partition(
		 $key, 
		 $operator = null, 
		 $value = null
	):Collection;

	/**
	 * Get the sum of the given values.
	 */
	abstract public function sum(
		 $callback = null
	);

	/**
	 * Filter items by the given key value pair.
	 */
	abstract public function where(
		 $key, 
		 $operator = null, 
		 $value = null
	):Collection;

	/**
	 * Filter items by the given key value pair using strict comparison.
	 */
	abstract public function whereStrict(
		string $key, 
		 $value
	):Collection;

	/**
	 * Filter items by the given key value pair.
	 */
	abstract public function whereIn(
		string $key, 
		 $values, 
		bool $strict = false
	):Collection;

	/**
	 * Filter items by the given key value pair using strict comparison.
	 */
	abstract public function whereInStrict(
		string $key, 
		 $values
	):Collection;

	/**
	 * Filter items by the given key value pair.
	 */
	abstract public function whereNotIn(
		string $key, 
		 $values, 
		bool $strict = false
	):Collection;

	/**
	 * Filter items by the given key value pair using strict comparison.
	 */
	abstract public function whereNotInStrict(
		string $key, 
		 $values
	):Collection;

	/**
	 * Pass the collection to the given callback and return the result.
	 */
	abstract public function pipe(
		callable $callback
	);

	/**
	 * Reduce the collection to a single value.
	 */
	abstract public function reduce(
		callable $callback, 
		 $initial = null
	);

	/**
	 * Create a collection of all elements that do not pass a given truth test.
	 */
	abstract public function reject(
		 $callback = true
	):Collection;

	/**
	 * Pass the collection to the given callback and then return it.
	 */
	abstract public function tap(
		callable $callback
	):Collection;

	/**
	 * Return only unique items from the collection array using strict comparison.
	 */
	abstract public function uniqueStrict(
		 $key = null
	):Collection;

	/**
	 * Get the collection of items as a plain array.
	 */
	abstract public function toArray(
	):array;

	/**
	 * Convert the object into something JSON serializable.
	 */
	abstract public function jsonSerialize(
	):array;

	/**
	 * Get the collection of items as JSON.
	 */
	abstract public function toJson(
		int $options = 0
	):string;

	/**
	 * Add a method to the list of proxied methods.
	 */
	abstract public static function proxy(
		string $method
	);

	/**
	 * Apply the callback if the given "value" is (or resolves to) truthy.
	 */
	abstract public function when(
		 $value = null, 
		callable $callback = null, 
		callable $default = null
	):Collection;

	/**
	 * Apply the callback if the given "value" is (or resolves to) falsy.
	 */
	abstract public function unless(
		 $value = null, 
		callable $callback = null, 
		callable $default = null
	):Collection;

	/**
	 * Register a custom macro.
	 */
	abstract public static function macro(
		string $name, 
		 $macro
	);

	/**
	 * Checks if macro is registered.
	 */
	abstract public static function hasMacro(
		string $name
	):bool;

}