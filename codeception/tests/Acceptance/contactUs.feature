Feature: contact us
  In order to send a message to the seller
  As a user
  I need to fill out the contact us form

  Scenario: try sending an message
    Given I am on "/User/contactUs"
    When I input "John" in "name"
    And I input "john@example.com" in "email"
    And I input "10" in "message"    
    And I click "submit"
    Then the seller see "message" in "/Seller/messageCenter"

