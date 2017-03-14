<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use \Cart as Cart;

class CartTest extends BrowserKitTestCase
{

    /** @test */
    public function it_redirects_home_page_to_shop_page()
    {
        $this->visit('/')
             ->seePageIs('/shop')
             ->see('Laravel Shopping Cart Example');
    }

    /** @test */
    public function it_loads_the_shop_page()
    {
        $this->visit('/shop')
             ->see('Laravel Shopping Cart Example')
             ->see('Playstation 4');
    }

    /** @test */
    public function it_loads_the_product_page()
    {
        $this->visit('/shop')
             ->click('Playstation 4')
             ->seePageIs('/shop/playstation-4');
    }

    /** @test */
    public function it_loads_the_cart_page_with_no_products()
    {
        $this->visit('/shop')
             ->click('Cart (0)')
             ->seePageIs('/cart')
             ->see('You have no items in your shopping cart');
    }

    /** @test */
    public function it_adds_a_product_to_the_shopping_cart()
    {
        $this->visit('/shop/playstation-4')
             ->press('Add to Cart')
             ->seePageIs('/cart')
             ->see('Item was added to your cart')
             ->see('Cart (1)');
    }

    /** @test */
    public function it_removes_a_product_from_the_shopping_cart()
    {
        $this->visit('/shop/playstation-4')
             ->press('Add to Cart')
             ->seePageIs('/cart')
             ->see('Item was added to your cart')
             ->press('Remove')
             ->see('Item has been removed');
    }

    /** @test */
    public function it_removes_all_products_from_the_shopping_cart()
    {
        $this->visit('/shop/playstation-4')
             ->press('Add to Cart')
             ->seePageIs('/cart')
             ->see('Item was added to your cart')
             ->visit('/shop/xbox-one')
             ->press('Add to Cart')
             ->seePageIs('/cart')
             ->see('Item was added to your cart')
             ->press('Empty Cart')
             ->see('Your cart has been cleared')
             ->see('Cart (0)');
    }

    /** @test */
    public function it_updates_the_quantity_of_a_product()
    {
        Cart::add(1, 'Playstation 4', 1, 399.99)->associate('App\Product');

        $this->json('PATCH', '/cart/' . Cart::content()->first()->rowId, ['quantity' => 4])
             ->seeStatusCode(200)
             ->seeJson(['success' => true])
             ->assertEquals(4, Cart::content()->first()->qty);
    }

    /** @test */
    public function it_does_not_update_the_quantity_of_a_product_if_not_between_1_and_5()
    {
        Cart::add(1, 'Playstation 4', 1, 399.99)->associate('App\Product');;

        $this->json('PATCH', '/cart/' . Cart::content()->first()->rowId, ['quantity' => 6])
             ->seeStatusCode(200)
             ->seeJson(['success' => false])
             ->assertEquals(1, Cart::content()->first()->qty);
    }

    /** @test */
    public function it_adds_a_product_to_the_wishlist()
    {
        $this->visit('/shop/playstation-4')
             ->press('Add to Wishlist')
             ->seePageIs('/shop')
             ->see('Item was added to your wishlist')
             ->see('Wishlist (1)')
             ->visit('/wishlist')
             ->see('Playstation 4');
    }

    /** @test */
    public function it_removes_a_product_from_the_wishlist()
    {
        $this->visit('/shop/playstation-4')
             ->press('Add to Wishlist')
             ->seePageIs('/shop')
             ->see('Item was added to your wishlist')
             ->see('Wishlist (1)')
             ->visit('/wishlist')
             ->see('Playstation 4')
             ->press('Remove')
             ->see('Item has been removed');
    }

    /** @test */
    public function it_removes_all_products_from_the_wishlist()
    {
        $this->visit('/shop/playstation-4')
             ->press('Add to Wishlist')
             ->seePageIs('/shop')
             ->see('Item was added to your wishlist')
             ->visit('/shop/xbox-one')
             ->press('Add to Wishlist')
             ->seePageIs('/shop')
             ->see('Item was added to your wishlist')
             ->visit('/wishlist')
             ->press('Empty Wishlist')
             ->see('Your wishlist has been cleared')
             ->see('Wishlist (0)');
    }

     /** @test */
    public function it_moves_a_product_from_wishlist_to_cart()
    {
        $this->visit('/shop/playstation-4')
             ->press('Add to Wishlist')
             ->seePageIs('/shop')
             ->see('Item was added to your wishlist')
             ->visit('/wishlist')
             ->press('To Cart')
             ->see('Item has been moved to your shopping cart')
             ->see('Wishlist (0)')
             ->see('Cart (1)')
             ->visit('/cart')
             ->see('Playstation 4');
    }

     /** @test */
    public function it_moves_a_product_from_cart_to_wishlist()
    {
        $this->visit('/shop/playstation-4')
             ->press('Add to Cart')
             ->seePageIs('/cart')
             ->see('Item was added to your cart')
             ->press('To Wishlist')
             ->see('Item has been moved to your wishlist')
             ->see('Wishlist (1)')
             ->see('Cart (0)')
             ->visit('/wishlist')
             ->see('Playstation 4');
    }


}
