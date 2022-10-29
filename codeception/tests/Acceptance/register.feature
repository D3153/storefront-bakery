Feature: user
  In order to shop products in the bakery
  As a user
  I have to register an account and using valid info to log in

  Scenario: try create an account
    Given I am the first time using this online bakery
    When I fill the user information
    And click Confirm on register page
    Then I should redirect to Login with a message "I have create a account succesfully"