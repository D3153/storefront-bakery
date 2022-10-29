Feature: View Message
  In order to view messages sent by the users
  As a seller
  I need to login and access the message center

  Scenario: try viewing "message"
    Given I have registered seller account to login
    When I navigate to message center
    Then I see all the messages send by the users