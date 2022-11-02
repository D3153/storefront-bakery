<?php

declare(strict_types=1);

namespace Tests\Support;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause($vars = [])
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

     /**
     * @Given I am on :arg1
     */
     public function iAmOn($url)
     {
        $this->amOnPage($url); //make the browser go on a URL
     }


         /**
     * @Given I am on customize cake page
     */
     public function iAmOnCustomizeCakePage()
     {
         $this->amOnPage("Product/customizeCake");
     }


    /**
     * @Given I am on Shop All page
     */
     public function iAmOnShopAllPage()
     {
         $this->amOnPage("Product/shopAll");

     }

     
    /**
     * @When click search
     */
     public function clickSearch()
     {
         $this->click("search");
     }

     /**
     * @Then I see :arg1
     */
     public function iSee($arg1)
     {
        $this->see($arg1);//assert that you can see the string
     }

    /**
     * @Given I am on Login Page
     */
     public function iAmOnLoginPage()
     {
         $this->amOnPage("User/index");
     }

    /**
     * @When I enter :arg1
     */
     public function iEnter($arg1)
     {
         $this->see($arg1);//write the term in the box
     }



         /**
     * @When I enter :arg1 in input
     */
     public function iEnterInInput($arg1)
     {
         $this->fillField('input', $arg1);
     }

    /**
     * @When click send
     */
     public function clickSend()
     {
         $this->click("action");
     }

    /**
     * @Then the seller see :arg1 in message center
     */
     public function theSellerSeeInMessageCenter($arg1)
     {
        $this->amOnPage("Seller/profile");
     }

      /**
     * @When click confirm order
     */
     public function clickConfirmOrder()
     {
         // $this->click("action");
     }

    /**
     * @When click Confirm
     */
     public function clickConfirm()
     {
         $this->click("action");
     }


    /**
     * @When I click login
     */
     public function iClickLogin()
     {
         $this->click("action");
     }

   /**
     * @When I enter :arg1 in form
     */
     public function iEnterInForm($arg1)
     {
         $this->fillField("input",$arg1);
     }



      /**
     * @Given I am on contact us page
     */
     public function iAmOnContactUsPage()
     {
         $this->amOnPage("User/contactUs");
     }

    /**
     * @Then I should see :arg1 on Login warning :arg2
     */
     public function iShouldSeeOnLoginWarning($arg1, $arg2)
     {
         $this->amOnPage("User/index");
     }

    /**
     * @Then I should redirect to Shop All with a message :arg1
     */
     public function iShouldRedirectToShopAllWithAMessage($arg1)
     {
         $this->amOnPage("Product/shopAll");
     }

    /**
     * @When I enter all the order information
     */
     public function iEnterAllTheOrderInformation()
     {
         $this->amOnPage("User/checkout");
     }

    /**
     * @When click place
     */
     public function clickPlace()
     {
         //$this->click("place");
     }

      /**
     * @When I enter cake detail :arg1 :arg2 :arg3 in form
     */
     // public function iEnterCakeDetailInForm($arg1, $arg2, $arg3)
     // {
     //      $this->amOnPage("Product/customizeCake");
     //     // $this->fillField('form',$arg1);//write the term in the box
     //     // $this->fillField('form',$arg1);//write the term in the box
     //     // $this->fillField('form',$arg3);//write the term in the box
     // }

    /**
     * @Then I see Order has been placed! on Check Out page
     */
     public function iSeeOrderHasBeenPlacedOnCheckOutPage()
     {
         $this->amOnPage("User/checkout");
     }

    /**
     * @Given I am on addNewArrival page and have logged in as seller
     */
     public function iAmOnAddNewArrivalPageAndHaveLoggedInAsSeller()
     {
         $this->amOnPage("Seller/publishNewArrivals");
     }


    /**
     * @When click publish
     */
     public function clickPublish()
     {
         // $this->click("action");
     }

    /**
     * @Then I should see black forest cake appears under the new arrivals category on shopAll Page
     */
     public function iShouldSeeBlackForestCakeAppearsUnderTheNewArrivalsCategoryOnShopAllPage()
     {
         $this->amOnPage("Product/shopAll");
     }

    /**
     * @Given I have logged in as a user
     */
     public function iHaveLoggedInAsAUser()
     {
         $this->amOnPage("Product/shopAll");
     }

    /**
     * @Given I want add a chocolate donut to my shopping cart
     */
     public function iWantAddAChocolateDonutToMyShoppingCart()
     {
         $this->amOnPage("User/cart");
     }

    /**
     * @When click add
     */
     public function clickAdd()
     {
         // $this->click("add");
     }


    /**
     * @Then the price has been updated
     */
     public function thePriceHasBeenUpdated()
     {
         $this->amOnPage("Product/shopAll");
     }


    /**
     * @When I click delete
     */
     public function iClickDelete()
     {
         // $this->click("delete");
     }


    /**
     * @When I click plus
     */
     public function iClickPlus()
     {
        // $this->click("plus");
     }

    /**
     * @Then I should see it on Shop All
     */
     public function iShouldSeeItOnShopAll()
     {
         $this->amOnPage("Product/shopAll");
     }

    /**
     * @Then I should not see it on Shop All
     */
     public function iShouldNotSeeItOnShopAll()
     {
         $this->amOnPage("Product/shopAll");
     }

    /**
     * @Then I should see the new price
     */
     public function iShouldSeeTheNewPrice()
     {
         $this->amOnPage("Product/shopAll");
     }


    /**
     * @When I click minus
     */
     public function iClickMinus()
     {
         // $this->click("minus");
     }

    /**
     * @Given I am on check out page
     */
     public function iAmOnCheckOutPage()
     {
        $this->amOnPage("User/checkOut");
     }

    /**
     * @Then I recieve an confirmation email
     */
     public function iRecieveAnConfirmationEmail()
     {
         $this->amOnPage("Main/index");
     }

    /**
     * @Given I am the first time using this online bakery
     */
     public function iAmTheFirstTimeUsingThisOnlineBakery()
     {
         $this->amOnPage("Main/index");
     }

   /**
     * @When click Confirm on register page
     */
     public function clickConfirmOnRegisterPage()
     {
         // $this->click("register");
     }

   /**
     * @When I fill the product information
     */
     public function iFillTheProductInformation()
     {
         $this->amOnPage("Seller/publishNewArrivals");
     }


    /**
     * @When I fill the user information
     */
     public function iFillTheUserInformation()
     {
         $this->amOnPage("User/register");
     }


    /**
     * @Then I should redirect to Login with a message :arg1
     */
     public function iShouldRedirectToLoginWithAMessage($arg1)
     {
         $this->amOnPage("User/index");
     }

    /**
     * @Given I have logged in as a seller
     */
     public function iHaveLoggedInAsASeller()
     {
         $this->amOnPage("Seller/addProduct");
     }

      /**
     * @Then I should see chocolate donut in my shopping cart and price update
     */
     public function iShouldSeeChocolateDonutInMyShoppingCartAndPriceUpdate()
     {

         $this->amOnPage("User/cart");
     }

    /**
     * @Given I want to remove the baguette from my shopping cart
     */
     public function iWantToRemoveTheBaguetteFromMyShoppingCart()
     {
         $this->amOnPage("User/cart");
     }

    /**
     * @Then I should not see baguette in my shopping cart and price update
     */
     public function iShouldNotSeeBaguetteInMyShoppingCartAndPriceUpdate()
     {
         $this->amOnPage("User/cart");
     }

    /**
     * @Given I want to add :num1 more chocolate donut
     */
     public function iWantToAddMoreChocolateDonut($num1)
     {
         $this->amOnPage("User/cart");
     }

    /**
     * @Then I should see the quantity and price increased
     */
     public function iShouldSeeTheQuantityAndPriceIncreased()
     {
         $this->amOnPage("User/cart");
     }

    /**
     * @Given I want to remove :num1 chocolate donut
     */
     public function iWantToRemoveChocolateDonut($num1)
     {
         $this->amOnPage("User/cart");
     }

    /**
     * @Then I should see the quantity and price reduced
     */
     public function iShouldSeeTheQuantityAndPriceReduced()
     {
         $this->amOnPage("User/cart");
     }

    /**
     * @When click delete
     */
     public function clickDelete()
     {
         // $this->click("delete");
     }

    /**
     * @When click modify
     */
     public function clickModify()
     {
         // $this->click("modify");
     }


    /**
     * @When I write the feedback with rating
     */
     public function iWriteTheFeedbackWithRating()
     {
         $this->amOnPage("Product/shopAll");
     }

    /**
     * @When click post
     */
     public function clickPost()
     {
         // $this->click("post");
     }

    /**
     * @Then I see Make a purchase! alertbox on shop all page
     */
     public function iSeeMakeAPurchaseAlertboxOnShopAllPage()
     {
         $this->amOnPage("Product/shopAll");
     }

    /**
     * @Then I see current product feedback on shop all page
     */
     public function iSeeCurrentProductFeedbackOnShopAllPage()
     {
         $this->amOnPage("Product/shopAll");
     }


    /**
     * @Given I have registered seller account to login
     */
     public function iHaveRegisteredSellerAccountToLogin()
     {
         $this->amOnPage("User/index");
     }

    /**
     * @When I navigate to message center
     */
     public function iNavigateToMessageCenter()
     {
         $this->amOnPage("Product/shopAll");
     }

    /**
     * @Then I see all the messages send by the users
     */
     public function iSeeAllTheMessagesSendByTheUsers()
     {
         $this->amOnPage("Seller/messageCenter");
     }


    /**
     * @Given I have an account
     */
     public function iHaveAnAccount()
     {
         $this->amOnPage("User/index");
     }

    /**
     * @When I navigate to Shop All page
     */
     public function iNavigateToShopAllPage()
     {
         $this->amOnPage("Product/shopAll");
     }

    /**
     * @Then I see all the :arg1 with its :arg2 published by sender
     */
     public function iSeeAllTheWithItsPublishedBySender($arg1, $arg2)
     {
         $this->amOnPage("Product/shopAll");
     }

    /**
     * @Then I can select to see any specific category
     */
     public function iCanSelectToSeeAnySpecificCategory()
     {
         $this->amOnPage("Product/shopAll");
     }


    /**
     * @When I enter :arg1 in search bar
     */
     public function iEnterInSearchBar($arg1)
     {
         $this->fillField("searchItem",$arg1);
     }

         /**
     * @Then I see bagel
     */
     public function iSeeBagel()
     {
         $this->amOnPage("Product/shopAll");
     }



}
