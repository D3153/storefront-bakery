Feature: login and logout
  In order to access the bakery
  As a user and a seller
  I need an account and using valid info to log in

  Scenario: try login with incorrect info
    Given I am on "User/index"
    When I input "incorrect info" in "username" or "password"
    And I click "login"
    Then I should see "alert box" warning "I can not log in with incorrect info"

  Scenario: try login with correct info
    Given I am on "User/index"
    When I enter "correct info" in "username"
    And I enter "correct info" in "password"
    And I click "login"
    Then I should see "Product/shopAll"

    Scenario: try logout
    Given I am on "Product/shopAll"
    When I click "logout"
    Then I should see "User/index"