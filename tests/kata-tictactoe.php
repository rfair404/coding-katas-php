<?php
use PHPUnit\Framework\TestCase;
use CodingKatasPHP\Tictactoe;

class TictactoeTests extends TestCase{

	private $ttt, $game;

	function setUp(){
		$this->ttt = new CodingKatasPHP\Tictactoe();
	}

	function testGetGameReturnsTictactoeGameObject(){
		$this->assertInstanceOf( 'CodingKatasPHP\TictactoeGame', $this->ttt->get_game() );
	}

	function testNewGameReturnsNewInstanceOfTictactoeGame() {
		$this->ttt->new_game();
		$this->assertInstanceOf( 'CodingKatasPHP\TictactoeGame', $this->ttt->get_game() );
	}

}