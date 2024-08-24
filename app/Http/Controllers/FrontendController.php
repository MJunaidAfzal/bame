<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //PLAYERS
    public function players()
    {
        $data ['title'] = 'Players';
        return view('web.pages.players', $data);
    }

    //PLAYER DETAIL
    public function playerDetail()
    {
        $data ['title'] = 'Player Detail';
        return view('web.pages.player_detail', $data);
    }

    //GALLERY
    public function gallery()
    {
        $data ['title'] = 'Gallery';
        return view('web.pages.gallery', $data);
    }

    //POINTS TABLE
    public function pointsTable()
    {
        $data ['title'] = 'Points Table';
        return view('web.pages.points_table', $data);
    }

    //ABOUT US
    public function aboutUs()
    {
        $data ['title'] = 'About Us';
        return view('web.pages.about_us', $data);
    }

    //CONTACT US
    public function contactUs()
    {
        $data ['title'] = 'Contact Us';
        return view('web.pages.contact_us', $data);
    }

    //WISHLIST
    public function wishlist()
    {
        $data ['title'] = 'Wishlist';
        return view('web.pages.wishlist', $data);
    }

    //CART
    public function cart()
    {
        $data ['title'] = 'Cart';
        return view('web.pages.cart', $data);
    }

    //TOURNAMENT
    public function tournament()
    {
        $data ['title'] = 'Tournament';
        return view('web.pages.tournament', $data);
    }

    //TOURNAMENT DETAIL
    public function tournamentDetail()
    {
        $data ['title'] = 'Tournament Detail';
        return view('web.pages.tournament_detail', $data);
    }

    //SHOP
    public function shop()
    {
        $data ['title'] = 'Shop';
        return view('web.pages.shop', $data);
    }

    //SHOP DETAIL
    public function shopDetail()
    {
        $data ['title'] = 'Shop Detail';
        return view('web.pages.shop_detail', $data);
    }

    //BLOG
    public function blog()
    {
        $data ['title'] = 'Blog';
        return view('web.pages.blog', $data);
    }

    //BLOG DETAIL
    public function blogDetail()
    {
        $data ['title'] = 'Blog Detail';
        return view('web.pages.blog_detail', $data);
    }

    //GAME
    public function game()
    {
        $data ['title'] = 'Game';
        return view('web.pages.game', $data);
    }

    //GAME DETAIL
    public function gameDetail()
    {
        $data ['title'] = 'Game Detail';
        return view('web.pages.game_detail', $data);
    }
}
