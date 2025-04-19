<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Recipe extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'rid'; 

    protected $fillable = [
        'name',
        'description',
        'type',
        'cookingtime',
        'ingredients',
        'instructions',
        'image',
        'uid'];

    public function user()
    {
        return $this->belongsTo(User::class, 'uid', 'uid');
    }
}

