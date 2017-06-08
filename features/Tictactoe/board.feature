Feature: board
  In order to play a game of Tictactoe
  As a Tictactoe player
  I need to be able to see the game board

  Scenario: Start a new game of Tictactoe
    Given I start a new game
    Then A new game board should appear

  Scenario: Take a turn in a game of Tictactoe
    Given I start a new game
    And I have two players named Bob and Sue
    And I set Bob and Sue as players
    Given Bob will go first
    When Bob marks his turn in position 0
    Then The game board should have space 0 marked o

  Scenario: Take a turn in a game of Tictactoe
    Given I start a new game
    And I have two players named Bob and Sue
    And I set Bob and Sue as players
    And Sue will go first
    When Sue marks her turn in position 0
    And Bob marks his turn in position 2
    Then The game board should be:
    """
    o_|__|x_
    __|__|__
      |  |  .

    """