Feature: purchase
  In order to purchase products on the website
  As a user
  I can add or remove or modify the products in my shopping cart

  Scenario: try adding a chocolate donut to shopping cart
    Given I am on "Product/shopAll"
    And I want to add a "chocolate donut"
    When I click "add"
    Then I should see "chocolate donut" in "User/shoppingCart"

  Scenario: try removing baguette from shopping cart
    Given I am on "Product/shopAll"
    And I want to remove the "baguette"
    When I click "delete"
    Then I should not see "baguette" in "User/shoppingCart"

  Scenario: try reduce the quantity of chocolate donut to negative
    Given I am on "Product/shopAll"
    And I do not have "chocolate donut" in "User/shoppingCart"
    When I click "minus"
    Then I should see "quantity can't be negative"