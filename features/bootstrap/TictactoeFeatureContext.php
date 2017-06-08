<?php
use Behat\Behat\Context\Context, Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode, Behat\Gherkin\Node\TableNode;
use CodingKatasPHP\Tictactoe;

/**
* Defines application features from the specific context.
*/
class TictactoeFeatureContext implements Context
{
	private $ttt;
	private $players;


	/**
	 * Initializes context.
	 *
	 * Every scenario gets its own context instance.
	 * You can also pass arbitrary arguments to the
	 * context constructor through behat.yml.
	 */
	public function __construct()
	{
		$this->ttt = new CodingKatasPHP\Tictactoe;
	}

	/**
	 * @Given /^I have two players named (\S+) and (\S+)$/
	 */
	public function iHaveTwoPlayersNamedAnd($p1, $p2)
	{
		$this->players = array( 'player_1' => $p1, 'player_2' => $p2 );
	}

	/**
	 * @When I start a new game
	 */
	public function iStartANewGame()
	{
		$this->ttt->game->new_game('tictactoe');
	}

	/**
	 * @When /^I set (\S+) and (\S+) as players$/
	 */
	public function iSetBobAndSueAsPlayers()
	{
		# note: didn't set players in this command...
		$this->ttt->game->set_players( $this->players );
	}

	/**
	 * @Then /^A new game between (\S+) and (\S+) begins$/
	 */
	public function aNewGameBetweenAndBegins($p1, $p2)
	{
		if ( $this->ttt->game->get_players() !== array( 'player_1' => $p1, 'player_2' => $p2 ) ) {
			throw new Exception("expected players to be array( 'player_1' => $p1, 'player_2' => $p2)" );
		}
	}

	/**
	 * @Given /^(\S+) will go first$/
	 */
	public function willGoFirst()
	{
		$this->ttt->game->set_active_player('Sue');
	}

	/**
	 * @When /^(\S+) marks (\S+) turn in position (\d)$/
	 */
	public function marksTurnInPosition($player_name, $pronoun, $position)
	{
		$this->ttt->game->mark_position( $position );
	}

	/**
	 * @Then State should include :arg1
	 */
	public function stateShouldInclude($arg1)
	{
		throw new PendingException();
	}

	/**
	 * @Then Turn should be :turn
	 */
	public function turnShouldBe($turn)
	{
		if( $this->ttt->game->get_turn() !== intval($turn) ) {
			throw new Exception( "Turn should equal $turn, instead got" . $this->ttt->game->get_turn() );
		}
	}

	/**
	 * @Then State should include position :arg1
	 */
	public function stateShouldIncludePosition($arg1)
	{
		if( ! in_array( 0, $this->ttt->game->get_state() ) ) {
			throw new Exception('state should include correct position');
		}
	}

	/**
	 * @Then State position :position should be marked :player
	 */
	public function statePositionShouldBeMarked($position, $player)
	{
		$state = $this->ttt->game->get_state();
		$position = intval( $position );

		if( ! isset( $state[$position] ) || $state[$position] !== $player ) {
			throw new Exception('state should include correct position');
		}
	}

	/**
	 * @Then Winner should be :expected_winner
	 */
	public function winnerShouldBe($expected_winner)
	{
		if( "false" === $expected_winner ){
			// expecting "no winner" convert expected to bool
			$expected_winner = false;
		}

		$winner = $this->ttt->game->get_winner();

		if( $expected_winner !==  $winner ){
			throw new Exception( "Expected winner to be $expected_winner - got $winner instead.");
		}

	}

	/**
	 * @Then A new game board should appear
	 */
	public function aNewGameBoardShouldAppear()
	{
		$expected  = "__|__|__\n";
		$expected .= "__|__|__\n";
		$expected .= "  |  |  \n";

		$board = $this->ttt->game->get_board();

		if( $expected !== $board ){
			throw new Exception("The board was not a new board.");
		}
	}

	/**
	 * @Given I mark space :position for :player
	 */
	public function iMarkSpace($position, $player)
	{
		$this->ttt->game->mark_position( $position );

	}

	/**
	 * @Then The game board should have space :space marked :mark
	 */
	public function theGameBoardShouldHaveSpaceMarked($space, $mark)
	{
		$expected  = "{$mark}_|__|__\n";
		$expected .= "__|__|__\n";
		$expected .= "  |  |  \n";

		$board = $this->ttt->game->get_board();

		if( $expected !== $board ){
			throw new Exception("Board is wrong.");
		}
	}

	/**
	 * @Then The game board should be:
	 */
	public function theGameBoardShouldBe(PyStringNode $string)
	{
		$board = $this->ttt->game->get_board();
		$expected = $string->getRaw();

		// Remove the period from the end of the multi-line
		$expected = str_replace( '.', '', $expected );

		if ( $expected !== $board ) {
			throw new Exception('Board did not align with expectations.');
		}
	}
}