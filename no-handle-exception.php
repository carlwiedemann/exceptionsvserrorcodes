<?php

include 'exception.inc';

/**
 * No handling of exceptions.
 */

$values = [
  'apple',
  'banana',
  'orange',
];

array_map(function ($value) {

  echo "Calling with $value...\n";

  foo($value);

  echo "Life is good with $value.\n\n";

}, $values);
