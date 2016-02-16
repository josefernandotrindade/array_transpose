<?php

function array_transpose(array $arr)
{
	$keys	 = array_keys($arr);
	$sum	 = array_values(array_map('count', $arr));

	$transposed = array();

	for ($i = 0; $i < max($sum); $i ++)
	{
		$item = array();

		foreach ($keys as $key)
		{
			$item[$key] = array_key_exists($i, $arr[$key]) ? $arr[$key][$i] : NULL;
		}

		$transposed[] = $item;
	}

	return $transposed;
}
