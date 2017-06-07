Feature: add
  In order to add numbers
  As a Calculator user
  I need to be able to add a set of numbers

  Scenario: Display the sum of two provided numbers
    Given I have the number 50 and the number 25
    When I add them
    Then I should get 75

  Scenario: Display the sum of two provided numbers
    Given I have the number 70 and the number 23
    When I add them
    Then I should get 93

  Scenario: Display the sum of two provided numbers
    Given I have the number 7399 and the number 2601
    When I add them
    Then I should get 10000

  Scenario: Display the sum of three provided numbers
    Given I have the number 50 and the number 25
    And I have a third number of 25
    When I add them
    Then I should get 100

#  Scenario: Display the sum of a whole bunch of numbers
#    Given I have the numbers 3, 6, 9, 12
#    When I add them
#    Then I should get 30

#
#  Scenario: Display the sum of three provided numbers
#    Given I have the number 50 and the number 25
#    And I have a third number of 25
#    Then Shit should be shit