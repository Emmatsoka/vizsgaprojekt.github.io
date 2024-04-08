<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likemodel extends Model
{
    use HasFactory;

    protected $table = 'likes';
    protected $fillable = ['user_id', 'post_id', 'szamlalo']; 

    public function post()
    {
        return $this->belongsTo(Postmodel::class, 'post_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
