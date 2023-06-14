<?php

namespace Plenty\Plugin\Log;

use Plenty\Log\Contracts\LoggerContract;
use Plenty\Modules\Plugin\Annotations\PluginTrait;

/**
 * Reportable trait
 * @package Plenty\Plugin\Log
 * @PluginTrait()
 */
trait Reportable
{
    /**
     * @var null|string
     */
    private $pluginNamespaceReportable = null;

    /**
     * Instantiates Logger using the current namespace and directly reports.
     *
     * @param string $identifier
     * @param string $code
     * @param mixed $additionalInfo
     * @param array $references
     */
    private function report($identifier, $code, $additionalInfo = null, $references = array())
    {
        if (is_null($this->pluginNamespaceReportable)) {
            $classInfo = explode('\\', trim(get_class($this), '\\'));

            $this->pluginNamespaceReportable = array_shift($classInfo);
        }

        /** @var LoggerContract $logger */
        $logger = pluginApp(LoggerFactory::class)->getLogger($this->pluginNamespaceReportable, $identifier);

        if (is_array($references) && count($references)) {
            foreach ($references as $referenceType => $referenceValue) {
                $logger->addReference($referenceType, $referenceValue);
            }
        }

        $logger->report($code, $additionalInfo);
    }
}
