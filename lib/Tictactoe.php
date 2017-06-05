<?php
namespace CodingKatasPHP;
/**
 * Class Tictactoe
 * @package CodingKatasPHP
 */
class Tictactoe{
	public $game;

	function __construct() {
		$this->game = new TictactoeGame;
	}

	/**
	 * @return TictactoeGame
	 */
	function get_game(){
		return $this->game;
	}

	/**
	 *
	 */
	function new_game(){
		$this->game = new TictactoeGame;
	}

}

class TictactoeGame{
	private $players, $active_player;
	private $turn;
	private $winner = 0;
	private $state = array();

	/**
	 *
	 */
	function new_game() {

	}

	/**
	 * @param array $players
	 */
	function set_players( $players = array() ) {
		$this->players = $players;
	}

	/**
	 * @return mixed
	 */
	function get_players() {
		return $this->players;
	}

	/**
	 * @return mixed
	 */
	function get_turn() {
		return $this->turn;
	}

	/**
	 * @return array
	 */
	function get_state() {
		return $this->state;
	}

	function get_winner() {
		return $this->winner;
	}

	/**
	 * @param $player_name
	 */
	function set_active_player( $player_name ) {
		$this->active_player = array_search( $player_name, $this->players, true );
	}

	/**
	 * @param $position
	 */
	function mark_position( $position ) {
		$this->turn++;
		$this->state[intval($position)] = $this->active_player;
		$players = $this->players;

		unset($players[$this->active_player]);

		$players = array_values( $players );
		self::set_active_player( $players[0] );
	}
}