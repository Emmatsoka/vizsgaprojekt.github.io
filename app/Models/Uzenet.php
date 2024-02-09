<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uzenet extends Model
{
   
    use HasFactory;

    protected $fillable=[
        'sender_id',
        'receiver_id',
        'last_time_message',
        'conversation_id',
        'read',
        'body',
    ];



    
    public function beszelget()
    {
        return $this->belongsTo(Beszelgetes::class);
        # code...
    }

    public function user( )
    {
        return $this->belongsTo(User::class ,'sender_id');
        # code...
    }
   
}