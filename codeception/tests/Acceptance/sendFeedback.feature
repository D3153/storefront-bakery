Feature: send feedback
  In order to send feedbacks on product that I have purchased
  As a user
  I need to have order history

  Scenario: try send feedback without purchase it
    Given I am on "Product/shopAll"
    When I select "4 star" in "rate"
    And I input "Fresh product, will repurchase!" in "comment"
    And I click "post"
    Then I see "Make a purchase!" on "Product/shopAll"

  Scenario: try send feedback with purchase history
    Given I am on "Product/shopAll"
    When I select "4 star" in "rate"
    And I input "Fresh product, will repurchase!" in "comment"
    And I click "post"
    Then I see "rate:4 star"
    And I see "comment:Fresh product, will repurchase!" on "Product/shopAll"