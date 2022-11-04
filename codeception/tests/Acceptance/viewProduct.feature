Feature: View Product
  In order to view the products
  As a user or a seller
  I need to log in first

  Scenario: try viewing the product as a seller
    Given I am on "Seller/home"
    When I navigate to "Seller/checkProducts"
    Then I see "name" of "products"
    And I see "image" of "products"

  Scenario: try viewing the product as a user
    Given I am on "User/home"
    When I navigate to "Product/shopAll"
    Then I see "name" of "products"
    And I see "image" of "products"
    And I see "size" of "products"
    And I see "category" of "products"
    And I see "price" of "products"
    And I see "description" of "products"
    And I see "feedback" of "products"
