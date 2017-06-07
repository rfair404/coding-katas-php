Feature: bio
  In order to know about a student
  As a web user
  I need to be able to visit a student webpage

  Scenario: Open a student home page
    Given The student is named Heather Florez
    When I open Heather Florez's home page
    Then I should see an h1 element with text Heather Florez

  Scenario: See about section on student home page
    Given The student is named Heather Florez
    When I open Heather Florez's home page
    Then I should see an ul element with 3 items

  Scenario: See hobbies section on student home page
    Given The student is named Heather Florez
    When I open Heather Florez's home page
    Then I should see an ul element with 3 items

  Scenario: See photo section on student home page
    Given The student is named Heather Florez
    When I open Heather Florez's home page
    Then I should see an img element with src to Heather Florez's image file

