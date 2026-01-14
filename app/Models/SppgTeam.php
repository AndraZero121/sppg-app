<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SppgTeam extends Model
{
    /** @use HasFactory<\Database\Factories\SppgTeamFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'leader_name',
        'phone',
        'coverage_area',
        'members_count',
        'notes',
    ];
}
