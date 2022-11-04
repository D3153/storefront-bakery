Feature: recieve a confirmation email
  In order to recieve a confirmation email
  As a user
  I need to place an order

  Scenario: try placing an order
    Given I am on "User/checkOut"
    When I click "Place order"
    Then I see "Order has been placed!"
    And I see "an confirmation email" in "email"