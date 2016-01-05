<?php

class FooWarningException extends Exception {}

class FooEmergencyException extends Exception {}

class FooCriticalException extends Exception {}

/**
 * Foo, with Exceptions.
 */
function foo($bar) {
  switch ($bar) {

    case "apple":
      return 0;

    case "banana":
      throw new FooWarningException();

  }
  throw new FooEmergencyException();
}
