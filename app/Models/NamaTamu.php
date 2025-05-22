<?php

/**
 * @property \Illuminate\Database\Eloquent\Factories\Factory $factory
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NamaTamu extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama'
    ];
}
