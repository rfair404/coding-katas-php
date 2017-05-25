Feature: add
  In order to multiply numbers
  As a Calculator user
  I need to be able to multiply a set of integers

  Scenario: Display the product of two provided numbers
    Given I have the number 5 and the number 2
    When I multiply them
    Then I should get 10

  Scenario: Display the product of three provided numbers
    Given I have the number 3 and the number 4
    And I have a third number of 2
    When I multiply them
    Then I should get 24