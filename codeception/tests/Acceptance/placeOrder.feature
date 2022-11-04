Feature: place order
  In order to place an order
  As a user
  I need to have some products in my shopping cart and check out

  Scenario: try placing an order of a list of products
    Given I am on "User/checkout"
    When I input "john@example.com" in "email"
    And I input "1027 Rue blabla" in "address"
    And I select "Credit card" in "payment method"
    And I click "place"
    Then I see "Order has been placed!" on "User/checkout"