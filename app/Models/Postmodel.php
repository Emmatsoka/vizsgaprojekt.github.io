<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postmodel extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = [ 'context', 'imagepath', 'user_id'];

    protected $dates = [ 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(Likemodel::class, 'post_id'); // Hozzáadott 'post_id'
    }
}
