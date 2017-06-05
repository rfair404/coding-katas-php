Feature: new
  In order to start a new game of Tictactoe
  As a Tictactoe player
  I need to be able to start a new game

  Scenario: Start a new game of Tictactoe
    Given I have two players named Bob and Sue
    When I start a new game
    When I set Bob and Sue as players
    Then A new game between Bob and Sue begins

  Scenario: Play a turn in the game of Tictactoe
    Given I have two players named Bob and Sue
    Given I set Bob and Sue as players
    Given Sue will go first
    When Sue marks her turn in position 0
    Then Turn should be 1
    #game state
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
    #top row
    Then Bob marks his turn in position 0
    Then Sue marks her turn in position 1
    Then Bob marks his turn in position 2
    #middle row
    Then Sue marks her turn in position 3
    Then Bob marks his turn in position 4
    Then Sue marks her turn in position 5
    #bottom row
    Then Bob marks his turn in position 6
    Then Sue marks her turn in position 7
    Then Bob marks his turn in position 8

    Then Turn should be 9
    # check the states are all right
    Then State should include position 0
    Then State should include position 1
    Then State should include position 2
    Then State should include position 3
    Then State should include position 4
    Then State should include position 5
    Then State should include position 6
    Then State should include position 7
    Then State should include position 8

    #check the states for Bob
    Then State position 0 should be marked player_2
    Then State position 2 should be marked player_2
    Then State position 4 should be marked player_2
    Then State position 6 should be marked player_2
    Then State position 8 should be marked player_2

    #check the state for Sue
    Then State position 1 should be marked player_1
    Then State position 3 should be marked player_1
    Then State position 5 should be marked player_1
    Then State position 7 should be marked player_1



  Scenario: Play a cat game (tie) in the game of Tictactoe
    Given I have two players named Bob and Sue
    Given I set Bob and Sue as players
    Given Bob will go first
     #top row
    Then Bob marks his turn in position 0
    Then Sue marks her turn in position 1
    Then Bob marks his turn in position 2
     #middle row
    Then Sue marks her turn in position 3
    Then Bob marks his turn in position 4
    Then Sue marks her turn in position 5
     #bottom row
    Then Bob marks his turn in position 6
    Then Sue marks her turn in position 7
    Then Bob marks his turn in position 8

    Then Winner should be 0

  Scenario: Play a game in the game of Tictactoe
    Given I have two players named Bob and Sue
    Given I set Bob and Sue as players
    Given Bob will go first
    # Someone should explain tic tac toe to Sue...
    Then Bob marks his turn in position 0
    Then Sue marks her turn in position 2
    Then Bob marks his turn in position 3
    Then Sue marks her turn in position 5
    Then Bob marks his turn in position 6
    # Bob wins
    Then Winner should be player_2

  Scenario: Start a new game of Tictactoe
    Given I have two players named Russell and Steve
    When I start a new game
    When I set Russell and Steve as players
    Then A new game between Russell and Steve begins

