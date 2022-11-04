Feature: find
  In order to find a specific product
  As a user
  I need to input search terms on Shop All and get matching results back

  Scenario: try searching an bagel 
    Given I am on "Product/shopAll"
    When I input "bagel" in "search bar"
    And I click "search"
    Then I see "bagel"