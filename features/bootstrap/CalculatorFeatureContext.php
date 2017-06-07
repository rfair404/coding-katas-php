<?php

use Behat\Behat\Context\Context, Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode, Behat\Gherkin\Node\TableNode;
use CodingKatasPHP\Calculator;

/**
 * Defines application features from the specific context.
 */
class CalculatorFeatureContext implements Context
{
	private $calculator;
	private $numbers = array();
	private $result = 0;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    	$this->calculator = new CodingKatasPHP\Calculator;
    }


    /**
	 * @Given /^I have the number (\d+) and the number (\d+)$/
	 */
	public function iHaveTheNumberAndTheNumber($a, $b) {
		$this->numbers[] = $a;
		$this->numbers[] = $b;
	}

	/**
	 * @Given I have a third number of :c
	 */
	public function iHaveAThirdNumberOf($c)
	{
		$this->numbers[] = $c;
	}

	/**
	 * @Given /^I have the numbers *$/
	 */
	public function iHaveTheNumbersAnd($arg1, $arg2)
	{
		throw new Exception( "Array is $arg1");
	}

	/**

	/**
	 * @When I add them
	 */
	public function iAddThem()
	{
		$this->result = $this->calculator->add($this->numbers);
	}

	/**
	 * @When I subtract them
	 */
	public function iSubtractThem()
	{
		$this->result = $this->calculator->subtract($this->numbers);
	}

	/**
	 * @When I divide them
	 */
	public function iDivideThem()
	{
		$this->result = $this->calculator->divide($this->numbers);
	}

	/**
	 * @When I multiply them
	 */
	public function iMultiplyThem()
	{
		$this->result = $this->calculator->multiply($this->numbers);
	}

	/**
	 * @Then I should get :expected
	 */
	public function iShouldGet($expected)
	{
		if( $this->result !== intval( $expected ) ) {
			throw new Exception( "Expected {$expected}, got {$this->result}" );
		}
	}

	/**
	 * @Then Shit should be shit
	 */
	public function shitShouldBeShit()
	{
		throw new PendingException();
	}


}
