<?php

namespace App\Models;

use App\Models\Pet;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends User
{
    use HasFactory;

    protected $fillable = [
        'fk_id_user'
    ];

    // relations
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function pets() {
        return $this->hasMany(Pet::class);
    }
}
