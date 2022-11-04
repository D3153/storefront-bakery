Feature: View Message
  In order to view messages sent by the users
  As a seller
  I need to login and access the message center

  Scenario: try viewing "message"
    Given I am on "Seller/home"
    When I navigate to "Seller/messageCenter"
    Then I see "user id: 071"
    And I see "message:This is a message!"
    And I see "email:bob@gmail.com"