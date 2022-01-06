<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $table = 'user_info';
    protected $fillable = [
        'user_id',
        'full_name',
        'cv',
        'summary',
        'image',
        'location',
        'sector',
    ];
   
}
