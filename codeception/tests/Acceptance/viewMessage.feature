Feature: View Message
  In order to view messages sent by the users
  As a seller
  I need to login and access the message center

  Scenario: try viewing "message"
    Given I have logged in as a seller
    When I navigate to message center
    Then I see all the "messages" send by the users
    And I can reply them using "email"