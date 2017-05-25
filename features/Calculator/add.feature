Feature: add
  In order to add numbers
  As a Calculator user
  I need to be able to add a set of integers

  Scenario: Display the sum of two provided numbers
    Given I have the number 50 and the number 25
    When I add them together
    Then I should get 75

  Scenario: Display the sum of three provided numbers
    Given I have the number 50 and the number 25
    And I have a third number of 25
    When I add them together
    Then I should get 100