Feature: Publish New Arrivals
  In order to publish a new arrivals on Shop All page
  As a seller
  I need to input new arrivals information and check if the product appears on "User/checkProducts"

  Scenario: try publish black forest cake
    Given I am on "Seller/addProduct"
      When I input file "a.jpg" in "image"
      And I input "black forest" in "name"
      And I input "black forest cake is a new arrival" in "description"
      And I input "40.86" in "price"
      And I select "6 inches" in "size"
      And I select "new arrivals" in "category"
      And I click "Add"
      Then I see "new product"
      And I see "name:black forest"
      And I see "image:a.jpg"

  Scenario: try publish a product with duplicate name
    Given I am on "Seller/addProduct"
    When I input "black forest" in "name"
    And click add
    Then I see "Name in use. Change to another one!"