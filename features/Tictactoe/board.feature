Feature: new
  In order to start a new game of Tictactoe
  As a Tictactoe player
  I need to be able to start a new game

  Scenario: Start a new game of Tictactoe
    Given I have two players named Bob and Sue
    When I start a new game
    When I set Bob and Sue as players
    Then A new game between Bob and Sue begins