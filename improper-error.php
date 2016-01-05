<?php

include 'error.inc';

/**
 * Properly handling error codes.
 */

$values = [
  'apple',
  'banana',
  'orange',
];

foreach ($values as $value) {

  echo "Calling with $value...\n";

  $foo_result = foo($value);

  if ($foo_result == FOO_WARNING) {
    echo "Something abnormal happened, but we're ok\n";
  }
  elseif ($foo_result == FOO_CRITICAL) {
    echo "Whoa something bad happened, we're done.\n";
    exit();
  }

  echo "Life is good with $value - $foo_result\n\n";

}
