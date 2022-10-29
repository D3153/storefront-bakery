Feature: customize a cake
  In order to make a customize cake order
  As a user
  I need to fill out the cake information

  Scenario: try customize an "wedding cake"
    Given I am on customize cake page
    When I enter all the order information such as sizing, image, price, description
    And click add
    Then I see "wedding cake" in shopping cart
    And I can place the order by check out