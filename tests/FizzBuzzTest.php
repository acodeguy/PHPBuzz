<?php

  use PHPUnit\Framework\TestCase;

  final class FizzBuzzTest extends TestCase {

    public function testReturnsFizzWhenPassed3() {
      $fizzBuzz = new FizzBuzz;
      $result = $fizzBuzz->calculate(3);
      $this->assertEquals($result, 'fizz');
    }

  }
?>