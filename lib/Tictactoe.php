<?php
namespace CodingKatasPHP;
use PHPUnit\Exception;

/**
 * Class Tictactoe
 *
 * @package CodingKatasPHP
 */
class Tictactoe
{
    public $game;

    function __construct() 
    {
        $this->game = new TictactoeGame;
    }

    /**
     * @return TictactoeGame
     */
    function get_game()
    {
        return $this->game;
    }

    /**
     *
     */
    function new_game()
    {
        $this->game = new TictactoeGame;
    }

}

class TictactoeGame
{
    private $players, $active_player;
    private $turn;
    private $winner = false;
    private $state = array();

    /**
     *
     */
    function new_game() 
    {

    }

    /**
     * @param array $players
     */
    function set_players( $players = array() ) 
    {
        $this->players = $players;
    }

    /**
     * @return mixed
     */
    function get_players() 
    {
        return $this->players;
    }

    /**
     * @return mixed
     */
    function get_turn() 
    {
        return $this->turn;
    }

    /**
     * @return array
     */
    function get_state() 
    {
        return $this->state;
    }

    function get_winner() 
    {
        return $this->winner;
    }


    function get_board() 
    {
        $board = '';

        for( $x = 0 ;  $x < 9 ; $x++ ) {
        	$marker = '_';

        	if( isset( $this->state[$x] )) {
				$marker = ( $this->state[$x] === 'player_1' ) ? 'x' : 'o' ;
	        }

            if( in_array( $x, array( 2 , 5 ) ) ) {
                $board .= sprintf("%s_\n", $marker);
            } else if( in_array( $x, array( 6 , 7 ) ) ) {
            	$marker = ( $marker === '_' ) ? ' ' : $marker ;
        		$board .= sprintf("%s |", $marker );
            } else if( in_array( $x, array( 8 ) ) ) {
	            $marker = ( $marker === '_' ) ? ' ' : $marker ;
	            $board .= sprintf("%s \n", $marker);
            } else {
            	$board .= sprintf("%s_|", $marker);
            }
        }

        return $board;
    }

    function set_winner( $winner )
    {
        $this->winner = $winner;
    }

    /**
     * @param $player_name
     */
    function set_active_player( $player_name ) 
    {
        $this->active_player = array_search($player_name, $this->players, true);
    }

    /**
     * @param $position
     */
    function mark_position( $position ) 
    {
        $this->turn++;
        $this->state[intval($position)] = $this->active_player;
        $players = $this->players;

        unset($players[$this->active_player]);

        $players = array_values($players);

        self::check_for_winner();

        self::set_active_player($players[0]);
    }

    function check_for_winner() 
    {
        if($this->turn < 5 ) {
            // Can't win with just 4 total turns
            return;
        }


        $winning_patterns = array(
         'top row' => array( 0, 1, 2 ),
         'middle row' => array( 3, 4, 5 ),
         'bottom row' => array( 6, 7, 8 ),
         'left column' => array( 0, 3, 6 ),
         'middle column' => array( 1, 4, 7 ),
         'right column' => array( 2, 5, 8 ),
         'back slash' => array( 0, 4, 8 ),
         'forward slash' => array( 2, 4, 6 )
        );

        foreach ( $winning_patterns as $pattern => $values ) {
            if (array_key_exists($values[0], $this->state) ) {
                $candidate = $this->state[ $values[0] ];

                if (array_key_exists($values[1], $this->state) && $candidate === $this->state[ $values[1] ] ) {
                    // user is in 2/3 way to a win...

                    if (array_key_exists($values[2], $this->state) && $candidate === $this->state[ $values[2] ] ) {
                        // WINNER!
                        self::set_winner($this->active_player);
                        return;
                    }
                }
            }
        }
        self::set_winner(false);
        return;
    }

}