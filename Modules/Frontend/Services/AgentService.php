<?php
namespace Plenty\Modules\Frontend\Services;

use Jenssegers\Agent\Agent;

/**
 * Frontend-Service for agent information
 */
abstract class AgentService 
{

	const DETECTION_TYPE_MOBILE = 'mobile';

	const DETECTION_TYPE_EXTENDED = 'extended';

	const VER = '([\w._\+]+)';

	const MOBILE_GRADE_A = 'A';

	const MOBILE_GRADE_B = 'B';

	const MOBILE_GRADE_C = 'C';

	const VERSION = '2.8.41';

	const VERSION_TYPE_STRING = 'text';

	const VERSION_TYPE_FLOAT = 'float';

	/**
	 * Get the current language.
	 */
	abstract public function getLanguages(
	):array;

	/**
	 * Get the current browser.
	 */
	abstract public function getBrowser(
	):string;

	/**
	 * Get the current platform.
	 */
	abstract public function getPlatform(
	):string;

	/**
	 * Get the current device.
	 */
	abstract public function getDevice(
	):string;

	/**
	 * Get information if the device is a desktop.
	 */
	abstract public function getIsDesktop(
	):bool;

	/**
	 * Get the name of the robot.
	 */
	abstract public function getRobotName(
	):string;

	/**
	 * Get information if the visitor is a robot.
	 */
	abstract public function getIsRobot(
	):bool;

	/**
	 * Get the http headers of the agent.
	 */
	abstract public function getHttpHeaders(
	):array;

	/**
	 * Get the information if the device is mobile.
	 */
	abstract public function getIsMobile(
	):bool;

	/**
	 * Get the information if the device is a tablet.
	 */
	abstract public function getIsTablet(
	):bool;

}