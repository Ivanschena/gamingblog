<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'logo',
        'description',
        'user_id' //!<------
    //!Ricordarsi il Fillable    
    ];
    //! Una console appartiene solo ad un utente (Metodo al singolare 'user')
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //! Una console appartiene a più giochi (Metodo al plurale 'games')
    public function games (){
        return $this->belongsToMany(Game::class);
    }
}
