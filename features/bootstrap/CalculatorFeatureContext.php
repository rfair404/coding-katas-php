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
	private $numbers;
	private $a, $b, $c, $result = 0;

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
//		$this->a = $a;
//		$this->b = $b;
	}

	/**
	 * @Given I have a third number of :c
	 */
	public function iHaveAThirdNumberOf($c)
	{
		$this->numbers[] = $c;
//		$this->c = $c;
	}


	/**
	 * @When I add them together
	 */
	public function iAddThemTogether()
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


}
