Feature: sell
  In order to sell products on the website
  As a seller
  I can add or remove or modify a product

  Scenario: try adding chocolate donut
      Given I am on "Seller/addProduct"
      When I input file "a.jpg" in "image"
      And I input "black forest" in "name"
      And I input "black forest cake" in "description"
      And I input "40.86" in "price"
      And I select "6 inches" in "size"
      And I select "cake" in "category"
      And I click "Add"
      Then I see "new product" on "Seller/checkProducts"
      And I see "name:black forest"
      And I see "image:a.jpg"

  Scenario: try modify the price of black forest
    Given I am on "Seller/modifyProduct"
     When I input file "a.jpg" in "image"
      And I input "black forest" in "name"
      And I input "black forest cake" in "description"
      And I input "55.99" in "price"
      And I select "6 inches" in "size"
      And I select "cake" in "category"
    Then I should see "Price:55.99"

  Scenario: try removing black forest
    Given I am on "Seller/deleteProduct"
    When I select "black forest" in "name"
    And I click "delete"
    Then I should not see "black forest" in "Seller/checkProducts"

