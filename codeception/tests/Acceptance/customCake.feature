Feature: customize a cake
  In order to make a customize cake order
  As a user
  I need to fill out the cake information

  Scenario: try customize an wedding cake
    Given I am on customize cake page
    When I enter cake detail "a.jpg" "new product" "10" in form
    And click confirm order
    Then I see "wedding cake"