<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libary extends Model
{
    use HasFactory;

    protected $fillable = [
        'buku',
        'user'
    ];
}