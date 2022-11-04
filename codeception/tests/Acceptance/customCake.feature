Feature: customize a cake
In order to make a customize cake order
As a user
I need to fill out the cake information

Scenario: try customize an wedding cake
  Given I am on "/Product/customizeCake"
  When I input file "a.jpg" in "image"
  And I input "8 inches" in "size"
  And I input "cheese cake with fresh cherry on it" in "description"
  And I input "8 inches" in "size"
  And I click "confirm order"
  Then I see "customize cake" in "shopping cart"
  And I see "Price: 55.00"