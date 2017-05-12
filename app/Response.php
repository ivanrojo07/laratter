<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Message;

class Response extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
    	return $this->belongTo(User::class);

    }

    public function message()
    {
    	$this->belongsTo(Message::class);
    }
}
