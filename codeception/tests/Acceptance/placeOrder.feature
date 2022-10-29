Feature: place order
  In order to place an order
  As a user
  I need to have some products in my shopping cart and check out

  Scenario: try placing an order of "a list of products"
    Given I am on check out page
    When I enter all the order information
    And click place
    Then I see "Order has been placed!" message on Check Out page