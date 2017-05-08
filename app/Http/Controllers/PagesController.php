<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class PagesController extends Controller
{
    public function home() {
    	//$links = [
		//'https://twitter.com/ivanrojo07' => 'Twitter', 
		//'https://facebook.com/ivanrojo07' => 'Facebook',
		//'/about' => 'Nosotros'
	//];
        $messages =Message::all();
        /*[
            [
                'id' => 1,
                'content' => 'Este es mi primer mensaje!',
                'image' => 'http://lorempixel.com/600/338?1',
            ],
            [
                'id' => 2,
                'content' => 'Este es mi segundo mensaje!',
                'image' => 'http://lorempixel.com/600/338?2',
            ],
            [
                'id' => 3,
                'content' => 'Este es mi tercero mensaje!',
                'image' => 'http://lorempixel.com/600/338?3',
            ],
            [
                'id' => 4,
                'content' => 'Este es mi cuarto mensaje!',
                'image' => 'http://lorempixel.com/600/338?4',
            ],
            [
                'id' => 5,
                'content' => 'Este es mi ultimo mensaje!',
                'image' => 'http://lorempixel.com/600/338?5',
            ],
        ];*/
    return view('welcome', [
    	//'teacher' => 'Iván Rojo',
    	//'links' => $links
        'messages' => $messages
    	]);
    }

    public function about() {
	return view('about');
}
}
