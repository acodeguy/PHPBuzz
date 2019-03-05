<?php

  use PHPUnit\Framework\TestCase;

  final class FizzBuzzTest extends TestCase {

    public function testReturnsFizzWhenPassed3() {
      $fizzBuzz = new FizzBuzz;
      $result = $fizzBuzz->calculate(3);
      $this->assertEquals($result, 'fizz');
    }

    public function testReturnsBuzzWhenPassed5() {
      $fizzBuzz = new FizzBuzz;
      $result = $fizzBuzz->calculate(5);
      $this->assertEquals($result, 'buzz');
    }

    public function testReturnsFizzBuzzWhenPassed15() {
      $fizzBuzz = new FizzBuzz;
      $result = $fizzBuzz->calculate(15);
      $this->assertEquals($result, 'fizzbuzz');
    }

  }
?>