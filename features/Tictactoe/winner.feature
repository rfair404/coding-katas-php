Feature: winner
  In order to win a new game of Tictactoe
  As a Tictactoe player
  I need to know when I win a new game

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

    Then Winner should be player_2

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

