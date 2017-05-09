<?php

namespace App\Http\Controllers;

use App\Message;
use App\Http\Requests\CreateMessageRequest;
use Illuminate\Http\Request;


class MessagesController extends Controller
{
    //
    public function create(CreateMessageRequest $request){

        $user = $request->user();

    	$message = Message::create([
            'user_id' => $user->id,
    		 'content'=> $request->input('message'),
    		 'image' => 'http://lorempixel.com/600/338?'.mt_rand(0,1000),

    		]);
    	//dd($message);
    	return redirect('/messages/'.$message->id);
    }
	/*public function create(Request $request) {
		$this->validate($request, [
			'message' => ['required', 'max:160']
			],
			[
			'message.required' => 'Por favor, escribe tu mensaje.',
			'message.max' => 'El mensaje no debe superar los 160 caracteres'
			]);
		//dd($request->all());
	}*/


    public function show(Message $message)
    //($id)
    {
    	
    	//ir a buscar el Message por ID
    	//$message = Message::find($id);
    	//
    	//Una view de un message
    	return view('messages.show', [
    			'message' => $message
    		]);
    }
}
