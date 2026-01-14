<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    /** @use HasFactory<\Database\Factories\ComplaintFactory> */
    use HasFactory;

    protected $fillable = [
        'ticket',
        'title',
        'description',
        'category',
        'location',
        'reporter_name',
        'reporter_contact',
        'status',
    ];
}
