<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /** @use HasFactory<\Database\Factories\MenuFactory> */
    use HasFactory;

    protected $fillable = [
        'served_on',
        'name',
        'description',
        'calories',
        'protein',
        'fat',
        'carbs',
        'fiber',
        'photo_path',
        'is_published',
    ];

    protected function casts(): array
    {
        return [
            'served_on' => 'date',
            'is_published' => 'boolean',
        ];
    }
}
