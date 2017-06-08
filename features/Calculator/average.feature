Feature: average
  In order to average numbers
  As a Calculator user
  I need to be able to average a set of numbers

  Scenario: Display the average of two provided numbers
    Given I have the number 50 and the number 30
    When I average them
    Then I should get 40

  Scenario: Display the averge of three provided numbers
    Given I have the numbers 70, 50, 30
    When I average them
    Then I should get 50