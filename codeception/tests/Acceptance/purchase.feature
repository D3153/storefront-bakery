Feature: purchase
  In order to purchase products on the website
  As a user
  I can add or remove or modify the products in my shopping cart

  Scenario: try adding "chocolate donut" to shopping cart
    Given I have logged in as a user
    And I want add a chocolate donut to my shopping cart
    When click add
    Then I should see "chocolate donut" on "shopAll.php"
    And the price has been updated

  Scenario: try removing "baguette" from shopping cart
    Given I have logged in as a user
    And I want to remove the "baguette" from my shopping cart
    When I click delete
    Then I should not see "baguette" in my shopping cart
    And the price has been updated

  Scenario: try add the quantity of "chocolate donut"
    Given I have logged in as a user
    And I want to add "1" more "chocolate donut"
    When I click plus
    Then I should see the quantity
    And the price of "chocolate donut" has been increased in the shopping cart

  Scenario: try minus the quantity of "chocolate donut"
    Given I have logged in as a user
    And I want to remove "1" "chocolate donut"
    When I click minus
    Then I should see the quantity 
    And the price of "chocolate donut" has been reduced in the shopping cart