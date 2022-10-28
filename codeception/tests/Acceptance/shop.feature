Feature: shop
  In order to shop on the website
  As a user
  I need be able to add and remove a product from shopping cart

  Scenario: try adding "donut"
    Given I am on "shopAll.php"
    When I see a donut
    And click add 
    Then I should see "donut" in shopping cart