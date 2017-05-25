<?php
use PHPUnit\Framework\TestCase;
use CodingKatasPHP\Calculator;

class CalculatorTests extends TestCase{
	function setUp(){
		$this->calculator = new \CodingKatasPHP\Calculator;
	}

	function testCalculatorAddReturnsSumOfTwoNumbers(){
		$this->assertEquals( 10,  $this->calculator->add( 5, 5 ), "5 + 5 should equal 10.");
	}
	function testCalculatorAddReturnsSumOfTwoNumbersWhenArray(){
		$this->assertEquals( 10,  $this->calculator->add( array( 5, 5 ) ), "5 + 5 should equal 10.");
	}

	function testCalculatorAddReturnsSumOfThreeNumbers(){
		$this->assertEquals( 15,  $this->calculator->add( 4, 5, 6 ), "4 + 5 + 6 should equal 15.");
	}

	function testCalculatorAddReturnsSumOfThreeNumbersWhenArray(){
		$this->assertEquals( 15,  $this->calculator->add( array( 4, 5, 6)  ), "4 + 5 + 6 should equal 15.");
	}

	function testCalculatorAddReturnsSumOfFloatingPointNumbers(){
		$this->assertEquals( 3.9,  $this->calculator->add( 1.2, 1.3, 1.4 ), "1.2 + 1.3 + 1.4 should equal 3.9.");
	}

	function testCalculatorSubtractReturnsDifferenceOfTwoNumbers(){
		$this->assertEquals( 5,  $this->calculator->subtract( 10, 5 ), "10 - 5 should equal 5.");
	}

	function testCalculatorSubtractReturnsDifferenceOfTwoNumbersWhenArray(){
		$this->assertEquals( 5,  $this->calculator->subtract( array( 10, 5 ) ), "10 - 5 should equal 5.");
	}

	function testCalculatorSubtractReturnsDifferenceOfThreeNumbers(){
		$this->assertEquals( 5,  $this->calculator->subtract( 10, 3, 2 ), "10 - 3 - 2 should equal 5.");
	}

	function testCalculatorSubtractReturnsDifferenceOfFloatingPointNumbers(){
		$this->assertEquals( 1.1,  $this->calculator->subtract( 3.9, 1.6, 1.2 ), "3.9 - 1.6 - 1.2 should equal 1.1.");
	}

	function testCalculatorMultiplyReturnsProductOfTwoNumbers(){
		$this->assertEquals( 10, $this->calculator->multiply( 2, 5 ), "2 * 5 should equal 10");
	}

	function testCalculatorMultiplyReturnsProductOfTwoNumbersWhenArray(){
		$this->assertEquals( 10, $this->calculator->multiply( array( 2, 5 ) ), "2 * 5 should equal 10");
	}

	function testCalculatorMultiplyReturnsProductOfThreeNumbers(){
		$this->assertEquals( 100, $this->calculator->multiply( 2, 5, 10 ), "2 * 5 * 10  should equal 100");
	}

	function testCalculatorMultiplyReturnsProductOfFloatingPointNumbers(){
		$this->assertEquals( 10, $this->calculator->multiply( 2.5, 4 ), "2.5 * 4 should equal 10");
	}

	function testCalculatorDivideReturnsQuotentOfTwoNumbers(){
		$this->assertEquals( 2, $this->calculator->divide( 10, 5 ), "10 / 5 should equal 2");
	}

	function testCalculatorDivideReturnsQuotentOfTwoNumbersWhenArray(){
		$this->assertEquals( 2, $this->calculator->divide( array( 10, 5 ) ), "10 / 5 should equal 2");
	}

	function testCalculatorDivideReturnsQuotentOfThreeNumbers(){
		$this->assertEquals( 2, $this->calculator->divide( 20, 5, 2 ), "20 / 5 / 2 should equal 2");
	}

	function testCalculatorDivideReturnsQuotentOfFloatingPointNumbers(){
		$this->assertEquals( 3, $this->calculator->divide( 3.3, 1.1 ), "3.3 / 1.1 should equal 3");
	}

}
 
