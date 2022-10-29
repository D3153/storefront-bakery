Feature: find
  In order to find a specific product
  As a user
  I need to input search terms on Shop All and get matching results back

  Scenario: try finding "bagel"
    Given I am on Shop All page
    When I enter "bagel" in the search bar
    And click Search
    Then I see "bagel"