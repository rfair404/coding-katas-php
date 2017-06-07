Feature: subtract
  In order to subtract numbers
  As a Calculator user
  I need to be able to subtract a set of integers

  Scenario: Display the difference of two provided numbers
    Given I have the number 50 and the number 25
    When I subtract them
    Then I should get 25

  Scenario: Display the difference of three provided numbers
    Given I have the number 100 and the number 25
    And I have a third number of 25
    When I subtract them
    Then I should get 50

