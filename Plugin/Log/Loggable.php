<?php

namespace Plenty\Plugin\Log;

use Plenty\Log\Contracts\LoggerContract;
use Plenty\Modules\Plugin\Annotations\PluginTrait;

/**
 * Loggable trait
 * @package Plenty\Plugin\Log
 * @PluginTrait()
 */
trait Loggable
{
    /**
     * @var null|string
     */
    private $pluginNamespace = null;

    /**
     * @param string $identifier
     * @return LoggerContract
     */
    private function getLogger($identifier)
    {
        if (is_null($this->pluginNamespace)) {
            $classInfo = explode('\\', trim(get_class($this), '\\'));

            $this->pluginNamespace = array_shift($classInfo);
        }

        return pluginApp(LoggerFactory::class)->getLogger($this->pluginNamespace, $identifier);
    }
}
