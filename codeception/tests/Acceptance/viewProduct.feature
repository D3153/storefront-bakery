Feature: View Product
  In order to view the products
  As a user and a seller
  I need to access the shop all page or shop a specific category

  Scenario: try viewing the detail info of "cheese cake"
    Given I have logged in
    When I navigate to Shop All page
    Then I see all the "products" with its "price,description,image" published by sender
    And I can select to see any specific category
