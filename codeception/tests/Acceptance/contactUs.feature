Feature: contact us
  In order to send a message to the seller
  As a user
  I need to fill out the contact us form

  Scenario: try sending an "message"
    Given I am on contact us page
    When I fill out the form
    And click send
    Then the "message" will be sent to seller's message center
    And seller can see the message at their account