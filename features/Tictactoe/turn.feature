Feature: turn
  In order to take turns in Tictactoe
  As a Tictactoe player
  I need to be able to take a turn in the game

  Scenario: Play a turn in the game of Tictactoe
    Given I have two players named Bob and Sue
    Given I set Bob and Sue as players
    Given Sue will go first
    When Sue marks her turn in position 0
    Then Turn should be 1
    Then State should include position 0
    Then State position 0 should be marked player_2

  Scenario: Play two turns in the game of Tictactoe
    Given I have two players named Bob and Sue
    Given I set Bob and Sue as players
    Given Sue will go first
    When Sue marks her turn in position 0
    Then Bob marks his turn in position 3
    Then Turn should be 2
    Then State should include position 3
    Then State position 3 should be marked player_1

  Scenario: Play 9 turns in the game of Tictactoe
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

    Then Turn should be 9
    Then State should include position 0
    Then State should include position 1
    Then State should include position 2
    Then State should include position 3
    Then State should include position 4
    Then State should include position 5
    Then State should include position 6
    Then State should include position 7
    Then State should include position 8

    Then State position 0 should be marked player_2
    Then State position 2 should be marked player_2
    Then State position 4 should be marked player_2
    Then State position 6 should be marked player_2
    Then State position 8 should be marked player_2

    Then State position 1 should be marked player_1
    Then State position 3 should be marked player_1
    Then State position 5 should be marked player_1
    Then State position 7 should be marked player_1

