Feature: sell
  In order to sell products on the website
  As a seller
  I can add or remove or modify a product

  Scenario: try adding "chocolate donut"
    Given I have logged in as a seller on "addProduct Page"
    When I fill the product information
    And click add
    Then I should see "chocolate donut" on "shopAll Page"

  Scenario: try removing "baguette"
    Given I have logged in as a seller on "removeProduct Page"
    When I fill the product information 
    And click delete
    Then I should not see "baguette" on "shopAll Page"

  Scenario: try modify the price of "chocolate donut"
    Given I have logged in as a seller on "modifyProduct Page"
    When I fill the product information 
    And click modify
    Then I should see the new price of "chocolate donut" on "shopAll Page"