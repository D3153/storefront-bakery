Feature: find
In order to find product
  As a user
  I need to input search terms in the search bar and get matching results back

  Scenario: try finding "bagel"
    Given I want to find a product
    When I enter "bagel" in the search box
    And click Search
    Then I see "bagel"