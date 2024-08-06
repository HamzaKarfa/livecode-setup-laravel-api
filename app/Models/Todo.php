<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'description',
        'due_date',
    ];

    protected $casts = [
        'due_date' => 'date',
    ];


}
