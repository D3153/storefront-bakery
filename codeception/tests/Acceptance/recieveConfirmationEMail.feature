Feature: recieve a confirmation email
  In order to recieve a confirmation email
  As a user
  I need to place an order

  Scenario: try placing an order
    Given I am on check out page
    When I enter all the order information
    And click place
    Then I see "Order has been placed!" message on check out page
    And I recieve an confirmation email