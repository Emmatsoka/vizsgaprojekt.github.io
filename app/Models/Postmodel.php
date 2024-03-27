<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Postmodel extends Model
{
    //use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['name','title', 'context', 'imagepath'];
/*
    public function UserKapcs(){
        return $this->BelongsTo(User::class, 'id');
    }
*/
}
