<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentproject extends Model
{
    use HasFactory;
    protected $fillable = [
        'Destination',
        'StudentID',
        'ProjectID',
        'Titleoftheproject',
        'Description',
        'Technologies',
        'ProjectType'
        
    ];
}
