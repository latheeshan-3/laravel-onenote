<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class SourceNote extends Model
{
    use HasFactory;

    protected $table = 'sourcenote'; // Use the sourcenote table

    protected $fillable = [
        'name',
        'subject',
        'batch',
        'semester',
        'drive_link',
    ];
}


