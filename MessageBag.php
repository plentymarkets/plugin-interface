<?php
namespace Illuminate\Support;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Contracts\Support\MessageBag as MessageBagContract;
use Illuminate\Contracts\Support\MessageProvider;
use JsonSerializable;

class MessageBag 
{

	/**
	 * Get the keys present in the message bag.
	 */
	abstract public function keys(
	):array;

	/**
	 * Add a message to the message bag.
	 */
	abstract public function add(
		string $key, 
		string $message
	):MessageBag;

	/**
	 * Add a message to the message bag if the given conditional is "true".
	 */
	abstract public function addIf(
		bool $boolean, 
		string $key, 
		string $message
	):MessageBag;

	/**
	 * Merge a new array of messages into the message bag.
	 */
	abstract public function merge(
		 $messages
	):MessageBag;

	/**
	 * Determine if messages exist for all of the given keys.
	 */
	abstract public function has(
		 $key
	):bool;

	/**
	 * Determine if messages exist for any of the given keys.
	 */
	abstract public function hasAny(
		 $keys = []
	):bool;

	/**
	 * Get the first message from the message bag for a given key.
	 */
	abstract public function first(
		string $key = null, 
		string $format = null
	):string;

	/**
	 * Get all of the messages from the message bag for a given key.
	 */
	abstract public function get(
		string $key, 
		string $format = null
	):array;

	/**
	 * Get all of the messages for every key in the message bag.
	 */
	abstract public function all(
		string $format = null
	):array;

	/**
	 * Get all of the unique messages for every key in the message bag.
	 */
	abstract public function unique(
		string $format = null
	):array;

	/**
	 * Get the raw messages in the message bag.
	 */
	abstract public function messages(
	):array;

	/**
	 * Get the raw messages in the message bag.
	 */
	abstract public function getMessages(
	):array;

	/**
	 * Get the messages for the instance.
	 */
	abstract public function getMessageBag(
	):Illuminate\Support\MessageBag;

	/**
	 * Get the default message format.
	 */
	abstract public function getFormat(
	):string;

	/**
	 * Set the default message format.
	 */
	abstract public function setFormat(
		string $format = ":message"
	):Illuminate\Support\MessageBag;

	/**
	 * Determine if the message bag has any messages.
	 */
	abstract public function isEmpty(
	):bool;

	/**
	 * Determine if the message bag has any messages.
	 */
	abstract public function isNotEmpty(
	):bool;

	/**
	 * Determine if the message bag has any messages.
	 */
	abstract public function any(
	):bool;

	/**
	 * Get the number of messages in the message bag.
	 */
	abstract public function count(
	):int;

	/**
	 * Get the instance as an array.
	 */
	abstract public function toArray(
	):array;

	/**
	 * Convert the object into something JSON serializable.
	 */
	abstract public function jsonSerialize(
	):array;

	/**
	 * Convert the object to its JSON representation.
	 */
	abstract public function toJson(
		int $options = 0
	):string;

}