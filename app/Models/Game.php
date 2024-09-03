<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'producer',
        'price',
        'description',
        'cover',
        'user_id',
    ];
    /* OPPURE  protected $fillable = [
        'title',
        'author',
        'cover',
        'plot'  ]; */
        public function user (){
            return $this->belongsTo(User::class);
        }
        public function consoles (){
            return $this->belongsToMany(Console::class);
        }
}
