<?php

define('FOO_NORMAL', 0);
define('FOO_WARNING', 1);
define('FOO_EMERGENCY', 2);
define('FOO_CRITICAL', 3);

/**
 * Foo, with error codes.
 */
function foo($bar) {
  switch ($bar) {

    case "apple":
      return FOO_NORMAL;

    case "banana":
      return FOO_WARNING;

  }
  return FOO_EMERGENCY;
}
