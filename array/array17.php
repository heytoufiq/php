<?php

$array = [1, 2, 3, 4, 6];

$multiply = array_map(function($element) {
	if ($element % 2 === 1) {
		return $element * 2;
	}

	return $element;

}, $array);

// Our implementation

$data = [
	'name' => 'Toufiq',
	'character' => 'vala na',
	'home' => 'borishal'
];

//________0__1__2__3__4
$array = [1, 2, 3, 4, 6];

$array = [
	0 => 1,
	1 => 2,
	2 => 3,
	3 => 4,
	4 => 6
];

/**
 * @param array $values The data array
 * @param callable $callback The user callback function
 */
function map(array $values, callable $callback) {
	$result = [];

	foreach ($values as $index => $element) {
		$modifiedElement = $callback($element, $index);

		$result[] = $modifiedElement;
	}

	return $result;
}

// result: [1, 3, 5, 7, 10]

$output = map($data, function($element, $index) {
	return $index . ': ' . $element;
});

print_r($output);
