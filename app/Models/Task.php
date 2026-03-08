<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Allow mass assignment
    protected $fillable = ['title', 'completed'];

    // Ensure 'completed' is always treated as boolean
    protected $casts = [
        'completed' => 'boolean',
    ];
}