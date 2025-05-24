<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'pseudo', 'date_of_birth', 'sex', 'email',
        'game_type', 'protection_type', 'magazine_count',
        'game_date', 'game_time', 'game_count',
    ];
}