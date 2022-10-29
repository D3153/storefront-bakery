Feature: send feedback
  In order to send feedbacks on product that I have purchased
  As a user
  I need to have order history

  Scenario: try send "feedback" without purchase it
    Given I am on Shop All page
    When I write the feedback with rating
    And click post
    Then I see Make a purchase! alertbox on shop all page

  Scenario: try send "feedback" with purchase history
    Given I am on Shop All page
    When I write the feedback with rating
    And click post
    Then I see current product feedback on shop all page