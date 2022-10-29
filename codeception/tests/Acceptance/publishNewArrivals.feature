Feature: Publish New Arrivals
  In order to publish a new arrivals on Shop All page
  As a seller
  I need to input new arrivals information on the Add New Arrivals and check if the category appears on shopAll page

  Scenario: try publish black forest cake
    Given I am on addNewArrival page and have logged in as seller
    When I fill the product information
    And click publish
    Then I should see black forest cake appears under the new arrivals category on shopAll Page