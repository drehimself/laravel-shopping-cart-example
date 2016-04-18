<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CartTest extends TestCase
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
             ->click('#playstation-4')
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
             ->see('Your cart his been cleared')
             ->see('Cart (0)');
    }


}
