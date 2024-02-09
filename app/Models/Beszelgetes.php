<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beszelgetes extends Model
{
    use HasFactory;


    protected $fillable=[
        'sender_id',
        'receiver_id',
        'last_time_message',
    ];

    //relationships

    public function message( )
    {
        return $this->hasMany(Uzenet::class);

        # code...
    }

    public function user( )
    {
        return $this->belongsTo(User::class, 'sender_id');
        # code...
    }
}