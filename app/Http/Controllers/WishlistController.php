<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \Cart as Cart;


class WishlistController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('wishlist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Cart::instance('wishlist')->search(['id' => $request->id])) {
            return redirect('shop')->withSuccessMessage('Item is already in your wishlist!');
        }

        Cart::instance('wishlist')->associate('Product','App')->add($request->id, $request->name, 1, $request->price);
        return redirect('shop')->withSuccessMessage('Item was added to your wishlist!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::instance('wishlist')->remove($id);
        return redirect('wishlist')->withSuccessMessage('Item has been removed!');
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function emptyWishlist()
    {
        Cart::instance('wishlist')->destroy();
        return redirect('wishlist')->withSuccessMessage('Your wishlist his been cleared!');
    }

    /**
     * Switch item from wishlist to shopping cart.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchToCart($id)
    {
        $item = Cart::instance('wishlist')->get($id);

        Cart::instance('wishlist')->remove($id);

        if (Cart::instance('main')->search(['id' => $item->id])) {
            return redirect('wishlist')->withSuccessMessage('Item is already in your shopping cart!');
        }

        Cart::instance('main')->associate('Product','App')->add($item->id, $item->name, 1, $item->price);
        return redirect('wishlist')->withSuccessMessage('Item has been moved to your shopping cart!');

    }
}
