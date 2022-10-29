Feature: contact us
  In order to send a message to the seller
  As a user
  I need to fill out the contact us form

  Scenario: try sending an message
    Given I am on contact us page
    When I enter "message" in form
    And click send
    Then the seller see "message" in message center

