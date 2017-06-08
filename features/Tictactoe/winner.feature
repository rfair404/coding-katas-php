Feature: new
  In order to start a new game of Tictactoe
  As a Tictactoe player
  I need to be able to start a new game

  Scenario: Start a new game of Tictactoe
    Given I have two players named Bob and Sue
    When I start a new game
    When I set Bob and Sue as players
    Then A new game between Bob and Sue begins


  Scenario: Play a cat game (tie) in the game of Tictactoe
    Given I have two players named Bob and Sue
    Given I set Bob and Sue as players
    Given Bob will go first
    Then Bob marks his turn in position 0
    Then Sue marks her turn in position 1
    Then Bob marks his turn in position 2
    Then Sue marks her turn in position 3
    Then Bob marks his turn in position 4
    Then Sue marks her turn in position 5
    Then Bob marks his turn in position 6
    Then Sue marks her turn in position 7
    Then Bob marks his turn in position 8

    Then Winner should be 0

  Scenario: Play a game in the game of Tictactoe
    Given I have two players named Bob and Sue
    Given I set Bob and Sue as players
    Given Bob will go first
    Then Bob marks his turn in position 0
    Then Sue marks her turn in position 2
    Then Bob marks his turn in position 3
    Then Sue marks her turn in position 5
    Then Bob marks his turn in position 6
    Then Winner should be player_2

