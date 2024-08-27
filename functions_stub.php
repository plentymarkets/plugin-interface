<?php
/**
 * @template PluginAppClassName of object
 * @param class-string<PluginAppClassName> $abstract
 * @return PluginAppClassName
 */
function pluginApp(
    string $abstract,
    array  $parameters = []
)
{
    return null;
}

function publicPath(
    string $pluginName = null
)
{
    return null;
}

function pluginSetId(): int
{
    return null;
}

