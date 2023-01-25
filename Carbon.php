<?php
namespace Carbon;

use Carbon\Traits\Date;
use Carbon\Traits\DeprecatedProperties;
use DateTime;
use DateTimeInterface;
use DateTimeZone;

class Carbon extends \DateTime 

{
	
public		$year;
	
public		$yearIso;
	
public		$month;
	
public		$day;
	
public		$hour;
	
public		$minute;
	
public		$second;
	
public		$micro;
	
public		$microsecond;
	
public		$timestamp;
	
public		$englishDayOfWeek;
	
public		$shortEnglishDayOfWeek;
	
public		$englishMonth;
	
public		$shortEnglishMonth;
	
public		$milliseconds;
	
public		$millisecond;
	
public		$milli;
	
public		$week;
	
public		$isoWeek;
	
public		$weekYear;
	
public		$isoWeekYear;
	
public		$dayOfYear;
	
public		$age;
	
public		$offset;
	
public		$offsetMinutes;
	
public		$offsetHours;
	
public		$timezone;
	
public		$tz;
	
	/**
	 * Get a copy of the instance.
	 */
	abstract public function copy(
	):Carbon;

	/**
	 * Returns a present instance in the same timezone.
	 */
	abstract public function nowWithSameTz(
	):Carbon;

	/**
	 * Set the date and time all together.
	 */
	abstract public function setDateTime(
		int $year, 
		int $month, 
		int $day, 
		int $hour, 
		int $minute, 
		int $second = 0, 
		int $microseconds = 0
	):Carbon;

	/**
	 * Set the time by time string.
	 */
	abstract public function setTimeFromTimeString(
		string $time
	):Carbon;

	abstract public function timezone(
		 $value
	):Carbon;

	/**
	 * Set the timezone or returns the timezone name if no arguments passed.
	 */
	abstract public function tz(
		 $value = null
	):Carbon;

	/**
	 * Set the year, month, and date for this instance to that of the passed instance.
	 */
	abstract public function setDateFrom(
		 $date = null
	):Carbon;

	/**
	 * Set the hour, minute, second and microseconds for this instance to that of the passed instance.
	 */
	abstract public function setTimeFrom(
		 $date = null
	):Carbon;

	/**
	 * Get the days of the week
	 */
	abstract public static function getDays(
	):array;

	/**
	 * Get the first day of week
	 */
	abstract public static function getWeekStartsAt(
	):int;

	abstract public static function setWeekStartsAt(
		 $day
	);

	/**
	 * Get the last day of week
	 */
	abstract public static function getWeekEndsAt(
	):int;

	abstract public static function setWeekEndsAt(
		 $day
	);

	/**
	 * Get weekend days
	 */
	abstract public static function getWeekendDays(
	):array;

	abstract public static function setWeekendDays(
		array $days
	);

	/**
	 * Determine if a time string will produce a relative date.
	 */
	abstract public static function hasRelativeKeywords(
		string $time
	):bool;

	abstract public static function setUtf8(
		bool $utf8
	);

	/**
	 * Format the instance with the current locale.  You can set the current
locale using setlocale() https://php.net/setlocale.
	 */
	abstract public function formatLocalized(
		string $format
	):string;

	/**
	 * Resets the time to 00:00:00 start of day
	 */
	abstract public function startOfDay(
	):Carbon;

	/**
	 * Resets the time to 23:59:59.999999 end of day
	 */
	abstract public function endOfDay(
	):Carbon;

	/**
	 * Resets the date to the first day of the month and the time to 00:00:00
	 */
	abstract public function startOfMonth(
	):Carbon;

	/**
	 * Resets the date to end of the month and time to 23:59:59.999999
	 */
	abstract public function endOfMonth(
	):Carbon;

	/**
	 * Resets the date to the first day of the quarter and the time to 00:00:00
	 */
	abstract public function startOfQuarter(
	):Carbon;

	/**
	 * Resets the date to end of the quarter and time to 23:59:59.999999
	 */
	abstract public function endOfQuarter(
	):Carbon;

	/**
	 * Resets the date to the first day of the year and the time to 00:00:00
	 */
	abstract public function startOfYear(
	):Carbon;

	/**
	 * Resets the date to end of the year and time to 23:59:59.999999
	 */
	abstract public function endOfYear(
	):Carbon;

	/**
	 * Resets the date to the first day of the decade and the time to 00:00:00
	 */
	abstract public function startOfDecade(
	):Carbon;

	/**
	 * Resets the date to end of the decade and time to 23:59:59.999999
	 */
	abstract public function endOfDecade(
	):Carbon;

	/**
	 * Resets the date to the first day of the century and the time to 00:00:00
	 */
	abstract public function startOfCentury(
	):Carbon;

	/**
	 * Resets the date to end of the century and time to 23:59:59.999999
	 */
	abstract public function endOfCentury(
	):Carbon;

	/**
	 * Resets the date to the first day of week (defined in $weekStartsAt) and the time to 00:00:00
	 */
	abstract public function startOfWeek(
		int $weekStartsAt = null
	):Carbon;

	/**
	 * Resets the date to end of week (defined in $weekEndsAt) and time to 23:59:59.999999
	 */
	abstract public function endOfWeek(
		int $weekEndsAt = null
	):Carbon;

	/**
	 * Modify to start of current hour, minutes and seconds become 0
	 */
	abstract public function startOfHour(
	):Carbon;

	/**
	 * Modify to end of current hour, minutes and seconds become 59
	 */
	abstract public function endOfHour(
	):Carbon;

	/**
	 * Modify to start of current minute, seconds become 0
	 */
	abstract public function startOfMinute(
	):Carbon;

	/**
	 * Modify to end of current minute, seconds become 59
	 */
	abstract public function endOfMinute(
	):Carbon;

	/**
	 * Determines if the instance is equal to another
	 */
	abstract public function eq(
		 $date
	):bool;

	/**
	 * Determines if the instance is equal to another
	 */
	abstract public function equalTo(
		 $date
	):bool;

	/**
	 * Determines if the instance is not equal to another
	 */
	abstract public function ne(
		 $date
	):bool;

	/**
	 * Determines if the instance is not equal to another
	 */
	abstract public function notEqualTo(
		 $date
	):bool;

	/**
	 * Determines if the instance is greater (after) than another
	 */
	abstract public function gt(
		 $date
	):bool;

	/**
	 * Determines if the instance is greater (after) than another
	 */
	abstract public function greaterThan(
		 $date
	):bool;

	/**
	 * Determines if the instance is greater (after) than or equal to another
	 */
	abstract public function gte(
		 $date
	):bool;

	/**
	 * Determines if the instance is greater (after) than or equal to another
	 */
	abstract public function greaterThanOrEqualTo(
		 $date
	):bool;

	/**
	 * Determines if the instance is less (before) than another
	 */
	abstract public function lt(
		 $date
	):bool;

	/**
	 * Determines if the instance is less (before) than another
	 */
	abstract public function lessThan(
		 $date
	):bool;

	/**
	 * Determines if the instance is less (before) or equal to another
	 */
	abstract public function lte(
		 $date
	):bool;

	/**
	 * Determines if the instance is less (before) or equal to another
	 */
	abstract public function lessThanOrEqualTo(
		 $date
	):bool;

	/**
	 * Determines if the instance is between two others.
	 */
	abstract public function between(
		 $date1, 
		 $date2, 
		bool $equal = true
	):bool;

	/**
	 * Determines if the instance is a weekday.
	 */
	abstract public function isWeekday(
	):bool;

	/**
	 * Determines if the instance is a weekend day.
	 */
	abstract public function isWeekend(
	):bool;

	/**
	 * Determines if the instance is yesterday.
	 */
	abstract public function isYesterday(
	):bool;

	/**
	 * Determines if the instance is today.
	 */
	abstract public function isToday(
	):bool;

	/**
	 * Determines if the instance is tomorrow.
	 */
	abstract public function isTomorrow(
	):bool;

	/**
	 * Determines if the instance is in the future, ie. greater (after) than now.
	 */
	abstract public function isFuture(
	):bool;

	/**
	 * Determines if the instance is in the past, ie. less (before) than now.
	 */
	abstract public function isPast(
	):bool;

	/**
	 * Determines if the instance is a leap year.
	 */
	abstract public function isLeapYear(
	):bool;

	/**
	 * Determines if the instance is a long year (using calendar year).
	 */
	abstract public function isLongYear(
	):bool;

	/**
	 * Compares the formatted values of the two dates.
	 */
	abstract public function isSameAs(
		string $format, 
		 $date = null
	):bool;

	/**
	 * Checks if the passed in date is in the same quarter as the instance quarter (and year if needed).
	 */
	abstract public function isSameQuarter(
		 $date = null, 
		bool $ofSameYear = true
	):bool;

	/**
	 * Checks if the passed in date is in the same month as the instance´s month.
	 */
	abstract public function isSameMonth(
		 $date = null, 
		bool $ofSameYear = true
	):bool;

	/**
	 * Checks if this day is a specific day of the week.
	 */
	abstract public function isDayOfWeek(
		int $dayOfWeek
	):bool;

	/**
	 * Check if its the birthday. Compares the date/month values of the two dates.
	 */
	abstract public function isBirthday(
		 $date = null
	):bool;

	/**
	 * Check if today is the last day of the Month
	 */
	abstract public function isLastOfMonth(
	):bool;

	/**
	 * Checks if the (date)time string is in a given format.
	 */
	abstract public static function hasFormat(
		string $date, 
		string $format
	):bool;

	/**
	 * Format the instance as date
	 */
	abstract public function toDateString(
	):string;

	/**
	 * Format the instance as a readable date
	 */
	abstract public function toFormattedDateString(
	):string;

	/**
	 * Format the instance as time
	 */
	abstract public function toTimeString(
		string $unitPrecision = "second"
	):string;

	/**
	 * Format the instance as date and time
	 */
	abstract public function toDateTimeString(
		string $unitPrecision = "second"
	):string;

	/**
	 * Format the instance with day, date and time
	 */
	abstract public function toDayDateTimeString(
	):string;

	/**
	 * Format the instance as ATOM
	 */
	abstract public function toAtomString(
	):string;

	/**
	 * Format the instance as COOKIE
	 */
	abstract public function toCookieString(
	):string;

	/**
	 * Format the instance as ISO8601
	 */
	abstract public function toIso8601String(
	):string;

	/**
	 * Format the instance as RFC822
	 */
	abstract public function toRfc822String(
	):string;

	/**
	 * Convert the instance to UTC and return as Zulu ISO8601
	 */
	abstract public function toIso8601ZuluString(
		string $unitPrecision = "second"
	):string;

	/**
	 * Format the instance as RFC850
	 */
	abstract public function toRfc850String(
	):string;

	/**
	 * Format the instance as RFC1036
	 */
	abstract public function toRfc1036String(
	):string;

	/**
	 * Format the instance as RFC1123
	 */
	abstract public function toRfc1123String(
	):string;

	/**
	 * Format the instance as RFC2822
	 */
	abstract public function toRfc2822String(
	):string;

	/**
	 * Format the instance as RFC3339
	 */
	abstract public function toRfc3339String(
		bool $extended = false
	):string;

	/**
	 * Format the instance as RSS
	 */
	abstract public function toRssString(
	):string;

	/**
	 * Format the instance as W3C
	 */
	abstract public function toW3cString(
	):string;

	/**
	 * Format the instance as RFC7231
	 */
	abstract public function toRfc7231String(
	):string;

	/**
	 * Get default array representation.
	 */
	abstract public function toArray(
	):array;

	/**
	 * Reset the format used to the default when type juggling a Carbon instance to a string
	 */
	abstract public static function resetToStringFormat(
	);

	abstract public static function setToStringFormat(
		 $format
	);

	/**
	 * Create a Carbon instance from a DateTime one.
	 */
	abstract public static function instance(
		\DateTimeInterface $date
	):Carbon;

	/**
	 * Create a carbon instance from a string.
	 */
	abstract public static function parse(
		 $time = null, 
		 $tz = null
	):Carbon;

	/**
	 * Get a Carbon instance for the current date and time.
	 */
	abstract public static function now(
		 $tz = null
	):Carbon;

	/**
	 * Create a Carbon instance for today.
	 */
	abstract public static function today(
		 $tz = null
	):Carbon;

	/**
	 * Create a Carbon instance for tomorrow.
	 */
	abstract public static function tomorrow(
		 $tz = null
	):Carbon;

	/**
	 * Create a Carbon instance for yesterday.
	 */
	abstract public static function yesterday(
		 $tz = null
	):Carbon;

	/**
	 * Create a Carbon instance for the greatest supported date.
	 */
	abstract public static function maxValue(
	):Carbon;

	/**
	 * Create a Carbon instance for the lowest supported date.
	 */
	abstract public static function minValue(
	):Carbon;

	/**
	 * Create a new Carbon instance from a specific date and time.
	 */
	abstract public static function create(
		 $year = 0, 
		int $month = 1, 
		int $day = 1, 
		int $hour = 0, 
		int $minute = 0, 
		int $second = 0, 
		 $tz = null
	):Carbon;

	/**
	 * Create a new safe Carbon instance from a specific date and time.
	 */
	abstract public static function createSafe(
		int $year = null, 
		int $month = null, 
		int $day = null, 
		int $hour = null, 
		int $minute = null, 
		int $second = null, 
		 $tz = null
	):Carbon;

	/**
	 * Create a Carbon instance from just a date. The time portion is set to now.
	 */
	abstract public static function createFromDate(
		int $year = null, 
		int $month = null, 
		int $day = null, 
		 $tz = null
	):Carbon;

	/**
	 * Create a Carbon instance from just a date. The time portion is set to midnight.
	 */
	abstract public static function createMidnightDate(
		int $year = null, 
		int $month = null, 
		int $day = null, 
		 $tz = null
	):Carbon;

	/**
	 * Create a Carbon instance from just a time. The date portion is set to today.
	 */
	abstract public static function createFromTime(
		int $hour = 0, 
		int $minute = 0, 
		int $second = 0, 
		 $tz = null
	):Carbon;

	/**
	 * Create a Carbon instance from a time string. The date portion is set to today.
	 */
	abstract public static function createFromTimeString(
		string $time, 
		 $tz = null
	):Carbon;

	/**
	 * Get the difference in years
	 */
	abstract public function diffInYears(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * Get the difference in months rounded down.
	 */
	abstract public function diffInMonths(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * Get the difference in weeks rounded down.
	 */
	abstract public function diffInWeeks(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * Get the difference in days rounded down.
	 */
	abstract public function diffInDays(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * Get the difference in weekdays rounded down.
	 */
	abstract public function diffInWeekdays(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * Get the difference in weekend days using a filter rounded down.
	 */
	abstract public function diffInWeekendDays(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * Get the difference in hours rounded down.
	 */
	abstract public function diffInHours(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * Get the difference in hours rounded down using timestamps.
	 */
	abstract public function diffInRealHours(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * Get the difference in minutes rounded down.
	 */
	abstract public function diffInMinutes(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * Get the difference in minutes rounded down using timestamps.
	 */
	abstract public function diffInRealMinutes(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * Get the difference in seconds rounded down.
	 */
	abstract public function diffInSeconds(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * Get the difference in seconds using timestamps.
	 */
	abstract public function diffInRealSeconds(
		 $date = null, 
		bool $absolute = true
	):int;

	/**
	 * The number of seconds since midnight.
	 */
	abstract public function secondsSinceMidnight(
	):int;

	/**
	 * The number of seconds until 23:59:59.
	 */
	abstract public function secondsUntilEndOfDay(
	):int;

	/**
	 * Get the difference in a human readable format in the current locale from current instance to an other
instance given (or now if null given).
	 */
	abstract public function diffForHumans(
		 $other = null, 
		 $syntax = null, 
		bool $short = false, 
		int $parts = 1, 
		int $options = null
	):string;

	/**
	 * Register a custom macro.
	 */
	abstract public static function macro(
		string $name, 
		 $macro
	);

	/**
	 * Checks if macro is registered globally.
	 */
	abstract public static function hasMacro(
		string $name
	):bool;

	/**
	 * get midday/noon hour
	 */
	abstract public static function getMidDayAt(
	):int;

	abstract public static function setMidDayAt(
		int $hour
	);

	/**
	 * Modify to midday, default to self::$midDayAt
	 */
	abstract public function midDay(
	):Carbon;

	/**
	 * Modify to the next occurrence of a given modifier such as a day of
the week. If no modifier is provided, modify to the next occurrence
of the current day of the week. Use the supplied constants
to indicate the desired dayOfWeek, ex. static::MONDAY.
	 */
	abstract public function next(
		 $modifier = null
	):Carbon;

	/**
	 * Go forward to the next weekday.
	 */
	abstract public function nextWeekday(
	):Carbon;

	/**
	 * Go backward to the previous weekday.
	 */
	abstract public function previousWeekday(
	):Carbon;

	/**
	 * Go forward to the next weekend day.
	 */
	abstract public function nextWeekendDay(
	):Carbon;

	/**
	 * Go backward to the previous weekend day.
	 */
	abstract public function previousWeekendDay(
	):Carbon;

	/**
	 * Modify to the previous occurrence of a given modifier such as a day of
the week. If no dayOfWeek is provided, modify to the previous occurrence
of the current day of the week. Use the supplied constants
to indicate the desired dayOfWeek, ex. static::MONDAY.
	 */
	abstract public function previous(
		 $modifier = null
	):Carbon;

	/**
	 * Modify to the first occurrence of a given day of the week
in the current month. If no dayOfWeek is provided, modify to the
first day of the current month.  Use the supplied constants
to indicate the desired dayOfWeek, ex. static::MONDAY.
	 */
	abstract public function firstOfMonth(
		int $dayOfWeek = null
	):Carbon;

	/**
	 * Modify to the last occurrence of a given day of the week
in the current month. If no dayOfWeek is provided, modify to the
last day of the current month.  Use the supplied constants
to indicate the desired dayOfWeek, ex. static::MONDAY.
	 */
	abstract public function lastOfMonth(
		int $dayOfWeek = null
	):Carbon;

	/**
	 * Modify to the given occurrence of a given day of the week
in the current month. If the calculated occurrence is outside the scope
of the current month, then return false and no modifications are made.
	 */
	abstract public function nthOfMonth(
		int $nth, 
		int $dayOfWeek
	);

	/**
	 * Modify to the first occurrence of a given day of the week
in the current quarter. If no dayOfWeek is provided, modify to the
first day of the current quarter.  Use the supplied constants
to indicate the desired dayOfWeek, ex. static::MONDAY.
	 */
	abstract public function firstOfQuarter(
		int $dayOfWeek = null
	):Carbon;

	/**
	 * Modify to the last occurrence of a given day of the week
in the current quarter. If no dayOfWeek is provided, modify to the
last day of the current quarter.  Use the supplied constants
to indicate the desired dayOfWeek, ex. static::MONDAY.
	 */
	abstract public function lastOfQuarter(
		int $dayOfWeek = null
	):Carbon;

	/**
	 * Modify to the given occurrence of a given day of the week
in the current quarter. If the calculated occurrence is outside the scope
of the current quarter, then return false and no modifications are made.
	 */
	abstract public function nthOfQuarter(
		int $nth, 
		int $dayOfWeek
	);

	/**
	 * Modify to the first occurrence of a given day of the week
in the current year. If no dayOfWeek is provided, modify to the
first day of the current year.  Use the supplied constants
to indicate the desired dayOfWeek, ex. static::MONDAY.
	 */
	abstract public function firstOfYear(
		int $dayOfWeek = null
	):Carbon;

	/**
	 * Modify to the last occurrence of a given day of the week
in the current year. If no dayOfWeek is provided, modify to the
last day of the current year.  Use the supplied constants
to indicate the desired dayOfWeek, ex. static::MONDAY.
	 */
	abstract public function lastOfYear(
		int $dayOfWeek = null
	):Carbon;

	/**
	 * Modify to the given occurrence of a given day of the week
in the current year. If the calculated occurrence is outside the scope
of the current year, then return false and no modifications are made.
	 */
	abstract public function nthOfYear(
		int $nth, 
		int $dayOfWeek
	);

	/**
	 * Modify the current instance to the average of a given instance (default now) and the current instance
(second-precision).
	 */
	abstract public function average(
		 $date = null
	):Carbon;

	/**
	 * Get the closest date from the instance (second-precision).
	 */
	abstract public function closest(
		 $date1, 
		 $date2
	):Carbon;

	/**
	 * Get the farthest date from the instance (second-precision).
	 */
	abstract public function farthest(
		 $date1, 
		 $date2
	):Carbon;

	/**
	 * Get the minimum instance between a given instance (default now) and the current instance.
	 */
	abstract public function min(
		 $date = null
	):Carbon;

	/**
	 * Get the minimum instance between a given instance (default now) and the current instance.
	 */
	abstract public function minimum(
		 $date = null
	):Carbon;

	/**
	 * Get the maximum instance between a given instance (default now) and the current instance.
	 */
	abstract public function max(
		 $date = null
	):Carbon;

	/**
	 * Get the maximum instance between a given instance (default now) and the current instance.
	 */
	abstract public function maximum(
		 $date = null
	):Carbon;

	abstract public static function useMonthsOverflow(
		bool $monthsOverflow = true
	);

	abstract public static function resetMonthsOverflow(
	);

	/**
	 * Get the month overflow global behavior (can be overridden in specific instances).
	 */
	abstract public static function shouldOverflowMonths(
	):bool;

	abstract public static function useYearsOverflow(
		bool $yearsOverflow = true
	);

	abstract public static function resetYearsOverflow(
	);

	/**
	 * Get the month overflow global behavior (can be overridden in specific instances).
	 */
	abstract public static function shouldOverflowYears(
	):bool;

	abstract public static function setHumanDiffOptions(
		int $humanDiffOptions
	);

	abstract public static function enableHumanDiffOption(
		int $humanDiffOption
	);

	abstract public static function disableHumanDiffOption(
		int $humanDiffOption
	);

	/**
	 * Return default humanDiff() options (merged flags as integer).
	 */
	abstract public static function getHumanDiffOptions(
	):int;

	/**
	 * Return a serialized string of the instance.
	 */
	abstract public function serialize(
	):string;

	/**
	 * Create an instance from a serialized string.
	 */
	abstract public static function fromSerialized(
		string $value
	):Carbon;

	/**
	 * Prepare the object for JSON serialization.
	 */
	abstract public function jsonSerialize(
	);

	abstract public static function serializeUsing(
		callable $callback
	);

	/**
	 * Create a Carbon instance from a timestamp and set the timezone (use default one if not specified).
	 */
	abstract public static function createFromTimestamp(
		 $timestamp, 
		 $tz = null
	):Carbon;

	/**
	 * Create a Carbon instance from an timestamp keeping the timezone to UTC.
	 */
	abstract public static function createFromTimestampUTC(
		 $timestamp
	):Carbon;

	/**
	 * Create a Carbon instance from a timestamp in milliseconds.
	 */
	abstract public static function createFromTimestampMs(
		 $timestamp, 
		 $tz = null
	):Carbon;

	/**
	 * Set the instance's timestamp.
	 */
	abstract public function timestamp(
		 $unixTimestamp
	):Carbon;

	/**
	 * Checks if the instance day is sunday.
	 */
	abstract public function isSunday(
	):bool;

	/**
	 * Checks if the instance day is monday.
	 */
	abstract public function isMonday(
	):bool;

	/**
	 * Checks if the instance day is tuesday.
	 */
	abstract public function isTuesday(
	):bool;

	/**
	 * Checks if the instance day is wednesday.
	 */
	abstract public function isWednesday(
	):bool;

	/**
	 * Checks if the instance day is thursday.
	 */
	abstract public function isThursday(
	):bool;

	/**
	 * Checks if the instance day is friday.
	 */
	abstract public function isFriday(
	):bool;

	/**
	 * Checks if the instance day is saturday.
	 */
	abstract public function isSaturday(
	):bool;

	/**
	 * Checks if the given date is in the same year as the instance. If null passed, compare to now (with the same timezone).
	 */
	abstract public function isSameYear(
		 $date = null
	):bool;

	/**
	 * Checks if the instance is in the same year as the current moment.
	 */
	abstract public function isCurrentYear(
	):bool;

	/**
	 * Checks if the instance is in the same year as the current moment next year.
	 */
	abstract public function isNextYear(
	):bool;

	/**
	 * Checks if the instance is in the same year as the current moment last year.
	 */
	abstract public function isLastYear(
	):bool;

	/**
	 * Checks if the instance is in the same week as the current moment next week.
	 */
	abstract public function isNextWeek(
	):bool;

	/**
	 * Checks if the instance is in the same week as the current moment last week.
	 */
	abstract public function isLastWeek(
	):bool;

	/**
	 * Checks if the given date is in the same day as the instance. If null passed, compare to now (with the same timezone).
	 */
	abstract public function isSameDay(
		 $date = null
	):bool;

	/**
	 * Checks if the instance is in the same month as the current moment.
	 */
	abstract public function isCurrentMonth(
	):bool;

	/**
	 * Checks if the instance is in the same month as the current moment next month.
	 */
	abstract public function isNextMonth(
	):bool;

	/**
	 * Checks if the instance is in the same month as the current moment last month.
	 */
	abstract public function isLastMonth(
	):bool;

	/**
	 * Checks if the instance is in the same quarter as the current moment.
	 */
	abstract public function isCurrentQuarter(
	):bool;

	/**
	 * Checks if the instance is in the same quarter as the current moment next quarter.
	 */
	abstract public function isNextQuarter(
	):bool;

	/**
	 * Checks if the instance is in the same quarter as the current moment last quarter.
	 */
	abstract public function isLastQuarter(
	):bool;

	/**
	 * Set current instance year to the given value.
	 */
	abstract public function year(
		int $value
	):Carbon;

	/**
	 * Set current instance month to the given value.
	 */
	abstract public function month(
		int $value
	):Carbon;

	/**
	 * Set current instance day to the given value.
	 */
	abstract public function day(
		int $value
	):Carbon;

	/**
	 * Set current instance hour to the given value.
	 */
	abstract public function hour(
		int $value
	):Carbon;

	/**
	 * Set current instance minute to the given value.
	 */
	abstract public function minute(
		int $value
	):Carbon;

	/**
	 * Set current instance second to the given value.
	 */
	abstract public function second(
		int $value
	):Carbon;

	/**
	 * Add years (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function addYears(
		int $value = 1
	):Carbon;

	/**
	 * Add one year to the instance (using date interval).
	 */
	abstract public function addYear(
	):Carbon;

	/**
	 * Sub years (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function subYears(
		int $value = 1
	):Carbon;

	/**
	 * Sub one year to the instance (using date interval).
	 */
	abstract public function subYear(
	):Carbon;

	/**
	 * Add years (the $value count passed in) to the instance (using date interval) with overflow explicitly allowed.
	 */
	abstract public function addYearsWithOverflow(
		int $value = 1
	):Carbon;

	/**
	 * Add one year to the instance (using date interval) with overflow explicitly allowed.
	 */
	abstract public function addYearWithOverflow(
	):Carbon;

	/**
	 * Sub years (the $value count passed in) to the instance (using date interval) with overflow explicitly allowed.
	 */
	abstract public function subYearsWithOverflow(
		int $value = 1
	):Carbon;

	/**
	 * Sub one year to the instance (using date interval) with overflow explicitly allowed.
	 */
	abstract public function subYearWithOverflow(
	):Carbon;

	/**
	 * Add years (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
	 */
	abstract public function addYearsNoOverflow(
		int $value = 1
	):Carbon;

	/**
	 * Add one year to the instance (using date interval) with overflow explicitly forbidden.
	 */
	abstract public function addYearNoOverflow(
	):Carbon;

	/**
	 * Sub years (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
	 */
	abstract public function subYearsNoOverflow(
		int $value = 1
	):Carbon;

	/**
	 * Sub one year to the instance (using date interval) with overflow explicitly forbidden.
	 */
	abstract public function subYearNoOverflow(
	):Carbon;

	/**
	 * Add months (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function addMonths(
		int $value = 1
	):Carbon;

	/**
	 * Add one month to the instance (using date interval).
	 */
	abstract public function addMonth(
	):Carbon;

	/**
	 * Sub months (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function subMonths(
		int $value = 1
	):Carbon;

	/**
	 * Sub one month to the instance (using date interval).
	 */
	abstract public function subMonth(
	):Carbon;

	/**
	 * Add months (the $value count passed in) to the instance (using date interval) with overflow explicitly allowed.
	 */
	abstract public function addMonthsWithOverflow(
		int $value = 1
	):Carbon;

	/**
	 * Add one month to the instance (using date interval) with overflow explicitly allowed.
	 */
	abstract public function addMonthWithOverflow(
	):Carbon;

	/**
	 * Sub months (the $value count passed in) to the instance (using date interval) with overflow explicitly allowed.
	 */
	abstract public function subMonthsWithOverflow(
		int $value = 1
	):Carbon;

	/**
	 * Sub one month to the instance (using date interval) with overflow explicitly allowed.
	 */
	abstract public function subMonthWithOverflow(
	):Carbon;

	/**
	 * Add months (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
	 */
	abstract public function addMonthsNoOverflow(
		int $value = 1
	):Carbon;

	/**
	 * Add one month to the instance (using date interval) with overflow explicitly forbidden.
	 */
	abstract public function addMonthNoOverflow(
	):Carbon;

	/**
	 * Sub months (the $value count passed in) to the instance (using date interval) with overflow explicitly forbidden.
	 */
	abstract public function subMonthsNoOverflow(
		int $value = 1
	):Carbon;

	/**
	 * Sub one month to the instance (using date interval) with overflow explicitly forbidden.
	 */
	abstract public function subMonthNoOverflow(
	):Carbon;

	/**
	 * Add days (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function addDays(
		int $value = 1
	):Carbon;

	/**
	 * Add one day to the instance (using date interval).
	 */
	abstract public function addDay(
	):Carbon;

	/**
	 * Sub days (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function subDays(
		int $value = 1
	):Carbon;

	/**
	 * Sub one day to the instance (using date interval).
	 */
	abstract public function subDay(
	):Carbon;

	/**
	 * Add hours (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function addHours(
		int $value = 1
	):Carbon;

	/**
	 * Add one hour to the instance (using date interval).
	 */
	abstract public function addHour(
	):Carbon;

	/**
	 * Sub hours (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function subHours(
		int $value = 1
	):Carbon;

	/**
	 * Sub one hour to the instance (using date interval).
	 */
	abstract public function subHour(
	):Carbon;

	/**
	 * Add minutes (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function addMinutes(
		int $value = 1
	):Carbon;

	/**
	 * Add one minute to the instance (using date interval).
	 */
	abstract public function addMinute(
	):Carbon;

	/**
	 * Sub minutes (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function subMinutes(
		int $value = 1
	):Carbon;

	/**
	 * Sub one minute to the instance (using date interval).
	 */
	abstract public function subMinute(
	):Carbon;

	/**
	 * Add seconds (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function addSeconds(
		int $value = 1
	):Carbon;

	/**
	 * Add one second to the instance (using date interval).
	 */
	abstract public function addSecond(
	):Carbon;

	/**
	 * Sub seconds (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function subSeconds(
		int $value = 1
	):Carbon;

	/**
	 * Sub one second to the instance (using date interval).
	 */
	abstract public function subSecond(
	):Carbon;

	/**
	 * Add centuries (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function addCenturies(
		int $value = 1
	):Carbon;

	/**
	 * Add one century to the instance (using date interval).
	 */
	abstract public function addCentury(
	):Carbon;

	/**
	 * Sub centuries (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function subCenturies(
		int $value = 1
	):Carbon;

	/**
	 * Sub one century to the instance (using date interval).
	 */
	abstract public function subCentury(
	):Carbon;

	/**
	 * Add quarters (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function addQuarters(
		int $value = 1
	):Carbon;

	/**
	 * Add one quarter to the instance (using date interval).
	 */
	abstract public function addQuarter(
	):Carbon;

	/**
	 * Sub quarters (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function subQuarters(
		int $value = 1
	):Carbon;

	/**
	 * Sub one quarter to the instance (using date interval).
	 */
	abstract public function subQuarter(
	):Carbon;

	/**
	 * Add weeks (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function addWeeks(
		int $value = 1
	):Carbon;

	/**
	 * Add one week to the instance (using date interval).
	 */
	abstract public function addWeek(
	):Carbon;

	/**
	 * Sub weeks (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function subWeeks(
		int $value = 1
	):Carbon;

	/**
	 * Sub one week to the instance (using date interval).
	 */
	abstract public function subWeek(
	):Carbon;

	/**
	 * Add weekdays (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function addWeekdays(
		int $value = 1
	):Carbon;

	/**
	 * Add one weekday to the instance (using date interval).
	 */
	abstract public function addWeekday(
	):Carbon;

	/**
	 * Sub weekdays (the $value count passed in) to the instance (using date interval).
	 */
	abstract public function subWeekdays(
		int $value = 1
	):Carbon;

	/**
	 * Sub one weekday to the instance (using date interval).
	 */
	abstract public function subWeekday(
	):Carbon;

	/**
	 * Add seconds (the $value count passed in) to the instance (using timestamp).
	 */
	abstract public function addRealSeconds(
		int $value = 1
	):Carbon;

	/**
	 * Add one second to the instance (using timestamp).
	 */
	abstract public function addRealSecond(
	):Carbon;

	/**
	 * Sub seconds (the $value count passed in) to the instance (using timestamp).
	 */
	abstract public function subRealSeconds(
		int $value = 1
	):Carbon;

	/**
	 * Sub one second to the instance (using timestamp).
	 */
	abstract public function subRealSecond(
	):Carbon;

	/**
	 * Add minutes (the $value count passed in) to the instance (using timestamp).
	 */
	abstract public function addRealMinutes(
		int $value = 1
	):Carbon;

	/**
	 * Add one minute to the instance (using timestamp).
	 */
	abstract public function addRealMinute(
	):Carbon;

	/**
	 * Sub minutes (the $value count passed in) to the instance (using timestamp).
	 */
	abstract public function subRealMinutes(
		int $value = 1
	):Carbon;

	/**
	 * Sub one minute to the instance (using timestamp).
	 */
	abstract public function subRealMinute(
	):Carbon;

	/**
	 * Add hours (the $value count passed in) to the instance (using timestamp).
	 */
	abstract public function addRealHours(
		int $value = 1
	):Carbon;

	/**
	 * Add one hour to the instance (using timestamp).
	 */
	abstract public function addRealHour(
	):Carbon;

	/**
	 * Sub hours (the $value count passed in) to the instance (using timestamp).
	 */
	abstract public function subRealHours(
		int $value = 1
	):Carbon;

	/**
	 * Sub one hour to the instance (using timestamp).
	 */
	abstract public function subRealHour(
	):Carbon;

}