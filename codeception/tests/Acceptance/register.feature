Feature: user
  In order to shop products in the bakery
  As a user
  I have to register an account and using valid info to log in

  Scenario: try create an account
    Given I am on "User/register"
    When I input "jiamin" in "username"
    And I input "abc123" in "password"
    And I input "abc123" in "password confirmation"
    And I click "Confirm"
    Then I should see "User/index"

  Scenario: try create an account with unmatch password
    Given I am on "User/register"
    When I input "jiamin" in "username"
    And I input "abc123" in "password"
    And I input "bbc732" in "password confirmation"
    And I click "Confirm"
    Then I should see "Password unmatched." in "User/register"

  Scenario: try create an account using exists username
    Given I am on "User/register"
    When I input "jiamin" in "username"
    And I input "abc123" in "password"
    And I input "abc123" in "password confirmation"
    And I click "Confirm"
    Then I should see "Username in use. Choose another" in "User/register"