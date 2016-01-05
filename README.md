# Exceptions vs Error Codes

Examples inspired by

* [Exceptions vs. status returns](http://nedbatchelder.com/text/exceptions-vs-status.html)
* [Exceptions in the rainforest](http://nedbatchelder.com/text/exceptions-in-the-rainforest.html)

### proper-error.php

    $ php -f proper-error.php
    Calling with apple...
    Life is good with apple
    
    Calling with banana...
    Something abnormal happened, but we're ok
    Life is good with banana
    
    Calling with orange...
    Whoa something bad happened, we're done.

### proper-exception.php

    $ php -f proper-exception.php
    Calling with apple...
    Life is good with apple
    
    Calling with banana...
    Something abnormal happened, but we're ok
    Life is good with banana
    
    Calling with orange...
    Whoa something bad happened, we're done.

### improper-error.php

    $ php -f improper-error.php
    Calling with apple...
    Life is good with apple
    
    Calling with banana...
    Something abnormal happened, but we're ok
    Life is good with banana
    
    Calling with orange...
    Life is good with orange

### improper-exception.php

    $ php -f improper-exception.php
    Calling with apple...
    Life is good with apple
    
    Calling with banana...
    Something abnormal happened, but we're ok
    Life is good with banana
    
    Calling with orange...
    PHP Warning:  array_map(): An error occurred while invoking the map callback in /Users/c4rl/_src/exceptionsvserrorcodes/improper-exception.php on line 32
    PHP Stack trace:
    PHP   1. {main}() /Users/c4rl/_src/exceptionsvserrorcodes/improper-exception.php:0
    PHP   2. array_map() /Users/c4rl/_src/exceptionsvserrorcodes/improper-exception.php:32
    
    Warning: array_map(): An error occurred while invoking the map callback in /Users/c4rl/_src/exceptionsvserrorcodes/improper-exception.php on line 32
    
    Call Stack:
        0.0004     228992   1. {main}() /Users/c4rl/_src/exceptionsvserrorcodes/improper-exception.php:0
        0.0010     249440   2. array_map() /Users/c4rl/_src/exceptionsvserrorcodes/improper-exception.php:32
    
    PHP Fatal error:  Uncaught exception 'FooEmergencyException' in /Users/c4rl/_src/exceptionsvserrorcodes/exception.inc:22
    Stack trace:
    #0 /Users/c4rl/_src/exceptionsvserrorcodes/improper-exception.php(20): foo('orange')
    #1 [internal function]: {closure}('orange')
    #2 /Users/c4rl/_src/exceptionsvserrorcodes/improper-exception.php(32): array_map(Object(Closure), Array)
    #3 {main}
      thrown in /Users/c4rl/_src/exceptionsvserrorcodes/exception.inc on line 22
    
    Fatal error: Uncaught exception 'FooEmergencyException' in /Users/c4rl/_src/exceptionsvserrorcodes/exception.inc on line 22
    
    FooEmergencyException:  in /Users/c4rl/_src/exceptionsvserrorcodes/exception.inc on line 22
    
    Call Stack:
        0.0004     228992   1. {main}() /Users/c4rl/_src/exceptionsvserrorcodes/improper-exception.php:0
        0.0010     249440   2. array_map() /Users/c4rl/_src/exceptionsvserrorcodes/improper-exception.php:32
        0.0016     250640   3. {closure:/Users/c4rl/_src/exceptionsvserrorcodes/improper-exception.php:15-32}() /Users/c4rl/_src/exceptionsvserrorcodes/improper-exception.php:32
        0.0016     250640   4. foo() /Users/c4rl/_src/exceptionsvserrorcodes/improper-exception.php:20
