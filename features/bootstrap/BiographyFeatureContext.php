<?php
use Behat\Behat\Context\Context, Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode, Behat\Gherkin\Node\TableNode;
use CodingKatasPHP\Biography;

/**
 * Defines application features from the specific context.
 */
class BiographyFeatureContext implements Context
{
	private $session;

	/**
	 * Initializes context.
	 *
	 * Every scenario gets its own context instance.
	 * You can also pass arbitrary arguments to the
	 * context constructor through behat.yml.
	 */
	public function __construct()
	{
		$this->bio = new CodingKatasPHP\Biography;

		// Initialize the Mink driver.
		$driver = new \Behat\Mink\Driver\GoutteDriver();

		$this->session = new \Behat\Mink\Session($driver);

		// start the session
		$this->session->start();


	}

	/**
	 * @Given /^The student is named (\S+) (\S+)$/
	 */
	public function theStudentIsNamed($fname, $lname)
	{
		$this->bio->set_name( $fname , $lname );
	}

	/**
	 * @When /^I open (\S+) (\S+)\'s home page$/
	 */
	public function iOpensHomePage($fname, $lname)
	{
		$name = $this->bio->get_name();

		$name = str_replace( ' ' , '-', strtolower( $name) );

		$pwd = dirname( dirname( dirname( __FILE__ ) ) );
		$this->session->visit("file://$pwd/examples/$name.html");

		var_dump( "file://$pwd/examples/$name.html" );
		var_dump( $this->session->getStatusCode() );

		if( 200 !== $this->session->getStatusCode() ) {
			throw new PendingException( 'The page did not load properly, perhaps it doesn\'t exist?' );
		}
	}

	/**
	 * @Then /^I should see an h1 element with text (\S+) (\S+)$/
	 */
	public function iShouldSeeAnHElementWithText()
	{
		throw new PendingException($name);
	}

	/**
	 * @Then I should see an ul element with :arg1 items
	 */
	public function iShouldSeeAnUlElementWithItems($arg1)
	{
		throw new PendingException();
	}

	/**
	 * @Then /^I should see an img element with src to (\S+) (\S+)\'s image file$/
	 */
	public function iShouldSeeAnImgElementWithSrcToImageFile()
	{
		throw new PendingException();
	}

}