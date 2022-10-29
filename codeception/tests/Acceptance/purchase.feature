Feature: purchase
  In order to purchase products on the website
  As a user
  I can add or remove or modify the products in my shopping cart

  Scenario: try adding "chocolate donut" to shopping cart
    Given I have logged in as a user
    And I want add a chocolate donut to my shopping cart
    When click add
    Then I should see chocolate donut in my shopping cart and price update

  Scenario: try removing "baguette" from shopping cart
    Given I have logged in as a user
    And I want to remove the baguette from my shopping cart
    When I click delete
    Then I should not see baguette in my shopping cart and price update

  Scenario: try add the quantity of "chocolate donut"
    Given I have logged in as a user
    And I want to add 1 more chocolate donut
    When I click plus
    Then I should see the quantity and price increased

  Scenario: try minus the quantity of "chocolate donut"
    Given I have logged in as a user
    And I want to remove 1 chocolate donut
    When I click minus
    Then I should see the quantity and price reduced