# Exceptions vs Error Codes

Examples inspired by

* [Exceptions vs. status returns](http://nedbatchelder.com/text/exceptions-vs-status.html)
* [Exceptions in the rainforest](http://nedbatchelder.com/text/exceptions-in-the-rainforest.html)

### proper-error.php

    $ php -f proper-error.php
    Calling with apple...
    Life is good with apple - 0
    
    Calling with banana...
    Something abnormal happened, but we're ok
    Life is good with banana - 1
    
    Calling with orange...
    Whoa something bad happened, we're done.

### proper-exception.php

    $ php -f proper-exception.php
    Calling with apple...
    Life is good with apple - 0
    
    Calling with banana...
    Something abnormal happened, but we're ok
    Life is good with banana - 0
    
    Calling with orange...
    Whoa something bad happened, we're done.

### improper-error.php

    $ php -f improper-error.php
    Calling with apple...
    Life is good with apple - 0
    
    Calling with banana...
    Something abnormal happened, but we're ok
    Life is good with banana - 1
    
    Calling with orange...
    Life is good with orange - 2
    
    ➜  errors_exceptions

### improper-exception.php

    $ php -f improper-exception.php
    Calling with apple...
    Life is good with apple - 0
    
    Calling with banana...
    Something abnormal happened, but we're ok
    Life is good with banana - 0
    
    Calling with orange...
    PHP Fatal error:  Uncaught exception 'FooEmergencyException' in /Users/c4rl/_src/errors_exceptions/exception.inc:22
    Stack trace:
    #0 /Users/c4rl/_src/errors_exceptions/improper-exception.php(20): foo('orange')
    #1 {main}
      thrown in /Users/c4rl/_src/errors_exceptions/exception.inc on line 22
    
    Fatal error: Uncaught exception 'FooEmergencyException' in /Users/c4rl/_src/errors_exceptions/exception.inc on line 22
    
    FooEmergencyException:  in /Users/c4rl/_src/errors_exceptions/exception.inc on line 22
    
    Call Stack:
        0.0002     228104   1. {main}() /Users/c4rl/_src/errors_exceptions/improper-exception.php:0
        0.0010     252144   2. foo() /Users/c4rl/_src/errors_exceptions/improper-exception.php:20
