<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postmodel extends Model
{  protected $table = 'posts';

    // A töltésre engedélyezett mezők
    protected $fillable = ['context', 'imagepath', 'user_id'];

    // A dátum mezők
    protected $dates = ['created_at', 'updated_at'];

    // A bejegyzéshez tartozó felhasználó kapcsolata
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // A bejegyzéshez tartozó lájkok kapcsolata
    public function likes()
    {
        return $this->hasMany(Likemodel::class, 'post_id');
    }

    // A bejegyzéshez tartozó hozzászólások kapcsolata
    public function comments()
    {
        return $this->hasMany(Commentmodel::class, 'post_id');
    }

    // Az adott bejegyzést egy adott felhasználó lájkolta-e már
    public function likedByUser()
    {
        return $this->likes()->where('user_id', auth()->id())->exists();
    }
}
