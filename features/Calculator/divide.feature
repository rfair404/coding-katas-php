Feature: add
  In order to divide numbers
  As a Calculator user
  I need to be able to divide a set of integers

  Scenario: Display the quotent of two provided numbers
    Given I have the number 50 and the number 25
    When I divide them
    Then I should get 2

  Scenario: Display the quotent of three provided numbers
    Given I have the number 100 and the number 10
    And I have a third number of 5
    When I divide them
    Then I should get 2