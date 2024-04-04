<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Postmodel extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'context', 'imagepath', 'user_id']; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
