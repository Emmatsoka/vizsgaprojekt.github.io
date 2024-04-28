<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baratmodel extends Model
{
    use HasFactory;
    protected $table = 'baratok';

    protected $fillable = ['user_id', 'barat_id', 'statusz', 'baratok_ezota'];


}
