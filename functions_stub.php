<?php

	/**
	 * @template T
	 * @param class-string<T> $abstract
	 * @param array $parameters
	 * @return T
	 */
	 function pluginApp(
		string $abstract, 
		array $parameters = []
	)
	{ return null; }

	 function publicPath(
		string $pluginName = null
	)
	{ return null; }

	 function pluginSetId(
	):int
	{ return null; }

