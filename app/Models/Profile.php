<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'name', 'gender', 'age', 'height', 'weight', 'goals', 'trainer', 'photo',
    ];

    // Relasi ke User ok
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}// Simpan ke database
