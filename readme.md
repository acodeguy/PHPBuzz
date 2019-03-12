# PHPBuzz
### The FizzBuzz Challenge built using TDD, with PHPUnit

## User Stories

```
As a user
So that I know a number is divisble by three only
I want to see "fizz" output to the screen
```

```
As a user
So that I know a number is divisble by five only
I want to see "buzz" output to the screen
```

```
As a user
So that I know a number is divisble by both three and five
I want to see "fizzbuzz" output to the screen
```

```
As a user
So that I know a number is not divisble three, five or both
I want to see the number itself output to the screen
```

## Technologies
This is written in PHP using the Test-Driven Development methodology with PHPUnit

## Running the Tests
The tests can be run by [installing Composer](https://getcomposer.org), the brilliant dependency manager for PHP.

Once Composer is installed:
1. ```cd /path/to/PHPBuzz```
2. ```composer install```
3. ```./vendor/bin/phpunit --color```
