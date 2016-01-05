<?php

include 'exception.inc';

/**
 * Properly handling exceptions.
 */

$values = [
  'apple',
  'banana',
  'orange',
];

foreach ($values as $value) {

  echo "Calling with $value...\n";

  try {
    $foo_result = foo($value);
  }
  catch (FooWarningException $e) {
    echo "Something abnormal happened, but we're ok\n";
  }
  catch (FooEmergencyException $e) {
    echo "Whoa something bad happened, we're done.\n";
    exit();
  }

  echo "Life is good with $value - $foo_result\n\n";

}
